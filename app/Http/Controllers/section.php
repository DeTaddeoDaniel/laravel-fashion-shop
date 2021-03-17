<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class section extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function shop()
    {
        $products = Dress::all();
        dd($products);
        return view('negozio');
    }

    public function chiSiamo()
    {
        return view('chi-siamo');
    }
}
