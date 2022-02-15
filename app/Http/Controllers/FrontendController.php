<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function instansiCarousel(Instansi $instansi)
    {
        return view('layoutsFE.detail_InstansiFE', ['instansi'=>$instansi]);
    }
}
