<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function mostrarFormulario(){
        return view('trainingcenters.create');
    }


    public function store(Request $request){
        $training = new TrainingCenter();

        $training->name = $request->name;
        $training->location = $request->location;
        $training->save();

        return redirect()->route('trainingcenter.index');   
    }
    public function index(){
        $training = TrainingCenter::all();
        return view('trainingcenters.index', compact('training'));
    }
}
