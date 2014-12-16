@extends('layouts.master')

@section('content')

  <h1>Settings</h1>

  <hr>

  @include('includes.messages')

  <ul class="nav nav-tabs">
    <li class="active"><a href="#email" data-toggle="tab">E-mail settings</a></li>
    <li><a href="#password" data-toggle="tab">Password settings</a></li>
  </ul>

  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="email">
      <h3>Change e-mail</h3>
      {{ Form::open(array('route' => 'change_email')) }}
      <div class="form-group">
        <label for="current_email">Current e-mail</label>
        <input name="current_email" type="email" class="form-control" placeholder="email@example.com"
               value="{{{ Auth::user()->email }}}" disabled>
      </div>
      <div class="form-group">
        <label for="new_email">New e-mail</label>
        <input name="new_email" type="email" class="form-control" placeholder="New e-mail" required>
      </div>
      <div class="form-group">
        <label for="current_password">Current password</label>
        <input name="current_password" type="password" class="form-control" placeholder="Current password"
               required>
      </div>
      <button class="btn btn-default" type="submit">Change e-mail</button>
      {{ Form::close() }}
    </div>

    <div class="tab-pane" id="password">
      <h3>Change password</h3>
      {{ Form::open(array('route' => 'change_password')) }}
      <div class="form-group">
        <label for="current_password">Current password</label>
        <input name="current_password" type="password" class="form-control" placeholder="Current password"
               required>
      </div>
      <div class="form-group">
        <label for="new_password">New password</label>
        <input name="new_password" type="password" class="form-control" placeholder="New password" required>
      </div>
      <div class="form-group">
        <label for="new_password_confirmation">Confirm new password</label>
        <input name="new_password_confirmation" type="password" class="form-control"
               placeholder="Confirm new password" required>
      </div>
      <button class="btn btn-default" type="submit">Change password</button>
      {{ Form::close() }}
    </div>
  </div>

@stop
