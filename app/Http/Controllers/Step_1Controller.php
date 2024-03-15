<?php

namespace App\Http\Controllers;

use App\Models\Step_1;
use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use Illuminate\Support\Facades\Session;

class Step_1Controller extends Controller
{
    public function index()
    {        
        return view('step_1.index');
    }
    public function form()
    {
        return view('step_1.form');
    }

    public function tempor(Request $request)
    {
        $data = $request->all();
        if( $data['people'] > 0 && $data['people'] <= 10 ) {
            session(['meal' => $data['meal']]);
            session(['people' => $data['people']]);
            toastr()->success('Perform step 2', 'Success');
            return redirect()->route('step_2');
        } else {
            toastr()->warning('The number of people must be between 0 and 10');
            return redirect()->route('step_1');
        }
    }
}
