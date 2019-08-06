@include('header')
         <div class="breadcrumb">
            <div class="container">
               <div class="breadcrumb-inner">
                  <ul class="list-inline list-unstyled">
                     <li><a href="/shop">Home</a></li>
                     <li><a href="/shop">Shop</a> </li>
                     <li class='active'>{{$product->name}}</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="body-content details-v1">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 sidebar clearfix">
                     <div class="menu-bar animate-dropdown outer-bottom-xs">
                           <div class="menu-verticle">
                              <div class="head"><i class="fa fa-bars"></i>Categories</div>
                              <nav class="yamm navbar" role="navigation">
                                 <ul class="nav">
                                          
                                    @foreach($categories as $category)  
                                    <li class="dropdown menu-item no-menu"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">{{ $category->name }}</a> </li>
                                    @endforeach
                                    

                                 </ul>
                              </nav>
                           </div>
                        </div>
                  </div>

                  <div class="col-md-9 details-page">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder wow fadeInUp">
                           <div class="product-item-holder size-big single-product-gallery small-gallery">
                              <div id="owl-single-product">
                                 <div class="single-product-gallery-item" id="slide1"> <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($product->image) }}"> <img class="img-responsive" alt="" src="{{ asset($product->image) }}" data-echo=""/> </a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6 wow fadeInUp">
                           <div class="product-name">
                              <h3>{{ $product->name }}</h3>
                           </div>
                           <div class="details-product-price"> <ins class="amount">$ {{ $product->price }}</ins></div>
                           <form method="post" action="{{ route('cart.add') }}">
                              @csrf
                              <div class="point-of-action">
                              <div class="quantity"> <label>Qty:</label> <input name="qty" value="1" type="number"> </div>
                              <div class="add-to-cart"> 

                                 <input type="hidden" name="pdt_id" value="{{ $product->id }}">
                                 
                                 <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i> 
                                    add to cart
                                 </button> 

                              </div>
                           </div>


                           </form>
                           <div class="product-share-social">
                              <div class="addthis_native_toolbox"></div>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 outer-top-vs">
                           <div class="product-info-panel wow fadeInUp">
                              <ul class="nav nav-tabs" role="tablist">
                                 <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane fade in active" id="description">
                                    {!! $product->description !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
@include('footer')
</div>

      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{URL::asset('1/assets/js/jquery-1.11.2.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/bootstrap.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/bootstrap-slider.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/owl.carousel.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/bootstrap-hover-dropdown.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/jquery.custom-select.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/echo.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/lightbox.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/pace.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/jquery.easing-1.3.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/wow.min.js')}}"></script> 
      <script src="{{URL::asset('assets/js/scripts.min.js')}}"></script> 
      <script src="{{URL::asset('switchstylesheet/switchstylesheet.js')}}"></script> 
   </body>
</html>