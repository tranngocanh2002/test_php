<?php

namespace App\Http\Controllers;

use App\Models\Step_1;
use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use Illuminate\Support\Facades\DB;

class Step_3Controller extends Controller
{
    public function form()
    {
        if (session('meal') && session('people') && session('restaurant')) {
            $dish = DB::table('dishes')->where('restaurant', 'like', '%' . session('restaurant') . '%')->where('availableMeals', 'like', '%' . session('meal') . '%')->distinct()->pluck('name', 'name');
            return view('step_3.form', compact('dish'));
        } else if (session('meal') && session('people')) {
            toastr()->warning('Step 2 has not been completed, please do it again');
            return redirect()->route('step_2');
        }
        toastr()->warning('Step 1 has not been completed, please do it again');
        return redirect()->route('step_1');
    }
    public function tempor(Request $request)
    {
        $data = $request->all();
        if( $data['number_monan'] >= session('people') && $data['number_monan'] <= 10 ) {
            session(['monan' => $data['monan']]);
            session(['number_monan' => $data['number_monan']]);
            toastr()->success('Perform step 4');
            return redirect()->route('step_4.form');
        } else {
            toastr()->warning('Dishes must be greater than the number of people (step 1) and less than 10');
            return redirect()->route('step_3');
        }

    }
}
