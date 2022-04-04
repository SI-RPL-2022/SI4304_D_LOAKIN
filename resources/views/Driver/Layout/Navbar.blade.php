<style>
  .menu-title:hover{
    color: #000;
  }
</style>
<div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{asset('logo.png')}}" alt="logo" />
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('logoatas.png')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="{{ route('profile.index') }}" >
                    <div class="nav-profile-img">
                      <img src="{{ asset('fotodriver/' . session()->get('driver')->foto) }}" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> {{session()->get('driver')->name}} </p>
                    </div>
                  </a>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar" style="background-color: #F58814; ">
          <div class="container">
            <ul class="nav page-navigation d-flex justify-content-center">
              <li class="nav-item" style="padding-left: 3%; padding-right: 3%">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                  <i class="mdi mdi-compass-outline menu-icon "></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item" style="padding-left: 3%; padding-right: 3%">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Data Pemesanan</span>
                </a>
              </li>
              <li class="nav-item " style="padding-left: 3%; padding-right: 3%">
                <a class="nav-link " href="#">
                  <i class="mdi mdi-contacts menu-icon"></i>
                  <span class="menu-title">History Pemesanan</span>
                </a>
              </li>
              <li class="nav-item" style="padding-left: 3%; padding-right: 3%">
                <a class="nav-link" href="{{ route('logoutdriver') }}">
                  <i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
              </li>
              <li class="nav-item">
              </li>
              
            </ul>
          </div>
        </nav>
      </div>