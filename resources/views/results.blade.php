@include('header')
         <div class="body-content">
            <div class="fashion-v5">
               <div class="container">
                  <div class="row outer-top-sm ">
                     <div class="col-md-3 sidebar clearfix">
                        <div class="menu-bar animate-dropdown outer-bottom-xs">
                           <div class="menu-verticle">
                              <div class="head"><i class="fa fa-bars"></i>Categories</div>
                              <nav class="yamm navbar" role="navigation">
                                 <ul class="nav">
                                          
                                         
                                    <li class="dropdown menu-item no-menu"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">accessories</a> </li>
                                    
                                    <li class="dropdown menu-item no-menu"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">lookbook</a> </li>
                                    
                                    <li class="dropdown menu-item no-menu"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">shoes</a> </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                       
                  <div class="col-md-12 col-sm-6 col-xs-12">
                           <div class="news-letter wow fadeIn" data-wow-delay="0.2s">
                              <h3 class="section-title">Newsletter</h3>
                              <h6>sign up to our newsletter</h6>
                              <input type="text" class="email" placeholder="Enter your email"> <button class="btn btn-primary">subscribe</button> 
                           </div>
                        </div>
                     </div>
                     <div class="col-md-9">
 
                        
                        <h3 class="section-title">Search results for:  {{ $query }}</h3>
                        <div class="featured-product wow fadeInUp">
                           @if($products->count() > 0)
                           <div class="row">
                              @foreach($products as $product)
                           <div class="col-md-3">
                              <div class="item category-product">
                              <div class="products grid-v3 wow fadeInUp" data-wow-delay="0s">
                                 <div class="product">
                                    <div class="product-image">
                                       <a href="{{ asset($product->image) }}" data-lightbox="image-1">
                                          <div class="image"> <img src="{{ asset($product->image) }}" data-echo="{{ asset($product->image) }}" class="img-responsive" alt=""> </div>
                                          
                                          <div class="hover-effect"><i class="fa fa-search"></i></div>
                                       </a>
                                    </div>
                                    <div class="product-info">
                                       <h3 class="name"><a href="{{ route('products.single', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
                                       
                                       <div class="product-price"> <ins> <span class="amount">$ {{ $product->price }}</span> </ins> </div>
                                    </div>

                                    <form method="post" action="{{ route('cart.rapid.add') }}">
                                                 @csrf
                                             <input type="hidden" name="pdt_id" value="{{ $product->id }}">
                                             <div class="cart animate-effect">
                                                <div class="action">
                                                    <button class="btn btn-primary add-cart-button" type="submit">Add to cart
                                                    </button> 
                                                </div>
                                             </div>
                                             </form>

                                 </div>
                              </div>
                           </div> 
                           </div>
                           @endforeach



                           </div>
                           @else

        <h1 class="text-center">
          
            No results found.

        </h1>

      @endif

                        </div>

                        <div class="clearfix controls-product-bottom wow fadeInUp">
                           <div class="controls-product-item row">
                              <div class="col-sm-3 col-md-3">
                                 
                              </div>
                              <div class="col-sm-5 col-md-6">
                                 
                              </div>
                              <div class="col col-sm-4 col-md-3">
                                 
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @include('footer')
      
      
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="1/assets/js/jquery-1.11.2.min.js"></script> 
      <script src="1/assets/js/bootstrap.min.js"></script> 
      <script src="1/assets/js/bootstrap-slider.min.js"></script> 
      <script src="1/assets/js/owl.carousel.min.js"></script> 
      <script src="1/assets/js/bootstrap-hover-dropdown.min.js"></script> 
      <script src="1/assets/js/jquery.custom-select.js"></script> 
      <script src="1/assets/js/echo.min.js"></script> 
      <script src="1/assets/js/lightbox.min.js"></script> 
      <script src="1/assets/js/pace.min.js"></script> 
      <script src="1/assets/js/jquery.easing-1.3.min.js"></script> 
      <script src="1/assets/js/wow.min.js"></script> 
      <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54b609f040a301ca" async="async"></script> 
      <script src="assets/js/scripts.min.js"></script> 
      <script src="switchstylesheet/switchstylesheet.js"></script> 
      <script>
         $(document).ready(function(){ 
             $(".changecolor").switchstylesheet( { seperator:"color"} );
             $('.show-theme-options').click(function(){
                 $(this).parent().toggleClass('open');
                 return false;
             });
         });
         
         $(window).bind("load", function() {
            $('.show-theme-options').delay(2000).trigger('click');
         });
      </script> 
   </body>
</html>