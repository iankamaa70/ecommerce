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
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Create New Category</div>

                <div class="panel-body">
                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        
                        <div class="form-group">
                              <button type="submit" class="form-control btn btn-success">Save Category</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
