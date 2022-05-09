@extends('Admin.Master')

@section('content')

    <div class="row">
        
        <div class="col-12" >
            <div class="card mb-4 p-4">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 " href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Data Order</li>
                </ol>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mt-4">   
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                
                <div class="card-header pb-0">
                <h4>Data Order</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nomor Order</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Pesanan</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama Pelanggan</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Total Transaksi</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Bukti Pembayaran</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>09 Mei 2022</td>
                                <td>Tiara</td>
                                <td>Rp 55000</td>
                                <td>-</td>
                                <td>
                                    <a href="" class="btn btn-info" ><i class="fa fa-info" aria-hidden="true" style="margin-right: 10px;"></i>Detail</a>
                                    <a href="" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Approve</a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      

@endsection