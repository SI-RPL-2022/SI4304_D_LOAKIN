<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Driver;

use Session;

class DriverAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $driver = Driver::paginate(10);

            return view('Admin.Page.DataDriver.Driver',  compact('driver'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function view($id)
    {
        $driver = Driver::find($id);
        return view('Admin.Page.DataDriver.Show', compact('driver'));
    }

    public function create_view()
    {

        return view('Admin.Page.DataDriver.Create');
    }

    public function create_process(Request $request)
    {
        $request->validate([
            'nama_driver'               => 'required',
            'username'               => 'required',
            'password'              => 'required',
            'telepon'             => 'required',
            'alamat'             => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $driver = new Driver;
        $numberorder = Str::random(5);

        
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotodriver/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $driver->foto = $pathImg;
            }
            $driver->name         = $request->nama_driver;
            $driver->username         = $request->username;
            $driver->password               = $request->password;
            $driver->nomortelepon       = $request->telepon;
            $driver->alamat       = $request->alamat;
            $driver->kodedriver       = $numberorder;
            $driver->save();

        return redirect(route('driverdata.index'))->with(['success' => 'Registrasi Driver Berhasil']);
    }

}
