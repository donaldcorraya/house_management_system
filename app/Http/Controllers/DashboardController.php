<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        if(!auth()->user()->role == 1){
            toastr()->addSuccess('Your account has been restored.');
            return redirect()->route('login');
        }

        return view('admin.home');

    }
}
