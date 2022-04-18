@extends('Admin.Master')

@section('content')
                
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                            <h5 class="card-title mb-4 ms-4 mt-4" style="font-size: 24px;">Detail Data User</h5>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">   
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div style="margin: 3%; margin-top: 1%">
                                <center><img src="{{ asset('fotouser/' . $user->foto) }}" alt="foto" class="img-fluid" style="height: 20rem;"></center>
                                <div class="card-body">
                                    <h2 style="font-weight: bold">{{$user->name}} </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Status Member</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$user->status}} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Email</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$user->email}} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Nomor Telepon</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$user->telepon}} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Alamat</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$user->alamat}} </p>
                                        </div>
                                    </div>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection