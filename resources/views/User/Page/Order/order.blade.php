@extends('User.master')

@section('content')

    <div class="container d-flex justify-content-center mt-3">
        <h1 style="font-family: 'Montserrat';color:#D77409"><b>Loak.in Aja</b></h4>
    </div>

    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
        <div style="margin-left: 20px;margin-right:20px">
            <table class="table-responsive" cellpadding="4">
                <thead>
                    <tr style="color: #D77409">
                        <td scope="col"><h5><i class="bi bi-geo-alt-fill" ></i></h5></td>
                        <td scope="col" colspan="3"><h5><b>Alamat Pengambilan</b></h5></td>
                    </tr>
                </thead>
                <tbody>   
                    <tr>
                        <td></td>
                        <td><b>Jung Jaehyun</b></td>
                        <td rowspan="2">Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</td>
                        <td><b><a href="" style="color: #D77409;text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal">UBAH</a></b></td>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>(+62)81233671818</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        <form method="post">
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h5 style="color: #D77409; margin-left:20px"><b>Item Details</b></h5>
                <div style="margin-left: 50px;margin-right:40px">
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>Weight Measure</b></label>
                        <div class="form-check">
                            <input class="form-check-input"  type="radio" name="dibawah" id="dibawah" >
                            <label class="form-check-label" for="dibawah">
                                Dibawah 10kg
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="diatas" id="diatas">
                            <label class="form-check-label" for="diatas">
                                Diatas 10kg
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <input type="text" class="form-control" id="desc" style="border-width:0 0 1px 0;box-shadow:none" placeholder="Kardus">
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <input type="text" class="form-control" id="weight" style="border-width:0 0 1px 0;box-shadow:none" placeholder="0,5">
                    </div>
                    <div>
                        <label for="pay" class="form-label"><b>Payment</b></label>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="cash" value="cash">
                            <label class="form-check-label" for="cash">Cash</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dana" value="dana">
                            <label class="form-check-label" for="dana">Dana</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ovo" value="ovo">
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
@endsection