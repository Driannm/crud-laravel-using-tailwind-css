@extends('layout.index')
@section('title','Update Pasien')

@section('content')
<div class="my-5">
    <div class="container mx-auto max-w-xl shadow py-4 px-10">
        <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Edit data pasien</h1>
            <form action="" method="POST">
            @csrf
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Nama Pasien</label>
                    <input type="text" value="{{$pasiens -> Nama_Pasien}}" name="Nama_Pasien" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('Nama_Pasien')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">No HP</label>
                    <input type="text" value="{{$pasiens -> No_Hp}}" name="No_Hp" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('No_Hp')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Alamat Pasien</label>
                    <input type="text" value="{{$pasiens -> Alamat_Pasien}}" name="Alamat_Pasien" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('Alamat_Pasien')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md font-semibold">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection