@extends('layouts.app')

@section('content')
<div class="container">
          @if ($errors->any())
            <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8" style="padding-top: 20px">
                        <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div>
                    </div>
                <div class="col-md-2"></div>
            </div>            
          @endif
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="background-color: white">
            <div class="panel panel-default" >
                <div class="panel-heading" style="text-align: center;padding:5px;"><h5>Current orders</h5></div>

                <div class="panel-body">
                        <table class="table table-hover table-striped">
                                <thead>
                                    <th>Transaction id</th>
                                        <th>Status</th>
                                            <th>Amount</th>
                                                <th>receipt</th>
                                                    <th>view order items</th>
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
                                            <p>Not delivered</p>
                                        @else
                                        <p>Delivered</p>
                                        @endif
                                    </td>
                                        <td>${{$order->total}}</td>
                                            <td><a target="_blank" href="{{$order->receipt_url}}">View</a></td>
                                <td><a href="{{route('admin.orderitems.users',$order->id)}}"> items</a></td>
                                    </tr>
                                    @empty
                                        <div>There are currently no orders</div>
                                    @endforelse
                                    
                                    
                                    <tbody>
                            </table>
        
                             {{$myorders->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  <script>
  tinymce.init({
        selector:"textarea",
        plugins: "image link code emoticons"

});
</script>
@endsection
