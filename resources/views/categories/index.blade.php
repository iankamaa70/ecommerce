@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">Categories</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                              
                              <th>
                                    #
                              </th>
                              <th>
                                    Name
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>
                        <tbody>
                              @foreach($categories as $category)
                                    <tr>
                                          
                                          <td>{{ $category->id }}</td>
                                          <td>{{ $category->name }}</td>
                                          <td>
                                                <a href="{{ route('categories.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('categories.destroy', ['id' => $category->id ]) }}" method="post">
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE') }}
                                                      <button class="btn btn-xs btn-danger">Delete</button>
                                                </form>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
