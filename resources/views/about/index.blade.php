@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">About Us Content</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                              
          
                              <th>
                                    Content
                              </th>
                              <th>
                                    Edit
                              </th>
                              
                        </thead>
                        <tbody>
                                    <tr>
                                          
                                          @foreach($abouts as $about)
                                          <td></td>
                                          <td>
                                                <a href="{{ route('about.edit', ['id' => $about->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                          </td>
                                         @endforeach 
                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
