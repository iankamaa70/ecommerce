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
                    <form action="{{ route('events.update', ['id' => $event->id ]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ $event->name }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Date</label>
                              <input type="date" name="event_date" class="form-control" value="{{ $event->date }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Time</label>
                              <input type="time" name="time" class="form-control" value="{{ $event->time }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Image</label>
                              <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{ $event->description }}</textarea>
                        </div>
                        <div class="form-group">
                              <button class="form-control btn btn-success">Save Event</button>
                        </div>
                  </form>
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
