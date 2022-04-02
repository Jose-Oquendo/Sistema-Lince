<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //manage for employees
    public function index_emp(){
        return view('manage.homeEmp');
    }

    public function view_products(){
        return view('manage.products');
    }
    public function view_orders(){
        return view('manage.orders');
    }
    public function view_pqrs(){
        return view('manage.pqrs');
    }


    //manage for administrator
    public function index_admin(){
        return view('manage.homeAdmin');
    }

    public function view_employees(){ #return view of employees
        return view('manage.employees');
    }

    public function view_reports(){ #return view of reports
        return view('manage.reports');
    }

}
