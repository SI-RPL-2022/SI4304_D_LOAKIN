@extends('Driver.master')

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
                        
                        <h4 class="mb-4 mt-4">Detail Order Loak.In</h4>
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
                                    <p>Estimated Weight</p>
                                    <p>Payment Method</p>
                                    <p>Items</p>
                                    <p>Address User</p>
                                    <p>Original Items</p>
                                    <p>Original Weight</p>
                                    <p>Total Price</p>
                                </div>
                                <div class="col-8">
                                    <p><b>: {{$ts->no_order}}<b></p>
                                    <p>: {{$ts->weight}}</p>
                                    <p>: {{$ts->payment}}</p>
                                    <p>: {{$ts->items}}</p>
                                    @if ($ts->alamat == null)
                                    <p>: {{$ts->user->alamat}}</p>
                                    @else
                                    <p>: {{$ts->alamat}}</p>
                                    @endif
                                    <p>: {{$ts->berat_asli}}</p>
                                    <p>: {{$ts->item_asli}}</p>
                                    <p>: @currency($ts->total_harga)</p>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>

                </section>
            </div>
    

@endsection