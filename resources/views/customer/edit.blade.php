@extends('master')
@section('title','Rental Mobil')
@section('menu','active')

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
                <h2>Edit Data Customer</h2>
                <p>Masukkan data customer dengan lengkap</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('customer.update', ['customer' => $customer->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama customer</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama customer" class="form-control" value="{{old('nama') ?? $customer->nama}}">
                        @error('nama')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="no_hp" class="form-label">Nomor Hp</label>
                        <input type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Hp" class="form-control" value="{{old('no_hp') ?? $customer->no_hp}}">
                        @error('no_hp')
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
