<?php

namespace App\Http\Controllers;

use App\Models\SGI;
use Illuminate\Http\Request;

class SGIController extends Controller
{
    public function FormView(){

    	return view('SGI.form_entry');
    }
}
