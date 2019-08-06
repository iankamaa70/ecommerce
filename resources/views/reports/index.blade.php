@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">Reports</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                              
                              <th>
                                    image
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
                              @foreach($reports as $report)
                                    <tr>
                                          
                                          <td><img style="width: 90px;height: 60px" src="{{ asset($report->image) }}"></td>
                                          <td>{{ $report->name }}</td>
                                          <td>
                                                <a href="{{ route('reports.edit', ['id' => $report->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('reports.destroy', ['id' => $report->id ]) }}" method="post">
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
