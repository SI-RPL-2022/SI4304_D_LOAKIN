@extends('User.Master')

@section('content')
<div class="container">

    <h2 class="mt-4" style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center;  line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Favorit Saya</h2>

    @if($favorit->isEmpty())
    <center>
        <br>
        <h5>BELUM ADA PRODUK FAVORIT NIH</h5>
        <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;margin-bottom:30px;">
            <a href="{{ route('shop.index') }}" class="btn btn-outline-light" name="hapus" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px;">Belanja Lagi Yuk</a>
        </div>
    </center>
    @else
    <table class="table table-responsive  table-bordered" >
      <thead class="table " style="background-color: #F58814">
        <tr>
          <th scope="col" style="text-align: center">No</th>
          <th scope="col" style="text-align: center">Gambar</th>
          <th scope="col" style="text-align: center">Nama Produk</th>
          <th scope="col" style="text-align: center">Harga</th>
          <th scope="col" style="text-align: center">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
            $no = 0;
        ?>
            @foreach($favorit as $fav)
        <?php
            $no += 1;
        ?>
        
        <tr>  
            <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
            <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('dataproduk/' . $fav->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
            <td style="line-height: 8rem;text-align: center">{{$fav->produk->nama_produk}}</td>
            <td style="line-height: 8rem;text-align: center">Rp {{$fav->produk->harga}}</td>
            <td style="line-height: 8rem;text-align: center"><center>
                <a class="btn btn-warning" href="{{route('shop.detail', $fav->produk->id)}}" style="font-color:white;width:40%; margin-right: 3%">Detail</button>
                <a class="btn btn-danger" href="{{route('favorit.delete', $fav->id)}}" onclick="return confirm('Are you sure?')" style="font-color:white;width:40%;">Hapus</a>
            </center></td>
        </tr>
       
        @endforeach
      </tbody>
    </table>
    @endif

</div>

@endsection