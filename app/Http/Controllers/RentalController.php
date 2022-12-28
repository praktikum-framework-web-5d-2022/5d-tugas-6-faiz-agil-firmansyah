<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index(){
        $rentals = Rental::get();
        return view('rental.index', compact('rentals'));
    }

    public function create(){
        $customers = Customer::all();
        return view('rental.create', compact('customers'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'customer_id' => 'required|numeric'
        ]);

        Rental::create($validate);
        return redirect() -> route('rental.index') -> with('message', "Data Rental {$validate['tipe']} berhasil ditambahkan");
    }

    public function destroy(Rental $rental){
        $rental->delete();
        return redirect()->route('rental.index') -> with('message', "Data Rental {$rental->tipe} berhasil dihapus");
    }

    public function edit(Rental $rental){
        $customers = Customer::all();
        return view('rental.edit', compact('rental', 'customers'));
    }

    public function update(Request $request, Rental $rental){
        $validate = $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'customer_id' => 'required|numeric'
        ]);

        $rental -> update($validate);

        return redirect() -> route('rental.index') -> with('message', "Data rental $rental->tipe berhasil diubah");
    }

    public function show(Rental $rental)
    {
        return view('rental.show', compact('rental'));
    }
}
