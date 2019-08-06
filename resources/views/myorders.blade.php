@include('header')
<div class="breadcrumb">
        <div class="container">
           <div class="breadcrumb-inner">
              <ul class="list-inline list-unstyled">
                 <li><a href="/shop">Home</a></li>
                 <li><a href="#">My orders</a></li>
              </ul>
           </div>
        </div>
     </div>

     <div class="body-content">
            <div class="container">
                <h3>showing all orders<h3>
                    <table class="table table-hover table-bordered table-sm">
                        <thead>
                            <th>Payment status</th>
                                <th>Status</th>
                                    <th>Amount</th>
                                        <th>receipt</th>
                                            <th>view items</th>
                        </thead>
                        <tbody>
                            @forelse ($myorders as $order)
                            <tr>
                            <td>
                                @if ($order->transaction_id=="")
                            <a href="{{route('cart.paymenoptions.checkout',$order->id)}}">Pay now<a>
                                @else
                                    <p>Paid</p>
                                @endif
                            </td>
                            <td>
                                @if ($order->confirmed==0)
                                    <p>On route</p>
                                @else
                                <p>Delivered</p>
                                @endif
                            </td>
                                <td>${{$order->total}}</td>
                                    <td><a target="_blank" href="{{$order->receipt_url}}">View</a></td>
                        <td><a href="{{route('orderitems.users',$order->id)}}"> items</a></td>
                            </tr>
                            @empty
                                <div>You do not have any orders pending</div>
                            @endforelse
                            
                            
                            <tbody>
                    </table>

                     {{$myorders->links()}}
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
