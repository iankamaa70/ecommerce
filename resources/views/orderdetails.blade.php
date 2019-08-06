@include('header')
<div class="breadcrumb">
        <div class="container">
           <div class="breadcrumb-inner">
              <ul class="list-inline list-unstyled">
                 <li><a href="/shop">Home</a></li>
                 <li><a href="/orders">Orders</a></li>
                 <li class='active'>Orderinfo</li>
              </ul>
           </div>
        </div>
     </div>

         <div class="body-content">
            <div class="fashion-v5">
               <div class="container">
                  <div class="row outer-top-sm ">
                     <div class="col-md-6 sidebar clearfix">
                        <div class="menu-bar animate-dropdown outer-bottom-xs">
                           <div class="menu-verticle">
                              <div class="head"><i class="fa fa-ship"></i>Shipping address</div>
                              <nav class="yamm navbar" role="navigation">
                                 <ul class="nav">
                                        <li class="dropdown menu-item no-menu"><b>Firstname: </b>{{$currentOrder->shippingfirstname}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Last name: </b>{{$currentOrder->shippinglastname}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Address1 : </b>{{$currentOrder->shippingaddress1}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Address2: </b>{{$currentOrder->shippingaddress2}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Country: </b>{{$currentOrder->country}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Town: </b>{{$currentOrder->shippingtown}}</li>
                                        <li class="dropdown menu-item no-menu"><b>State: </b>{{$currentOrder->shippingstate}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Postcode: </b>{{$currentOrder->shippingpostcode}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Email: </b>{{$currentOrder->shippingemail}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Mobile: </b>{{$currentOrder->shippingmobile}}</li>
                                        <li class="dropdown menu-item no-menu"><b>Company: </b>{{$currentOrder->company}}</li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                       
                
                     </div>
                     <div class="col-md-6 sidebar clearfix">
                            <div class="menu-bar animate-dropdown outer-bottom-xs">
                               <div class="menu-verticle">
                                  <div class="head"><i class="fa fa-address-card"></i>Billing Address</div>
                                  <nav class="yamm navbar" role="navigation">
                                     <ul class="nav">
                                            <li class="dropdown menu-item no-menu"><b>Firstname: </b>{{$currentOrder->billingfirstname}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Last name: </b>{{$currentOrder->billinglastname}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Address1 : </b>{{$currentOrder->billingaddress1}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Address2: </b>{{$currentOrder->billingaddress2}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Country: </b>{{$currentOrder->country}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Town: </b>{{$currentOrder->billingtown}}</li>
                                            <li class="dropdown menu-item no-menu"><b>State: </b>{{$currentOrder->billingstate}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Postcode: </b>{{$currentOrder->billingpostcode}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Email: </b>{{$currentOrder->billingemail}}</li>
                                            <li class="dropdown menu-item no-menu"><b>Mobile: </b>{{$currentOrder->billingmobile}}</li>
    
                                     </ul>
                                  </nav>
                               </div>
                            </div>
                           
                    
                         </div>

                         <div class="col-md-8 sidebar clearfix">
                                <table class="table">
                                        <thead>
                                            <th>name</th>
                                            <th>quantity</th>
                                            <th>price</th>
                                            <th style="text-align:center">Content</th>
                                        </thead>
                                        <tbody>
                                                @forelse ($orderitems as $item)
                                        <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>${{$item->price}}</td>
                                                <td>
                                                   @foreach ($products as $product)
                                                       @if ($product->id==$item->product_id)
                                                <a class="btn btn-primary  btn-block" href="{{URL::asset($product->content)}}" target="_blank">Click to view content</a>  
                                                       @endif
                                                   @endforeach
                                             <td>
                                    </tr>
                                                @empty
                                                    <div>no items present</div>
                                                @endforelse
                                        </tbody>
                                        
                                    </table>
                                 
                         </div>
                         <div class="col-md-4 sidebar clearfix">
                                <div class="menu-bar animate-dropdown outer-bottom-xs">
                                   <div class="menu-verticle">
                                      <div class="head"><i class="fa fa-address-card"></i>Order info</div>
                                      <nav class="yamm navbar" role="navigation">
                                         <ul class="nav">
                                         <li class="dropdown menu-item no-menu"><b>Total:</b>${{$currentOrder->total}}</li>
                                                <li class="dropdown menu-item no-menu"><a taget="_blank" href="{{$currentOrder->receipt_url}}">Receipt</a></li>
                                                <li class="dropdown menu-item no-menu"><b>Status: </b>
                                                @if ($currentOrder->confirmed==0)
                                                    <p>on route</p>
                                                @else
                                                <p>Delivered</p>
                                                @endif
                                                </li>
                                                <li class="dropdown menu-item no-menu"><b>Transaction ID: </b>{{$currentOrder->transaction_id}}</li>
                                         </ul>
                                      </nav>
                                   </div>
                                </div>
                               
                        
                             </div>
                       
                                 
                     
                  </div>
               </div>
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