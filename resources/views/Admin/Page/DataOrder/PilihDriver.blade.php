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
                        <h4 class="mb-0">Input Driver Order Loak.In</h4>
                        </div>
                        <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('orderadmin.submitdriver', $order->id) }}" method="POST">
                        @csrf
                            <div class="form-group">
                            <h6 for="driver">Nama Driver</h6>
                            <select name="update_driver" id="driver" class="form-control">
                                @foreach($driver as $kt)
                                    <option value="{{$kt->id}}">{{$kt->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;">
                                <button class="btn btn-primary" type="submit" name="driver">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>

                </section>
            </div>
@endsection