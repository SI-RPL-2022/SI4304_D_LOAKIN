@extends('Driver.Master')

@section('content')
    <div class="card shadow-lg mx-3 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ asset('fotodriver/' . $account->foto) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{$account->name}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Driver - {{$account->kodedriver}}
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class=" align-items-center">
                <h4 class="mb-3 mt-2">Edit Profile</h4>
              </div>
            </div>
            <form class="form form-horizontal" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <p class="text-uppercase text-sm mb-2"><b>User Information</b></p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Username</label>
                    <input class="form-control" type="text" name="username" value="{{$account->username}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" value="{{$account->name}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm"><b>Contact Information</b></p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat" value="{{$account->alamat}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nomor Telepon</label>
                    <input class="form-control" type="text" name="nomor" value="{{$account->nomortelepon}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
                <div class="row ">
                <div class="col-md-12">
                <button type="submit" class="form-control " style="background-color: #F58814; color:white;">Update Profile</button>
                </div>
                </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="{{ asset('bg1.jpg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="{{ asset('fotodriver/' . $account->foto) }}" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3 mb-4">
                
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">22 KM</span><br>
                      <span class="text-sm opacity-8">Perjalanan</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">89</span><br>
                      <span class="text-sm opacity-8">Pemesanan</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                    {{$account->name}}
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i>{{$account->alamat}}
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>{{$account->nomortelepon}}
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Driver | {{$account->kodedriver}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
@endsection