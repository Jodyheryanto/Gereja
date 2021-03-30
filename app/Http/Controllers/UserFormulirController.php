<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Formulir;

class UserFormulirController extends Controller
{
    function atestasi(){
        $formulir = Formulir::where('id', 1)->first();
        return view('atestasi', compact(['formulir']));
    }

    function pernikahan(){
        $formulir = Formulir::where('id', 2)->first();
        return view('pernikahan', compact(['formulir']));
    }

    function baptisan(){
        $formulir = Formulir::where('id', 3)->first();
        return view('baptisan', compact(['formulir']));
    }

    function sidi(){
        $formulir = Formulir::where('id', 4)->first();
        return view('sidi', compact(['formulir']));
    }
}
