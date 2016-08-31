<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL::to('/')}}">Recert</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <li><a href="{{URL::to('/auth/logout')}}">Logout</a></li>
        @else
        <li><a href="{{URL::to('/auth/login')}}">Login</a></li>
        <li><a href="{{URL::to('/auth/register')}}">Register</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>