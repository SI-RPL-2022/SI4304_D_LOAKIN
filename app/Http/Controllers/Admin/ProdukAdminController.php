<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produk;

use Session;

class ProdukAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $produk = Produk::paginate(2);

            return view('Admin.Page.DataProduk.Produk',  compact('produk'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function create_view()
    {

        return view('Admin.Page.DataProduk.Create');
    }

    public function create_process(Request $request)
    {
        $request->validate([
            'produk_nama'               => 'required',
            'produk_stok'               => 'required',
            'produk_harga'              => 'required',
            'produk_detail'             => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $produk = new Produk;

        
            if ($files = $request->file('foto')) {
                $destinationPath = 'dataproduk/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $produk->foto_produk = $pathImg;
            }
            $produk->nama_produk         = $request->produk_nama;
            $produk->stok_produk         = $request->produk_stok;
            $produk->harga               = $request->produk_harga;
            $produk->detail_produk       = $request->produk_detail;
            $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }

    public function view($id)
    {
        $produk = Produk::find($id);
        return view('Admin.Page.DataProduk.Show', compact('produk'));
    }

    public function update_view($id)
    {

        $produk = Produk::find($id);
        return view('Admin.Page.DataProduk.Update', compact('produk'));
    }

    public function update_process($id, Request $request)
    {
        $request->validate([
            'produk_nama'               => 'required',
            'produk_stok'               => 'required',
            'produk_harga'              => 'required',
            'produk_detail'             => 'required',
        ]);
        
        $produk = Produk::find($id);

        $produk->nama_produk         = $request->produk_nama;
        $produk->stok_produk         = $request->produk_stok;
        $produk->harga               = $request->produk_harga;
        $produk->detail_produk       = $request->produk_detail;
        $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Ubah Produk Berhasil']);
    }

    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect(route('produk.index'))->with(['success' => 'Delete Produk Berhasil']);
    }
}
