<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController
{
    public function create(Request $req)
    {
        $customer = new Customer();
        $customer->name = $req->post('name');
        $customer->save();

        return redirect('/');
    }

    public function index()
    {
        $customers = Customer::all();
        if ($customers) {
            $data = compact('customers');
            return view('display')->with($data);
        } else {
            return abort(404);
        }
    }

    public function mvtrash($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->delete();
            return redirect('/display');
        } else {
            return abort(404);
        }
    }

    public function viewtrash()
    {
        $trashedcustomers = Customer::onlyTrashed()->get();
        $data = compact('trashedcustomers');
        return view('trash')->with($data);
    }

    public function restore($id)
    {
        $customer = Customer::onlyTrashed()->find($id);
        if ($customer) {
            $customer->restore();
            return redirect('/viewtrash');
        }
    }
}
