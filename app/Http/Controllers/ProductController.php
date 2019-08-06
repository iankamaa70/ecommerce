<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Product;
use Illuminate\Http\Request;
use Session;
use App\Category;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index',['products'=>product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        
        return view('products.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'content' => 'required|mimes:mp4,mov,ogg,qt,pdf',
            'image' => 'required|image',
            'category_id' => 'required|integer'
        ]);

        $product = new Product;

        $product_image = $request->image;

        $product_image_new_name = time() . $product_image->getClientOriginalName();

     //   $product_image->move('uploads/products', $product_image_new_name);


     $image_resize = Image::make($product_image->getRealPath());              
    $image_resize->resize(600, 600);
    $image_resize->save(public_path('uploads/products/' .$product_image_new_name));

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = 'uploads/products/' . $product_image_new_name;


        $product_content=$request->content;
        $product_content_new_name=time().$product_content->getClientOriginalName();
        $product_content->move('uploads/content/',$product_content_new_name);

        $product->content='uploads/content/'.$product_content_new_name;

        $product->save();

        Session::flash('success', 'Product created.');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit')->with('product',$product)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'content' => 'required|mimes:mp4,mov,ogg,qt,pdf',
            'category_id' => 'required|integer'
        ]);
        
        $product = Product::find($id);

        if($request->hasFile('image'))
        {
            $product_image = $request->image;

            $product_image_new_name = time() . $product_image->getClientOriginalName();

           // $product_image->move('uploads/products', $product_image_new_name);
            $image_resize = Image::make($product_image->getRealPath());              
            $image_resize->resize(600, 600);
            $image_resize->save(public_path('uploads/products/' .$product_image_new_name));


            $product->image = 'uploads/products/' . $product_image_new_name;

            
        }
        if($request->hasFile('content'))
        {
            $product_content=$request->content;
            $product_content_new_name=time().$product_content->getClientOriginalName();
            $product_content->move('uploads/content/',$product_content_new_name);
    
            $product->content='uploads/content/'.$product_content_new_name;

            
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        

        $product->save();

        Session::flash('success', 'Product updated.');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if(file_exists($product->image))
        {
            unlink($product->image);
        }

        $product->delete();


        Session::flash('success','The product was just deleted');


        return redirect()->back();
    }
}
