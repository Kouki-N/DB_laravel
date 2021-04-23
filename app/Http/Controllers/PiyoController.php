<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PiyoController extends Controller
{
    public function index() {
        $items = DB::table('piyos')->get();
        return view('index', ['items'=>$items]);
    }
}
