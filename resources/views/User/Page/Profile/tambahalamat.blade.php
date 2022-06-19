@extends('User.Master')

@section('content')
    
<center><div class="container mt-3 ">
    <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Add Another Address</h2>
</div></center>

    <div class="container mt-4">
        <form action="{{ route('account.tambah', $account->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <div class="mt-2" style="margin-left: 30px;margin-right:40px">
                    <div class="mb-3">
                        <label for="nama" class="form-label"><b>Full Name</b></label>
                        <input type="text" class="form-control" id="nama" value="{{$account->name}}" readonly style="border-width:0 0 1px 0;box-shadow:none" placeholder="e.g : Lucas">
                    </div>
                    <div class="mb-3">
                        <label for="notlp" class="form-label"><b>Phone Number</b></label>
                        <input type="number" class="form-control" id="notlp" value="{{$account->telepon}}" readonly style="border-width:0 0 1px 0;box-shadow:none" placeholder="e.g : 081232876816">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label"><b>Address</b></label>
                        <input type="text" class="form-control" id="alamat" name="alamat" style="border-width:0 0 1px 0;box-shadow:none" placeholder="e.g : Jalanin dulu yang ada">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
				<button class="btn" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">Submit</button>
			</div>
        </form>
    </div>
  
@endsection