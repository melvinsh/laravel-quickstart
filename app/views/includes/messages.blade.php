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