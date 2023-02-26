<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function search()
    {
        $customers = Customer::all();

        return view('customer.search', [
            'customers' => $customers,
        ]);
    }

    public function index(Customer $customer)
    {
        return view('customer.index');
    }
}
