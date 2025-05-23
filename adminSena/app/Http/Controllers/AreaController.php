<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function mostrarFormulario(){
        return view ('area.create');
    }

    public function store(Request $request){
        $area = new Area();

        $area->name = $request->name;
        $area->save();
        return redirect()->route('area.index');
    }

    public function index(){
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }
}
