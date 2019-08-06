@include('header')
<div class="breadcrumb">
        <div class="container">
           <div class="breadcrumb-inner">
              <ul class="list-inline list-unstyled">
                 <li><a href="/shop">Home</a></li>
                 <li><a href="/cart">Cart</a></li>
                 <li class='active'>payemnt</li>
              </ul>
           </div>
        </div>
     </div>

     <div class="body-content">
            <div class="container">
                <h3>pay for order by stripe<h3>

                        <form action="{{ route('cart.checkout.payment',$order->id) }}" method="POST">
                                {{ csrf_field() }}
                                  <script
                                      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                      data-key="pk_test_i9jBBeZvop45wcORa8rVVvuL00lPpi1Sjc"
                                      data-amount="{{ $order->total * 100 }}"
                                      data-name="Samoan Independent Seventh Day Adventist Church"
                                      data-description="Buy cart items"
                                      data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                      data-locale="auto">
                                  </script>
                               </form>
            </div>
     </div>

     @include('footer')
      
      
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
      
      <script type="text/javascript">
         $("#same_address").change(function(){
           if($("#same_address").is(":checked")){
                  console.log("changed");

            $("#shippingfirstname").val($("#billingfirstname").val());
            $("#shippinglastname").val($("#billinglastname").val());
            $("#shippingaddress1").val($("#billingaddress1").val());
            $("#shippingaddress2").val($("#billingaddress2").val());
            $("#shippingtown").val($("#billingtown").val());
            $("#shippingstate").val($("#billingstate").val());
            $("#shippingpostcode").val($("#billingpostcode").val());
            $("#shippingemail").val($("#billingemail").val());
            $("#shippingmobile").val($("#billingmobile").val());

           }
         })
      </script>
   </body>
</html>
