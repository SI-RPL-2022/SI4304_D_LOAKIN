@extends('User.Master')
<style>
.label{
  display: inline-block;
  background-color: indigo;
  color: white;
  padding: 0.5rem;
  font-family: sans-serif;
  border-radius: 0.3rem;
  cursor: pointer;
  margin-top: 1rem;
}
</style>
@section('content')
    <div class="card shadow-lg mx-3 card-profile-bottom mt-4">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-lg-2">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ asset('fotouser/' . $account->foto) }}" alt="profile_image" class="img-fluid border-radius-lg " style="height: 100px; width: 100px; margin-right: 0px; border-radius: 50%">
            </div>
          </div>
          <div class="col-lg-6 my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{$account->name}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Status Member - <b>{{$account->status}}</b>
              </p>
            </div>
          </div>
          <div class="col-4 ">
            
            <form action="{{route('account.updateimg')}}" method="POST" id="logForm" enctype="multipart/form-data"> 
              {{ csrf_field() }}
              <div class="row">
              <div class="file-upload col-md-4" style="margin-top: 35px">
                <input type="file" id="upload" value="{{old('foto')}}" name="foto" hidden/>
                <label for="upload">Choose file</label>
              </div>
              <div class="col-md-6" style="margin-top: 30px">
                <button type="submit" class="form-control " style="background-color: #F58814; color:white;">Upload Foto Profile</button>
              </div>
              </div>
            </form>
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
            <form class="form form-horizontal" action="{{ route('account.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <p class="text-uppercase text-sm mb-2"><b>User Information</b></p>
              <div class="row">
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
                    <input class="form-control" type="text" name="nomor" value="{{$account->telepon}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
                <div class="row ">
                <div class="col-md-3">
                    <a href="#" class="btn btn-outline-light " style="background-color:#F58814;font-color:white; width:100%" type="submit" name="submit">
                      <i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Tambah Alamat</a>
                  </div>
                <div class="col-md-9">
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
                      <span class="text-lg font-weight-bolder"><b>89</b></span>
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
                  <i class="ni education_hat mr-2"></i>Status Member | <b>{{$account->status}}</b>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
@endsection