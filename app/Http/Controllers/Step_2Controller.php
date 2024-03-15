<?php

namespace App\Http\Controllers;

use App\Models\Step_1;
use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use Illuminate\Support\Facades\DB;

class Step_2Controller extends Controller
{
    public function index()
    {        
        return view('step_2.index');
    }
    public function form()
    {
        if (session('meal') && session('people')) {
            $restaurants = DB::table('dishes')->where('availableMeals', 'like', '%' . session('meal') . '%')->distinct()->pluck('restaurant', 'restaurant');
            return view('step_2.form', compact('restaurants'));
        } else {
            toastr()->warning('Step 1 has not been completed, please do it again');
            return redirect()->route('step_1');
        }
    }

    public function tempor(Request $request)
    {
        $data = $request->all();
        session(['restaurant' => $data['restaurant']]);
        toastr()->success('Perform step 3');
        return redirect()->route('step_3');

    }

}
