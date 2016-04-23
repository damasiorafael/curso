<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InstitucionalController extends Controller
{
    public function getSobre(){
    	return view('sobre');
    }

    public function getContato(){
    	return view('contato');
    }

    public function postContato(){
    	return Request::all();
    }
}
