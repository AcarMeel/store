<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hfont" href="{{route('home')}}">Vive Store</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<p class="navbar-text">Live in our world! <small class="ds-font">by AcarMeel</small></p>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><i class="fa fa-heart fa-2x"></i></a></li>
      	<li><a href="#"><i class="fa fa-envelope fa-2x"></i></a></li>
        <li><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-2x"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-sign-in"></i> Log in</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>