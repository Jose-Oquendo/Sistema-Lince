<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index_emp(){
        return view('manage.homeEmp');
    }

    public function index_admin(){
        return view('manage.homeAdmin');
    }
}
