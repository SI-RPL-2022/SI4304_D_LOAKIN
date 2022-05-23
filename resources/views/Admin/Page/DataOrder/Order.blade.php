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

                <div class="row mt-4">
                    <div class="col-6" >
                        <div class="d-grid gap-2">
                            <a href="{{route('orderadmin.index')}}" class="btn btn-primary" type="button">Data Order Loak.In</a>
                        </div>
                    </div>
                    <div class="col-6" >
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary" type="button">Data Order Loak.In Shop</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-header pb-0">
                <h4>Data Order Loak.In</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nomor Order</th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Pesanan</th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama Pelanggan</th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Total Transaksi</th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
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
                                <td>{{$ts->no_order}}</td>
                                <td>{{date('d-m-Y', strtotime($ts->created_at));}}</td>
                                <td>{{$ts->user->name}}</td>
                                <td>Rp {{$ts->total_harga}}</td>
                                <td>
                                    <a href="{{route('orderadmin.view', $ts->no_order)}}" class="btn btn-info" ><i class="fa fa-info" aria-hidden="true" style="margin-right: 10px;"></i>Detail</a>
                                    @if($ts->status == 'On Prosess')
                                        <a href="{{route('orderadmin.fixorder', $ts->id)}}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Approve</a>
                                    @elseif($ts->status == 'Fix Order')
                                        <a href="{{route('orderadmin.pilihdriver', $ts->id)}}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Pilih Driver</a>
                                    @endif
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      

@endsection