@extends('layouts.admin')
@section('title','Tambah Produk')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.products._form')

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.products.index') }}" class="text-gray-600 mr-4 text-sm">Batal</a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection