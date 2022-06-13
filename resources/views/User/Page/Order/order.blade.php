@extends('User.master')

@section('content')

    <div class="container d-flex justify-content-center mt-3">
        <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Loak.in Aja </h2>
    </div>

    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;">
        <div style="margin-left: 20px;margin-right:20px">
        <div class="row">
            <div class="col-lg-10"><h4 style="color: #D77409">
                <h4 style="color: #D77409">
                    <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 20px"></i><a class="text-reset" style="text-decoration:none;"><b>Pick Up Address</b></a>
                </h4>
            </div>
            <div class="col-lg-2 d-flex justify-content-end"><h5><b><a href="" style="color: #D77409;text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal">Change</a></b></h5></div>
        </div>
            
            <div class="row" style="font-weight: 500; margin-left:25px;">
                @foreach($user as $us)  
                <div class="col-lg-4">
                    <p><b>{{$us->name}}</b></p>
                    <p><b>{{$us->telepon}}</b></p>
                </div>
                <div class="col-lg-6">
                    <b>{{$us->alamat}}</b>
               
                </div>
                <div class="col-lg-2">
                
                </div>
                @endforeach
            </div>   
            
        </div>
    </div>

    <div class="mt-4" style="font-family: 'Segoe UI', Arial, sans-serif;"">
        <form method="POST" action="{{ route('order.order') }}" enctype="multipart/form-data"> 
        @csrf
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h4 style="color: #D77409">
                    <i class="fa fa-balance-scale" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Detail Item</b></a>
                </h4>
                <div style="margin-left: 50px;margin-right:40px">
                    <div class="mb-3">
                        <label for="weightm" class="form-label" style="font-weight: 500;"><b>Weight Measure</b></label>
                        <div class="form-check" style="font-weight: 500;">
                            <input class="form-check-input"  type="radio" name="tipeweight" id="dibawah" value="Dibawah 10kg">
                            <label class="form-check-label" for="dibawah">
                                Dibawah 10kg
                            </label>
                        </div>
                        <div class="form-check" style="font-weight: 500;">
                            <input class="form-check-input" type="radio" name="tipeweight" id="diatas" value="Diatas 10kg">
                            <label class="form-check-label" for="diatas">
                                Diatas 10kg
                            </label>
                        </div>
                    </div>
                    <div class="mb-3" style="font-weight: 500;">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <input type="text" class="form-control" name="desc" id="desc" style="border-width:0 0 1px 0;box-shadow:none" placeholder="Kardus">
                    </div>
                    <div class="mb-3" style="font-weight: 500;">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <input type="text" class="form-control" name="weight" id="weight" style="border-width:0 0 1px 0;box-shadow:none" placeholder="0,5">
                    </div>
                    <div>
                        <label for="pay" class="form-label" style="font-weight: 500;"><b>Payment</b></label>
                    </div>
                    <div class="mb-3" style="font-weight: 500;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="cash" value="cash">
                            <label class="form-check-label" for="cash">Cash</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="dana" value="dana">
                            <label class="form-check-label" for="dana">Dana</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="ovo" value="ovo">
                            <label class="form-check-label" for="ovo">OVO</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
				<button class="btn" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">NEXT</button>
			</div>
        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Segoe UI', Arial, sans-serif;"">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color:#D77409">Alamat Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="row g-2 mb-3">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="nohp" placeholder="021472384">
                                                    <label for="nohp">Nomor Telepon</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Nama Jalan" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Nama Jalan, Gedung, No. Rumah</label>
                                        </div>
                                        <div>
                                            <img src="https://developers.google.com/maps/images/landing/hero_maps_static_api.png" class="rounded mx-auto d-block" style="width:25rem">
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color:#FBCE9D;width:8rem">Close</button>
                                        <button type="button" class="btn" style="background-color:#F58814;color:white;width:8rem">Save changes</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
@endsection