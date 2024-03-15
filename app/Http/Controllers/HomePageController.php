<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomePageController extends Controller
{
    public function home() {
        return view('step_1.homepage');
    }
    public function step_1() {
        return view('step_1.step_1');
    }
    public function step_2() {
        return view('pages.step_2');
    }
    public function step_3() {
        return view('pages.step_3');
    }
    public function step_4() {
        return view('pages.step_4');
    }
}
