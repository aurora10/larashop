<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('product.cart')}}"> <i class="fas fa-shopping-cart"></i> Shoping Cart
                   <span class="badge">{{Session::has('cart') ?  Session::get('cart')->totalQty : ''}}</span>
                    <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="{{route('product.cart')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> User Management
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    {{--to make elements visible based of Auth--}}
                    @if(Auth::check())
                        <a class="dropdown-item" href="{{route('user.profile')}}">User Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{{route('signup.index')}}">Signup</a>
                        <a class="dropdown-item" href="{{route('user.signin')}}">Signin</a>
                    @endif



                </div>
            </li>

        </ul>

    </div>
</nav>
