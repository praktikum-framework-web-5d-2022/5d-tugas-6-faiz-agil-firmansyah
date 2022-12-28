@extends('master')
@section('title','Rental Mobil')
@section('menu','active')

@section('content')
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
        .text-maroon {
            color: maroon;
            font-weight: bold
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Data Customer</h2>
                    <a href="{{route('customer.create')}}" class="btn bg-maroon">Tambah</a>
                </div>
                <p>Dibawah ini merupakan data semua customer</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" align="center">
                        <thead>
                            <tr align="center">
                                <th align="center" class="align-middle" rowspan="2">#</th>
                                <th align="center" class="align-middle" rowspan="2">Nama Customer</th>
                                <th align="center" class="align-middle" rowspan="2">Nomor Hp</th>
                                <th align="center" class="align-middle" rowspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $customer)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td align="center">{{$customer->nama}}</td>
                                    <td align="center">{{$customer->no_hp}}</td>
                                    <td align="center "class="text-center">
                                        <form action="{{route('customer.destroy',$customer->id) }}" method="POST">
                                            <a href="{{route('customer.edit',$customer->id) }}" class="btn btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="11">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
