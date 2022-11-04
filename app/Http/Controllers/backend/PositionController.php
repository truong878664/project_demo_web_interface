<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MisionPosition;


class PositionController extends Controller
{
    // public $misionPosition = new MisionPosition();
    public function index() {
        $data = MisionPosition::all();
        return $data;

    }
    public function index1(Request $request) {
        // dd($request->all());
        return view('frontend.welcome');
    }
}
