@include('header')
         <div class="breadcrumb">
            <div class="container">
               <div class="breadcrumb-inner">
                  <ul class="list-inline list-unstyled">
                     <li><a href="/shop">Home</a></li>
                     <li class='active'>Shopping cart</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="body-content">
            <div class="container shopping-cart">
               <div class="table-responsive cart-inner wow fadeInUp" data-wow-delay="0.2s">
                  <h3 class="entry-title">shopping cart</h3>
                  
                     <table class="table table-bordered shop-table cart">
                        <thead>
                           <tr>
                              <th class="product-remove item">Remove</th>
                              <th class="product-name item">Product Name</th>
                              <th class="product-quantity item">Quantity</th>
                              <th class="product-price item">Price</th>
                              <th class="product-subtotal">Total</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <td colspan="7">
                                 <div class="shopping-cart-btn"> <span> <a href="/shop" class="btn btn-primary">Continue Shopping</a>  </span> </div>
                              </td>
                           </tr>
                        </tfoot>
                        <tbody>
                           @foreach (Cart::getContent() as $pdt)
                           <tr>
                              <td class="product-remove"><a href="{{ route('cart.delete', ['id' => $pdt->id]) }}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                              <td class="product-name"> <a class="name" href="">{{ $pdt->name }}</a></td>
                              <td class="product-quantity">
                                
                              <form method="POST" action="{{ route('cart.update',$pdt->id) }}" class="form-inline">
                                       @csrf
                                       <input readonly class="form-control" name="quantity" type="number" value="{{ $pdt->quantity }}"> 
                                       <input type="submit" value="update">
                                 </form>
                              </td>
                              <td class="product-price"><span class="price">${{ $pdt->price }}</span></td>
                              <td class="product-total"><span class="total">${{ $pdt->getPriceSum() }}</span></td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
              
               </div>
               <div class="row wow fadeInUp">
                  <div class="col-md-4 col-sm-6 estimate wow fadeInUp" data-wow-delay="0.2s">
                     
                  </div>
                  <div class="col-md-4 col-sm-6 discount-code wow fadeInUp" data-wow-delay="0.4s">
                     
                  </div>
                  <div class="col-md-4 col-sm-../12 cart-total wow fadeInUp" data-wow-delay="0.6s">
                     <table class="table table-bordered">
                        <tbody>
                           <tr>
                              <td class="sub-total"><span>Subtotal:</span></td>
                              <td class="sub-amount"><span>${{Cart::getSubTotal()}}</span></td>
                           </tr>
                           <tr>
                              <td class="grand-total"><span>Grand Total:</span></td>
                              <td class="total-amount"><span>${{Cart::getTotal()}}</span></td>
                           </tr>
                           <tr>
                              <td colspan="2" class="cart-button"> <a href="{{ route('cart.checkout') }}" class="btn btn-primary">PROCCED TO CHEKOUT</a> </td>
                           </tr>
                           <tr>
                              <td colspan="2" class="tag-line"> <span>Checkout with multiples address!</span> </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         @include('footer')


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- ...end JS Script -->

<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
    @endif
    @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif
</script>
      
      
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