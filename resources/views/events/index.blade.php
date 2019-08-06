@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">Events</div>

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
                              @foreach($events as $event)
                                    <tr>
                                          
                                          <td><img style="width: 90px;height: 60px" src="{{ asset($event->image) }}"></td>
                                          <td>{{ $event->name }}</td>
                                          <td>
                                                <a href="{{ route('events.edit', ['id' => $event->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('events.destroy', ['id' => $event->id ]) }}" method="post">
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
