<?php

namespace App\Http\Controllers;

use App\Models\Step_1;
use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use Illuminate\Support\Facades\Session;

class Step_4Controller extends Controller
{
    public function index()
    {        
        return view('step_4.index');
    }
    public function form()
    {
        if (session('meal') && session('people') && session('restaurant') && session('monan') && session('number_monan')) {
            return view('step_4.form');
        } else if (session('meal') && session('people') && session('restaurant')) {
            toastr()->warning('Step 3 has not been completed, please do it again');
            return redirect()->route('step_3');
        } else if (session('meal') && session('people')) {
            toastr()->warning('Step 2 has not been completed, please do it again');
            return redirect()->route('step_2');
        }
        toastr()->warning('Step 1 has not been completed, please do it again');
        return redirect()->route('step_1');
    }

    public function tempor(Request $request)
    {
        Session::flush();
        toastr()->success('Thank you for your order');
        return redirect()->route('step_1');

    }

}
