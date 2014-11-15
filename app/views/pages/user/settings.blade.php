@extends('layouts.master')

@section('content')

<h1>Settings</h1>

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
  <li class="active"><a href="#email" data-toggle="tab">E-mail settings</a></li>
  <li><a href="#password" data-toggle="tab">Password settings</a></li>
</ul>

<div id="myTabContent" class="tab-content">
  <br>
  <div class="tab-pane active in" id="email">
   <h3>Change e-mail</h3>
	{{ Form::open(array('route' => 'change_email')) }}
		<input name="current_email" type="email" class="form-control" placeholder="email@example.com" value="{{{ Auth::user()->email }}}" disabled>
		<input name="new_email" type="email" class="form-control" placeholder="New e-mail" required>
		<input name="current_password" type="password" class="form-control" placeholder="Current password" required>
		<button class="btn btn-default" type="submit">Change e-mail</button>
	{{ Form::close() }}
  </div>

  <div class="tab-pane" id="password">
   <h3>Change password</h3>
	{{ Form::open(array('route' => 'change_password')) }}
		<input name="current_password" type="password" class="form-control" placeholder="Old password" required>
		<input name="new_password" type="password" class="form-control" placeholder="New password" required>
		<input name="new_password_confirmation" type="password" class="form-control" placeholder="Confirm new password" required>
		<button class="btn btn-default" type="submit">Change password</button>
	{{ Form::close() }}
  </div>
</div>

@stop