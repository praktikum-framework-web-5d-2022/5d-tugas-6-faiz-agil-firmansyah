@extends('master')
@section('title','Rental Mobil')
@section('menu','active')

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
                <h2>Tambah Data Customer</h2>
                <p>Silahkan masukkan data dengan benar dan lengkap!</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('customer.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama Customer</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama customer" class="form-control" value="{{old('nama')}}">
                        @error('nama')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="no_hp" class="form-label">Nomor Hp</label>
                        <input type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Hp" class="form-control" value="{{old('no_hp')}}">
                        @error('no_hp')
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
