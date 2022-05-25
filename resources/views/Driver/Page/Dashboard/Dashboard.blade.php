@extends('Driver.Master')

@section('content')
            <div class="page-header flex-wrap">
              <div class="header-left">
                
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">{{session()->get('driver')->kodedriver}}</p>
                  </a>
                </div>
              </div>
            </div>

            <h1 class="text-center mb-4">Selamat Datang Driver {{session()->get('driver')->name}}</h1>

            {{-- Judul --}}
    <div class="container d-flex justify-content-center mt-4">
        <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; text-shadow: 3px 2px #FDE0C3;">Pick Up Loak.in Aja</h2>
    </div>


    {{-- Tabel --}}
    <div class="comtainer mt-3 " style=" font-family: 'Segoe UI', Arial, sans-serif; ">
        <table class="table table-responsive table-bordered">
            <thead style="font-weight: 600; background-color:#F58814;color:white;">
                <tr>
                    <th scope="col"><center><b>No</b></center></th>
                    <th scope="col" style="width: 50%"><center><b>Customer Name</b></center></th>
                    <th scope="col"><center><b>Aksi</b></center></th>
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
                    <td style="line-height: 8rem;text-align: center">{{$ts->user->name}}</td>
                    <td style="line-height: 4rem;text-align: center"><center>
                        <a class="btn btn-info" href="{{route('pickup.view', $ts->no_order)}}"  style="font-weight: 600;color:white;border-radius:7px 7px 7px 7px;width:15rem;">DETAIL</a>
                        <a class="btn btn-outline-light" href="{{route('driver.fixpickup', $ts->id)}}" style="font-weight: 600; background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem;">PICK UP</a>
                        <br><a class="btn btn-danger" href='#' onclick="return confirm('Are you sure?')" style="color:white;border-radius:7px 7px 7px 7px;width:15rem;">DELETE</a>
                    </center></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection