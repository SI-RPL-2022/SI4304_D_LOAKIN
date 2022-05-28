@extends('Admin.master')

@section('content')
            <div class="page-heading">
            
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">   
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <section class="section">
                    <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 mb-4">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 " href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item text-sm active" aria-current="page">Data Order</li>
                        </ol>
                        <h4 class="mb-0">Detail Order Loak.In</h4>
                        </div>
                        <div class="card-body">
                            <table class="table align-items-center mb-0" id="table1">
                                <thead>
                                    <tr>
                                        <th scope="col"><center>No</center></th>
                                        <th scope="col"><center>Gambar</center></th>
                                        <th scope="col"><center>Nama Produk</center></th>
                                        <th scope="col"><center>Jumlah</center></th>
                                        <th scope="col"><center>Harga</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 0;
                                ?>
                                
                                @foreach($order as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
                                        <tr>
                                            <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                                            <th style="line-height: 8rem;text-align: center"><center><img src="{{ asset('dataproduk/' . $ts->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></th>
                                            <th style="line-height: 8rem;text-align: center">{{$ts->produk->nama_produk}}</th>
                                            <th style="line-height: 8rem;text-align: center"><input class="form-control" type="hidden" name="jumlah" value="{{$ts->jumlah}}"></input>{{$ts->jumlah}}</th>
                                            <th style="line-height: 8rem;text-align: center">Rp {{$ts->produk->harga * $ts->jumlah}}</th>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>

                       
                        </div>
                    </div>

                </section>
            </div>
    

@endsection