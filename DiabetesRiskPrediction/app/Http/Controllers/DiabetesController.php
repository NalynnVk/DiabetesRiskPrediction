<?php

namespace App\Http\Controllers;

use App\Models\Diabetes;
use App\Models\Gender;
use App\Models\Result;
use Illuminate\Http\Request;

class DiabetesController extends Controller
{
    public function index(Request $request)
    {
        $mydiabetes = Diabetes::all();

        // Fetch all unique genders and classes
        $genders = Gender::select('label')->distinct()->get();
        $classes = Result::select('label')->distinct()->get();

        $selectedGender = $request->input('gender', 'all');
        $selectedClass = $request->input('class', 'all');

        // Use a single query for both gender and class filtering
        $query = Diabetes::query();

        if ($selectedGender != 'all') {
            $query->whereHas('gender', function ($query) use ($selectedGender) {
                $query->where('label', $selectedGender);
            });
        }

        if ($selectedClass != 'all') {
            $query->whereHas('result', function ($query) use ($selectedClass) {
                $query->where('label', $selectedClass);
            });
        }

        $filteredData = $query->get();

        return view('index', [
            'diabetes' => $filteredData,
            'genders' => $genders,
            'classes' => $classes,
            'selectedGender' => $selectedGender,
            'selectedClass' => $selectedClass,
        ]);
    }
}
