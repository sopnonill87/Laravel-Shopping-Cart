<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('product.index') }}">Laravel Shopping Cart(Mridul)</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Mangagement <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @if(Auth::check())
                        <li><a href="{{ route('user.profile') }}"><i class="fa fa-cog" aria-hidden="true"></i> Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('user.logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
                    @else
                        <li><a href="{{ route('user.signup') }}"><i class="fa fa-cog" aria-hidden="true"></i> Sign Up</a></li>
                        <li><a href="{{ route('user.signin') }}"><i class="fa fa-cog" aria-hidden="true"></i> Sign In</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>