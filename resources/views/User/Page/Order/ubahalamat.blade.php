@extends('User.master')

@section('content')

    <div class="container d-flex justify-content-center mt-3">
        <h1 style="font-family: 'Montserrat';color:#D77409"><b>Ubah Alamat</b></h4>
    </div>

    <div class="container">
        <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
            <div class="form-check">
                <input class="form-check-input " type="radio" name="alamat1" id="alamat1">
                <label class="form-check-label" for="alamat1">
                    <div>
                        <table class="table-responsive" cellpadding="4">
                            <tbody>   
                                <tr>
                                    <td></td>
                                    <td><b>Jaehyun</b></td>
                                    <td rowspan="2">Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><b>(+62)81233671818</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </label>
            </div>
        </div>
        <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
            <div class="form-check">
                <input class="form-check-input " type="radio" name="alamat2" id="alamat2">
                <label class="form-check-label" for="alamat2">
                    <div>
                        <table class="table-responsive" cellpadding="4">
                            <tbody>   
                                <tr>
                                    <td></td>
                                    <td><b>Lucas</b></td>
                                    <td rowspan="2">Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><b>(+62)8124592890</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </label>
            </div>
        </div>
        <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
            <div class="form-check">
                <input class="form-check-input " type="radio" name="alamat3" id="alamat3">
                <label class="form-check-label" for="alamat3">
                    <div>
                        <table class="table-responsive" cellpadding="4">
                            <tbody>   
                                <tr>
                                    <td></td>
                                    <td><b>Jaemin</b></td>
                                    <td rowspan="2">Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><b>(+62)8124290240</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </label>
            </div>
        </div>
    </div>

@endsection