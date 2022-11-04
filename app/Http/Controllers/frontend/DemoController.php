<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DemoController extends Controller
{
    public function save_text(Request $request){
        // $data = $request -> all();
        // $product = new product();
        // $product->name_product = $data['name_product'];
        // $product->save();
        return Redirect::to('/');
    }
}
