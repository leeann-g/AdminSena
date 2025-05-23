<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function mostrarFormulario(){
        return view ('computer.create');
    }

    public function store(Request $request){
        $computer = new Computer();

        $computer->number = $request->number;
        $computer->brand = $request->brand;

        $computer->save();

        return redirect()->route('computer.index');
    }

    public function index(){
        $computers = Computer::all();

        return view('computer.index', compact('computers'));
    }
}
