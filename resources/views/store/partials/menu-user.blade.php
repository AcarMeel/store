@if(Auth::check())
	<li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      	<i class="fa fa-user fa-2x"></i> {{ Auth::user()->user }} <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Log out</a></li>
      </ul>
    </li>
@else
	<li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-2x"></i> <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{route('login-get')}}"><i class="fa fa-sign-in"></i> Log in</a></li>
        <li><a href="{{route('register-get')}}"><i class="fa fa-user-plus"></i> Register</a></li>
      </ul>
    </li>
@endif
