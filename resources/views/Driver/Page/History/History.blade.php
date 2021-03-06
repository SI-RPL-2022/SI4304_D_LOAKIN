@extends('Driver.Master')

@section('content')
            <div class="page-header flex-wrap">
              <div class="header-left">
                
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">History</p>
                  </a>
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">{{session()->get('driver')->kodedriver}}</p>
                  </a>
                </div>
              </div>
            </div>

            <h1 class="text-center mb-4">Selamat Datang Driver {{session()->get('driver')->name}}</h1>

            {{-- Judul --}}


    {{-- Tabel --}}
    <div class="comtainer mt-3 " style=" font-family: 'Segoe UI', Arial, sans-serif; ">
    <?php
                                        $no = 0;
                                    ?>
                                    @foreach($order as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
        <table class="table table-responsive table-bordered" style="padding-bottom: 6%">
            <thead style="font-weight: 600; background-color:#D77409;color:white;">
                <tr>
                    <th scope="col"><center><b>No. Order</b></center></th>
                    <th scope="col" style="width: 100%"><center><b>Customer Name</b></center></th>
                    <th scope="col"><center><b>Action</b></center></th>
                </tr>
            </thead>
    
            <tbody>
                
                <tr>  
                    <td style="line-height: 8rem;text-align: center">{{$ts->no_order}}</td>
                    <td style="line-height: 8rem;text-align: center">{{$ts->user->name}}</td>
                    <td style="line-height: 4rem;text-align: center"><center>
                        <a class="btn btn-info" href="{{route('history.view', $ts->no_order)}}"  style="font-weight: 600;color:white;border-radius:7px 7px 7px 7px;width:15rem;">DETAIL</a>
                        
                    </center></td>
                </tr>

            </tbody>

        </table>
        @endforeach
    </div>

@endsection