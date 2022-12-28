@extends('master')
@section('title','Rental rental')
@section('menu1','active')

@section('content')
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Data Rental</h2>
                <p>Masukkan data customer dengan lengkap</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('rental.update', ['rental' => $rental->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="mb-4">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" id="merk" placeholder="Masukkan merk mobil" class="form-control" value="{{old('merk') ?? $rental->merk}}">
                        @error('merk')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tipe" class="form-label">Tipe</label>
                        <input type="text" name="tipe" id="tipe" placeholder="Masukkan tipe mobil" class="form-control" value="{{old('tipe') ?? $rental->tipe}}">
                        @error('tipe')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="customer_id" class="form-label">customer</label>
                        <select name="customer_id" id="customer_id" class="form-control">
                            <option selected disabled>Pilih customer</option>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" {{old('customer_id') ?? $rental->customer_id == $customer->id ? "selected" : ""}}>{{ $customer->tipe }}</option>
                            @endforeach
                        </select>
                        @error('customer_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn bg-maroon">Edit</button>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection
