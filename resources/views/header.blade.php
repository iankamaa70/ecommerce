<!DOCTYPE html> 
<html lang="en">

   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Shop</title>
      <link rel="stylesheet" href="{{URL::asset('1/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{URL::asset('1/assets/css/yamm.css')}}">
      <link rel="stylesheet" href="{{URL::asset('1/assets/css/config.css')}}">
      <link rel="stylesheet" href="{{URL::asset('1/assets/css/lightbox.css')}}">
      <link rel="stylesheet" href="{{URL::asset('1/assets/css/animate.min.css')}}">
      <link href="{{URL::asset('1/assets/css/main.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('1/assets/css/green.css')}}" rel="alternate stylesheet" title="Green color">
      <link href="{{URL::asset('1/assets/css/red.css')}}" rel="alternate stylesheet" title="Red color">
      <link href="{{URL::asset('1/assets/css/light-green.css')}}" rel="alternate stylesheet" title="Light Green color">
      <link href="{{URL::asset('1/assets/css/orange.css')}}" rel="alternate stylesheet" title="Orange color">
      <link href="{{URL::asset('1/assets/css/violet.css')}}" rel="alternate stylesheet" title="Violet color">
      <link href="{{URL::asset('1/assets/css/blue.css')}}" rel="alternate stylesheet" title="Blue color">
      <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,400,300,500,600,800,700,900' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
      
   </head>
   <body>
      <div id="wrapper" class="rimbus">
         <header>
            <div class="header-v5">
               <div class="top">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 top-bar">
                           <div class="language-currency">
                              <ul class="list-unstyled list-inline">
                                 <li class="dropdown dropdown-small">
                                    <a href="/">Home</a>  
                                 </li>
                                 <li class="dropdown dropdown-small">
                                    <a href="/shop">Store</a>  
                                 </li>
                                 <li class="dropdown dropdown-small">
                                    <a href="/orders">Orders</a>  
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 top-navbar">
                           <div class="top-nav">
                              <ul class="list-unstyled list-inline">
                                 <li class="hidden-xs"><a href="/cart">My Cart</a></li>
                                 <li><a href="/cart/checkout">Checkout</a></li>
                                      @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="dropdown dropdown-small">
                              <a href="#"  class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                 <span class="value"><i class="fa fa-user"></i>    {{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span></a> 
                              <ul class="dropdown-menu fadeIn animated">
                                 <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span style="color:black;" class="value"><i class="fa fa-sign-out"></i> {{ __('Logout') }}</span></a></li>
                              @if (Auth::user()->admin==1)
                              <li>
                                    <a href="/products"><span style="color:black;" class="value"><i class="fa fa-user"></i> Admin</span></a>
                                 </li>
                              @endif
                              
                             
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></ul>
                           </li>

                            
                        @endguest
                       
                                 
                              </ul>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="middle">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="option-search-bar">
                              <form method="GET" action="/results">
                                 @csrf
                              <div class="input-group">
                                 <input type="text"  name="query" class="form-control" placeholder="Type and hit Enter..."> <span class="input-group-btn"> <button class="btn" type="button"><i class="fa fa-search"></i></button> </span> 
                              </div>
                           </form>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 logo">
                           
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3">
                           <div class="dropdown dropdown-cart shopping-cart">
                              <a href="#" class="dropdown-toggle lnk-cart" data-hover="dropdown" data-toggle="dropdown">
                                 <div class="items-cart-inner">
                                    <div class="total-price-basket "> <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-info"> <span class="label-name">shopping cart</span> <span class="cart-count"> {{ Cart::getTotalQuantity() }} item(s)-<span class="amount">${{ Cart::getTotal() }}</span></span> </span> </div>
                                 </div>
                              </a>
                              <ul class="dropdown-menu fadeIn animated">
                                 <li>
                                    <div class="cart-item product-summary inner-bottom-20">
                                       <div class="row">
                                          @foreach (Cart::getContent() as $pdt)
                                          <div class="col-xs-4">
                                             <div class="image"> <a href="index635c.html?page=details-v1" class="img-responsive"><img class="img-responsive" src="assets/images/products/11.jpg" alt=""></a> </div>
                                          </div>
                                          <div class="col-xs-7 padding-no">
                                             <h3 class="name"><a href="index635c.html?page=details-v1">{{ $pdt->name }}</a></h3>
                                             <div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%"></span> </div>
                                             <div class="price">${{ $pdt->price }}</div>
                                          </div>
                                          <div class="col-xs-1 action"> <a href="{{ route('cart.delete', ['id' => $pdt->id]) }}"><i class="fa fa-trash"></i></a> </div>
                                          @endforeach
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="clearfix cart-total">
                                       <div class="clearfix"></div>
                                       <a href="/cart" class="btn btn-upper btn-primary btn-block">Checkout</a> 
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </header>