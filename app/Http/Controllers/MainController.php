<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Partner;
use App\Models\Sertificate;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Information::latest()->take(6)->get();
        $partners = Partner::latest()->take(5)->get();
        $sertificate = Sertificate::latest()->take(2)->get();
        return view('front.index', compact([
            'products',
            'partners',
            'sertificate'
        ]));
    }
}
