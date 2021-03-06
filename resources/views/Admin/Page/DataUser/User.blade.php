@extends('Admin.Master')

@section('content')

    <div class="row">
        
        <div class="col-12" >
            <div class="card mb-4 p-4">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 " href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Data User</li>
                </ol>
                <div class="card-header pb-0">
                <h4>Data User</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">No</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama User</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Email User</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">No HP</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Alamat</th>
                            <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 0;
                            ?>
                            @foreach($user as $dr)
                            <?php
                                $no += 1;
                            ?>
                            <tr>
                            <td class="align-middle text-center">
                                {{$no}}
                            </td>
                            <td class="align-middle text-center">
                                {{$dr->name}}
                            </td>
                            <td class="align-middle text-center">
                                {{$dr->email}}
                            </td>
                            <td class="align-middle text-center">
                                {{$dr->telepon}}
                            </td>
                            <td class="align-middle  text-center">
                                {{$dr->alamat}}   
                            </td>
                            <td class="align-middle  text-center">
                                <a href="{{route('userdata.view', $dr->id)}}" class="btn btn-info" ><i class="fa fa-info" aria-hidden="true" style="margin-right: 10px;"></i>Detail</a>
                                <?php
                                    if($dr->status == 'Belum Aktif')
                                {
                                ?>
                                    <a href="{{route('userdata.update', $dr->id)}}" class="btn btn-danger" ><i class="fa fa-power-off"  aria-hidden="true" style="margin-right: 10px"></i>Aktifkan</a>
                                <?php
                                }
                                ?>
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