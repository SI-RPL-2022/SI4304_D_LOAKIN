<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\Models\OrderShop;

class PDFController extends Controller
{
    public function generatePDF($no_order)
    {
        $order = OrderShop::with(['user'], ['produk'])->where('no_order', $no_order)->get();

        set_time_limit(300);
        
        $pdf = PDF::loadView('User.myPDF', ['order'=>$order]);
    
        return $pdf->download('Nota.pdf');
    }
}
