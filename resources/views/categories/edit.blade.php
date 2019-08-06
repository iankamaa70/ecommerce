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
                <div class="panel-heading" style="text-align: center;">Dashboard</div>

                <div class="panel-body">
                    <form action="{{ route('categories.update', ['id' => $category->id ]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        </div>
                        
                        <div class="form-group">
                              <button class="form-control btn btn-success">Save Category</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
