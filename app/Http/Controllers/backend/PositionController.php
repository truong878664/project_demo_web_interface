<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MisionPosition;
use Illuminate\Support\Facades\DB;



class PositionController extends Controller
{
    public function index()
    {
        $data = DB::table('mision_positions') -> get();
        return view('backend.demobackend')->with('data', $data);
    }

    public function add(Request $request)
    {
        $name_position = $request->name_position;
        $position_x = $request->position_x;
        $position_y = $request->position_y;
        $rotation_z = $request->rotation_z;
        $description = $request->description;

        $data_postion = [
            'name_position' => $name_position,
            'position_x' => $position_x,
            'position_y' => $position_y,
            'rotation_z' => $rotation_z,
            'description' => $description,
        ];

        DB::table('mision_positions')->insert($data_postion);

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        DB::table('mision_positions')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function getItemById(Request $request)
    {
        $id = $request->id;
        $item = DB::table('mision_positions')->where('id', $id);
        return $item;
    }
}
