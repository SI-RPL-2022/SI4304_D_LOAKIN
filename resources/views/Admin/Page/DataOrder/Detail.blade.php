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
                        <?php
                                    $no = 0;
                                ?>
                                
                                @foreach($order as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
                            <div class="row">
                                <div class="col-4">
                                    <p><b>No. Order</b></p>
                                    <p>Berat Estimasi</p>
                                    <p>Metode Pembayaran</p>
                                    <p>Items</p>
                                    <p>Nama Driver</p>
                                    <p>Item Asli</p>
                                    <p>Berat Asli</p>
                                    <p>Total Bayar</p>
                                </div>
                                <div class="col-8">
                                    <p><b>: {{$ts->no_order}}<b></p>
                                    <p>: {{$ts->weight}}</p>
                                    <p>: {{$ts->payment}}</p>
                                    <p>: {{$ts->items}}</p>
                                    @if($ts->id_driver == null)
                                    <p>: -</p>
                                    @else
                                    <p>: {{$ts->driver->name}}</p>
                                    @endif
                                    <p>: {{$ts->item_asli}}</p>
                                    <p>: {{$ts->berat_asli}}</p>
                                    <p>: @currency($ts->total_harga)</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>

                </section>
            </div>
    

@endsection