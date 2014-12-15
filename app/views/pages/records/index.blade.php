@extends('layouts.master')

@section('content')

  <h1>My records</h1>

  <hr>

  @if($errors->first())
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{{ $errors->first() }}}
    </div>
  @endif

  @if($message = Session::get('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{{ $message }}}
    </div>
  @endif

  <ul class="nav nav-tabs">
    <li class="active"><a href="#list" data-toggle="tab">Show records</a></li>
    <li><a href="#add" data-toggle="tab">Add record</a></li>
  </ul>

  <div id="myTabContent" class="tab-content">
    <br>

    <div class="tab-pane active in" id="list">
      @if($records && $records->count())
        <table id="records" class="table table-striped" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th>Artist</th>
            <th>Title</th>
            <th>Year</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($records as $record)
            <tr>
              <td>{{{ $record->artist }}}</td>
              <td>{{{ $record->title }}}</td>
              <td>{{{ $record->year ? $record->year : 'Unknown' }}}</td>
              <td>
                {{ Form::open(array('route' => 'delete_record')) }}
                <input type="hidden" name="id" value="{{ $record->id }}">
                <button type="submit" class="close">&times;</button>
                {{ Form::close() }}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      @else
        <p>You don't have any records yet.</p>
      @endif
    </div>

    <div class="tab-pane" id="add">
      {{ Form::open(array('route' => 'add_record')) }}
      <div class="form-group">
        <label for="artist">Artist</label>
        <input name="artist" type="text" class="form-control" placeholder="Enter artist"
               value="{{{ Input::old('artist') }}}" required>
      </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter title"
               value="{{{ Input::old('title') }}}" required>
      </div>
      <div class="form-group">
        <label for="year">Year (optional)</label>
        <input name="year" type="number" class="form-control" value="{{{ Input::old('year') }}}">
      </div>
      <button class="btn btn-default" type="submit">Add record</button>
      {{ Form::close() }}
    </div>

@stop
