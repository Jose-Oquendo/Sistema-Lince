<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function catalogue(Request $request){
        return view('client.catalogue');
    }
}
