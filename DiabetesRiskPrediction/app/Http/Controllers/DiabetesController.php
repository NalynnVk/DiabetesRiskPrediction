<?php

namespace App\Http\Controllers;

use App\Models\Diabetes;
use App\Models\DiabetesData;
use Illuminate\Http\Request;

class DiabetesController extends Controller
{
    public function index()
    {
        $mydiabetes = Diabetes::all();
        return view('index', ['diabetesData' => $mydiabetes]);
    }
}
