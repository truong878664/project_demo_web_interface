<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function insertMap(Request $request)
    {
        // if ($request->hasFile('inputMap')) {
        //    $file =  $request->inputMap->store('maps');
        // }
        // dd($file);
        $file = $request->inputmap->store('map');
        // $file2 = $request->inputmap;
            dd($file);
        return redirect()->back();
    }

}
