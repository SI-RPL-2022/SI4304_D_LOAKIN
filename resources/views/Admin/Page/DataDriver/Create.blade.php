@extends('Admin.Master')

@section('content')
                
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                            <h5 class="card-title mb-0 mt-4 ms-4" style="font-size: 24px;">Tambah User Driver</h5>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">   
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div style="margin: 3%; margin-top: 1%">
                                <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('driverdata.create.process') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-3 mb-4">
                                                        <label>Nama Driver</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nama Driver" id="first-name-icon" value="{{old('nama_driver')}}" name="nama_driver" id="nama_driver" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" id="first-name-icon" value="{{old('username')}}" name="username" id="username" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" id="first-name-icon" value="{{old('password')}}" name="password" id="password" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Nomor Telepon</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Telepon" id="first-name-icon" value="{{old('telepon')}}" name="telepon" id="telepon" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Alamat" id="first-name-icon" value="{{old('alamat')}}" name="alamat" id="alamat" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Foto Driver</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input type="file" class="form-control" value="{{old('foto')}}" name="foto" onchange="loadFile(event)" >  
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;">
                                                        <button class="btn btn-primary" type="submit" name="produk">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection