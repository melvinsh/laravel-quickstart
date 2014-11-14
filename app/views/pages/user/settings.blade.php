@extends('layouts.master')

@section('content')

@if($alert = Session::get('message'))
  <div class="alert alert-success">
    {{{ $alert }}}
  </div>
@endif

<h1>Settings</h1>

@stop