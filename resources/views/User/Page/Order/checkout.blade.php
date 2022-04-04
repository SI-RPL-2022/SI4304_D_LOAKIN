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
                        <td scope="col" colspan="2"><h5><b>Alamat Pengambilan</b></h5></td>
                    </tr>
                </thead>
                <tbody>   
                    <tr>
                        <td></td>
                        <td><b>Jung Jaehyun</b></td>
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

    <div class="mt-4">
        <form method="post">
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h5 style="color: #D77409; margin-left:20px"><b>Item Details</b></h5>
                <div style="margin-left: 50px;margin-right:40px">
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>Weight Measure</b></label>
                        <p>Dibawah 10kg</p>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <p>Kardus</p>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <p>0,5</p>
                    </div>
                    <div>
                        <label for="pay" class="form-label"><b>Payment</b></label>
                        <p>Cash</p>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-top: 30px;">
				<button class="btn p-2 bd-highlight" type="submit" style="background-color:#FBCE9D;border-radius:7px 7px 7px 7px;width:15rem">BACK</button>
                <button class="btn ms-auto p-2 bd-highlight" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">LOAK.IN AJA</button>
			</div>
        </form>
    </div>
@endsection