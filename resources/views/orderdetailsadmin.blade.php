@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">order details</div>

                <div class="panel-body">

                    <div class="row" align="center">
                        <div class="col-6">
                                <div class="panel panel-default" style="background-color: white;">
                                        <div class="panel-heading" style="text-align: center;"><h4>Shipping address</h4></div>
                        
                                        <div class="panel-body">
                                            <ul style="list-style: none;">
                                                    <li><b>Firstname: </b>{{$currentOrder->shippingfirstname}}</li>
                                                    <li><b>Last name: </b>{{$currentOrder->shippinglastname}}</li>
                                                    <li><b>Address1 : </b>{{$currentOrder->shippingaddress1}}</li>
                                                    <li><b>Address2: </b>{{$currentOrder->shippingaddress2}}</li>
                                                    <li><b>Country: </b>{{$currentOrder->country}}</li>
                                                    <li><b>Town: </b>{{$currentOrder->shippingtown}}</li>
                                                    <li><b>State: </b>{{$currentOrder->shippingstate}}</li>
                                                    <li><b>Postcode: </b>{{$currentOrder->shippingpostcode}}</li>
                                                    <li><b>Email: </b>{{$currentOrder->shippingemail}}</li>
                                                    <li><b>Mobile: </b>{{$currentOrder->shippingmobile}}</li>
                                                    <li><b>Company: </b>{{$currentOrder->company}}</li>
                                            
                                            </ul>
                                                </div>
                                    </div>
                        </div>
                        <div class="col-6">
                                <div class="panel panel-default" style="background-color: white">
                                        <div class="panel-heading" style="text-align: center;"><h4>Billing address</h4></div>
                        
                                        <div class="panel-body">
                                                <ul style="list-style: none;">
                                                        <li><b>Firstname: </b>{{$currentOrder->billingfirstname}}</li>
                                                        <li><b>Last name: </b>{{$currentOrder->billinglastname}}</li>
                                                        <li><b>Address1 : </b>{{$currentOrder->billingaddress1}}</li>
                                                        <li><b>Address2: </b>{{$currentOrder->billingaddress2}}</li>
                                                        <li><b>Country: </b>{{$currentOrder->country}}</li>
                                                        <li><b>Town: </b>{{$currentOrder->billingtown}}</li>
                                                        <li><b>State: </b>{{$currentOrder->billingstate}}</li>
                                                        <li><b>Postcode: </b>{{$currentOrder->billingpostcode}}</li>
                                                        <li><b>Email: </b>{{$currentOrder->billingemail}}</li>
                                                        <li><b>Mobile: </b>{{$currentOrder->billingmobile}}</li>
                
                                                </ul>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-sm-8">
                                <table class="table">
                                        <thead>
                                            <th>name</th>
                                            <th>quantity</th>
                                            <th>price</th>
                                        </thead>
                                        <tbody>
                                                @forelse ($orderitems as $item)
                                        <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>${{$item->price}}</td>
                                    </tr>
                                                @empty
                                                    <div>no items present</div>
                                                @endforelse
                                        </tbody>
                                        
                                    </table>
                        </div>
                        <div class="col-4" align="left">

                                <div class="panel panel-default" style="background-color: white">
                                        <div class="panel-heading" style="text-align: center;"><h4>Order details</h4></div>
                        
                                        <div class="panel-body">
                                                <ul style="list-style: none;">
                                                        <li class="dropdown menu-item no-menu"><b>Total:</b>${{$currentOrder->total}}</li>
                                                               <li class="dropdown menu-item no-menu"><a taget="_blank" href="{{$currentOrder->receipt_url}}">Receipt</a></li>
                                                               <li class="dropdown menu-item no-menu"><b>Status: </b>
                                                               @if ($currentOrder->confirmed==0)
                                                               <a href="{{route('admin.updateorder.users',$currentOrder->id)}}">Mark as delivered</a>
                                                               @else
                                                               <p>Delivered</p>
                                                               @endif
                                                               </li>
                                                              </ul>
                                        </div>
                                </div>
                               
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>
@endsection
