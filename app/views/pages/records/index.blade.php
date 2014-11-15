@extends('layouts.master')

@section('content')

<h1>My records</h1>

<hr>

@if($errors->first())
  <div class="alert alert-danger">
    {{{ $errors->first() }}}
  </div>
@endif

@if($message = Session::get('message'))
  <div class="alert alert-success">
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
	<table class="table table-striped">
		<thead>
			<th>Artist</th>
			<th>Title</th>
			<th>Year</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
			<td>{{{ $record->artist }}}</td>
			<td>{{{ $record->title }}}</td>
			<td>{{{ $record->year ? $record->year : 'Unknown' }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>You haven't added any records.<p>
	@endif
  </div>

  <div class="tab-pane" id="add">
  <h3>Add record</h3>
   {{ Form::open(array('route' => 'add_record')) }}
	<input name="artist" type="text" class="form-control" placeholder="Artist" value="{{{ Input::old('artist') }}}" required>
	<input name="title" type="text" class="form-control" placeholder="Title" value="{{{ Input::old('title') }}}" required>
	<input name="year" type="number" class="form-control" placeholder="Year" value="{{{ Input::old('year') }}}">
	<button class="btn btn-default" type="submit">Add record</button>
	{{ Form::close() }}
</div>

@stop