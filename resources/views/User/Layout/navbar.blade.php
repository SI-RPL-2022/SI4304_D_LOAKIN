<nav class="navbar center navbar-expand-sm navbar-light bg-light navbar-fixed" >
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item" >
                    <a class="navbar-brand mx-100" href="">
                        <img src="{{asset('logo.png')}}" width="200" height="60" alt="">
                    </a>
                </li>
            </ul>
    
        @if(session()->has('user'))
        <ul class="navbar-nav  mb-2 mb-lg-0" style="color:black; font-family: 'Segoe UI', Arial, sans-serif;; font-weight:bold">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.index') }}" >HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('activityloakin.loakintrack') }}">ACTIVITY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('account.index')}}">ACCOUNT</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" ><i class="fa fa-user" aria-hidden="true" style="margin-right: 10px"></i>{{session()->get('user')->name}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('logoutuser')}}">Logout</a></li>
                </ul>
            </li>
        </ul>
        @else
        <ul class="navbar-nav  mb-2 mb-lg-0" style="color:black; font-family: 'Segoe UI', Arial, sans-serif;; font-weight:bold">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.index') }}" >HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('loginuser')}}">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('registeruser')}}">REGISTER</a>
            </li>
        </ul>
        @endif
        </div>
    </div>
</nav>