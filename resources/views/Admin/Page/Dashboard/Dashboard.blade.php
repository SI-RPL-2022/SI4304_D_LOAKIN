@extends('Admin.Master')

@section('content')
            <div class="row">   
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                        <div class="row">
                            
                            <div class="col-8">
                            <div class="numbers">
                                <a href="{{ route('userdata.index') }}">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Data User</p>
                                <h5 class="font-weight-bolder">
                                {{$user}}
                                </h5>
                                </a>
                            </div>
                            </div>
                            
                            <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                        <div class="row">
                         
                            <div class="col-8">
                            <div class="numbers">
                                <a href="{{ route('driverdata.index') }}">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Driver</p>
                                <h5 class="font-weight-bolder">
                                {{$driver}}
                                </h5>
                                </a>
                            </div>
                            </div>
                            <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                        <div class="row">
                            
                            <div class="col-8">
                            <div class="numbers">
                                <a href="{{ route('produk.index') }}">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Produk</p>
                                <h5 class="font-weight-bolder">
                                {{$produk}}
                                </h5>
                                </a>
                            </div>
                            </div>
                            <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Transaksi</p>
                                <h5 class="font-weight-bolder">
                                {{$order}}
                                </h5>
                            </div>
                            </div>
                            <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection