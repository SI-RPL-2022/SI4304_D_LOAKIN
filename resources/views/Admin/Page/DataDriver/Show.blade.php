@extends('Admin.Master')

@section('content')
                
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                            <h5 class="card-title mb-4 ms-4 mt-4" style="font-size: 24px;">Detail Data Driver</h5>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">   
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div style="margin: 3%; margin-top: 1%">
                                <center><img src="{{ asset('fotodriver/' . $driver->foto) }}" alt="foto" class="img-fluid" style="height: 20rem;"></center>
                                <div class="card-body">
                                    <h2 style="font-weight: bold">{{$driver->name}} </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Kode Driver</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$driver->kodedriver}} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Email</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$driver->username}} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Nomor Telepon</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$driver->nomortelepon}} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Alamat</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$driver->alamat}} </p>
                                        </div>
                                    </div>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection