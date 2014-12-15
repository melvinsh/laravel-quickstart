@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <h1 class="page-header">Sign in</h1>

      @if($alert = Session::get('error'))
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{{ $alert }}}
        </div>
      @endif

      @if($alert = Session::get('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{{ $alert }}}
        </div>
      @endif

      {{ Form::open(array('route' => 'post_login')) }}
      <div class="form-group">
        <label for="email">E-mail</label>
        <input name="email" type="email" class="form-control" placeholder="Enter e-mail" value="demo@demo.local"
               required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password" value="demo!"
               required>
      </div>
      <button class="btn btn-default btn-block" type="submit">Sign in</button>
      {{ Form::close() }}
    </div>
  </div>
@stop
