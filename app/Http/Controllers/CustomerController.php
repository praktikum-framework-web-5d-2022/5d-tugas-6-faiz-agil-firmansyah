<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::get();
        return view('customer.index', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|numeric'
        ]);

        Customer::create($validate);
        return redirect() -> route('customer.index') -> with('message', "Data customer {$validate['nama']} berhasil ditambahkan");
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index') -> with('message', "Data rental dari customer {$customer->nama} dihapus semuanya");
    }

    public function edit(Customer $customer){
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer){
        $validate = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|numeric'
        ]);

        $customer -> update($validate);

        return redirect() -> route('customer.index') -> with('message', "Data pada rental dan customer berhasil diubah");
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }
}
