@extends('master')
@section('title','Rental rental')
@section('menu1','active')

@section('content')
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
        .bt-maroon{
            background-color: maroon;
            color: white;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data Rental</h2>
                <p>Silahkan masukkan data dengan benar dan lengkap!</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('rental.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" id="merk" placeholder="Masukkan merk" class="form-control" value="{{old('merk')}}">
                        @error('merk')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tipe" class="form-label">Tipe</label>
                        <input type="text" name="tipe" id="tipe" placeholder="Masukkan tipe" class="form-control" value="{{old('tipe')}}">
                        @error('tipe')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="customer_id" class="form-label">Customer</label>
                        <select name="customer_id" id="customer_id" class="form-control">
                            <option selected disabled>Pilih Customer</option>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" {{old('customer_id') == $customer->id ? "selected" : ""}}>{{ $customer->nama }}</option>
                            @endforeach
                        </select>
                        @error('customer_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn bt-maroon">Tambah</button>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection
