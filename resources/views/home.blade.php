@extends('layout.index')
@section('title','Home')
@section('content')
<div class="my-5">
    <div class="container mx-auto">
        @if (session()->has('success'))
        <div class="bg-green-500 text-black px-4 py-2">
            {{session('success')}}
        </div>
        @endif
        <div class="flex justify-between items-center bg-gray-200 p-19 rounded-md">
            <div>
                <h1 class="text-xl text-semibold">Data Pasien ({{$total}}) </h1>
            </div>
            <div>
                <a href="{{ route('create') }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Add New Data</a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-50 px-6 py-4 text-left">
                                        ID
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-50 px-6 py-4 text-left">
                                        Nama Pasien
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-50 px-6 py-4 text-left">
                                        No HP
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-50 px-6 py-4 text-left">
                                        Alamat Pasien
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-50 px-6 py-4 text-left">
                                        Edit
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-50 px-6 py-4 text-left">
                                        Delete
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @forelse ($pasiens as $pasien)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$pasien->id}}</td>
                                    <td class="text-sm text-gray-50 font-light px-6 py-4 whitespace-nowrap">
                                        {{$pasien->Nama_Pasien}}
                                    </td>
                                    <td class="text-sm text-gray-50 font-light px-6 py-4 whitespace-nowrap">
                                        {{$pasien->No_Hp}}
                                    </td>
                                    <td class="text-sm text-gray-50 font-light px-6 py-4 whitespace-nowrap">
                                        {{$pasien->Alamat_Pasien}}
                                    </td>
                                    <td class="text-sm text-gray-50 px-4 py-2">
                                        <a href="{{ route('edit', ['id'=>$pasien->id]) }}" class="px-5 py-2 bg-blue-500 rounded-full text-white text-sm shadow-md font-semibold">Edit</a>
                                    </td>
                                    <td class="text-sm text-gray-50 px-4 py-2">
                                        <a href="{{ route('delete', ['id'=>$pasien->id]) }}" class="px-5 py-2 bg-red-500 rounded-full text-white text-sm shadow-md font-semibold">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>
                                        <h2>Data Pasien Not found</h2>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection