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
                                    <p>User Address</p>
                                </div>
                                <div class="col-8">
                                    <p><b>: {{$ts->no_order}}<b></p>
                                    <p>: {{$ts->weight}}</p>
                                    <p>: {{$ts->payment}}</p>
                                    <p>: {{$ts->items}}</p>
                                    <p>: {{$ts->alamat}}</p>
                                </div>
                            </div>
                            @endforeach

                            <div class="row">
                                <div class="col-6" style=" margin-top: 30px;">
                                    <button class="btn btn-outline-light" type="submit" name="driver" style="width: 100%;background-color:#F58814;">PICK UP</button>
                                </div>
                                <div class="col-6" style=" margin-top: 30px;">
                                    <button class="btn btn-danger" type="submit" name="driver" style="width: 100%;">DELETE</button>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                </section>
            </div>
    

@endsection