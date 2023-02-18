<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function selectCustomer()
    {
        $customers = Customer::all();

        return view('project.selectCustomer', compact('customers'));
    }

    public function index()
    {
        return view('project.index');
    }

    public function show()
    {
        return view('project.show');
    }
}
