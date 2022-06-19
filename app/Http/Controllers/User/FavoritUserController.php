<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Favorit;
use Session;
use Illuminate\Support\Facades\Auth;

class FavoritUserController extends Controller
{
    public function index()
    {
        $favorit = Favorit::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);

        return view('User.Page.Favorit.favorit', compact('favorit'));
    }

    public function create($id)
    {
            $produk = Produk::find($id)->id;
            $user_id = Auth::user()->id;

            $favorit = new Favorit;

            $cek = Favorit::with(['produk'])->where('id_user', Auth::user()->id)->where('id_produk', $produk)->first();

            if($cek){
                return redirect(route('shop.index'))->with(['success' => 'Produk Sudah Ada Di Favorit']);
            }
            else{
                $favorit->id_produk = $produk;
                $favorit->id_user = $user_id;
                $favorit->save();
            }

            return redirect(route('favorit.index'));

    }

    public function delete($id)
    {
        $favorit = Favorit::find($id);
        $favorit->delete();

        return redirect(route('favorit.index'))->with(['success' => 'Delete Favorit Berhasil']);
    }
}
