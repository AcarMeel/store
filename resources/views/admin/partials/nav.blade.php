<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hfont" href="#">Vive Store</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<p class="navbar-text g-font"><i class="fa fa-dashboard fa-2x"></i> My Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('admin.category.index')}}">Categories</a></li>
        <li><a href="{{route('admin.product.index')}}">Products</a></li>
        <li><a href="#">Carts</a></li>
        <li><a href="{{route('admin.user.index')}}">Users</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            	<i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Log out</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
