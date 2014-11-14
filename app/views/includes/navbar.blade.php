<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel Quickstart</a>
    </div>
	    <div id="navbar" class="navbar-collapse collapse">
		    @if (Auth::check())
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Dashboard</a></li>
		        <li><a href="#about">Things</a></li>
		        <li><a href="#contact">Other things</a></li>
		      </ul>

		      <ul class="nav navbar-nav navbar-right">
		          <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->email }} <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Profile</a></li>
		            <li><a href="#">Settings</a></li>
		            <li class="divider"></li>
		            <li><a href="/logout">Sign out</a></li>
		          </ul>
		        </li>
		  </ul>
		@endif
		@if (!Auth::check())
		<ul class="nav navbar-nav navbar-right">
	            <li><a href="/login">Sign in</a></li>
		        <li><a href="/signup">Sign up</a></li>
		</ul>
		@endif
	    </div><!--/.nav-collapse -->
  </div>
</nav>