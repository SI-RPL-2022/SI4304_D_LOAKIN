@extends('User.master')

@section('content')

    <div class="container d-flex justify-content-center mt-3">
        <h1 style="font-family: 'Montserrat';color:#D77409"><b>Lihat Alamat</b></h4>
    </div>

    <div class="container">
        <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
            <div>
                <table class="table-responsive" cellpadding="4">
                    <thead>
                        <tr style="color: #D77409">
                            <td scope="col"><h5><i class="bi bi-geo-alt-fill" ></i></h5></td>
                            <td scope="col"><h5><b>Alamat 1</b></h5></td>
                        </tr>
                    </thead>
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
        </div>
        <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
            <div>
                <table class="table-responsive" cellpadding="4">
                    <thead>
                        <tr style="color: #D77409">
                            <td scope="col"><h5><i class="bi bi-geo-alt-fill" ></i></h5></td>
                            <td scope="col"><h5><b>Alamat 2</b></h5></td>
                        </tr>
                    </thead>
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
        </div>
        <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
            <div>
                <table class="table-responsive" cellpadding="4">
                    <thead>
                        <tr style="color: #D77409">
                            <td scope="col"><h5><i class="bi bi-geo-alt-fill" ></i></h5></td>
                            <td scope="col"><h5><b>Alamat 3</b></h5></td>
                        </tr>
                    </thead>
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
        </div>
        <div class="d-flex flex-row-reverse mt-4">
			<button class="btn" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">OKE</button>
		</div>
    </div>

@endsection