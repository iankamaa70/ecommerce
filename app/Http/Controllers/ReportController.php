<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Report;

class ReportController extends Controller
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
        return view('reports.index',['reports'=>report::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
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
            'image' => 'required|image',
            'description' => 'required'
        ]);

        $report = new Report;

        $report_image = $request->image;

        $report_image_new_name = time() . $report_image->getClientOriginalName();

        $report_image->move('uploads/reports', $report_image_new_name);

        $report->name = $request->name;
        $report->description = $request->description;
        $report->image = 'uploads/reports/' . $report_image_new_name;

        $report->save();

        Session::flash('success', 'Report created.');

        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);
        return view('reports.edit')->with('report',$report);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
         $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        $report = new Report;

        

        $report->name = $request->name;
        $report->description = $request->description;
        

        $report->save();

        Session::flash('success', 'Report updated.');

        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::find($id);

        if(file_exists($report->image))
        {
            unlink($report->image);
        }

        $report->delete();


        Session::flash('success','The report was just deleted');


        return redirect()->back();
    }
}
