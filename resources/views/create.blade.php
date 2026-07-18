@extends('layouts.app')

@section('content')
    <div class="px-8 space-y-8 animate-in fade-in zoom-in-95 duration-500">
        <div class="border-b border-gray-800 pb-8">
            <h1 class="text-4xl font-black text-white tracking-tighter">Tambah Produk Baru</h1>
            <p class="text-gray-500 mt-1 font-medium">Lengkapi data produk untuk menambah ke inventaris.</p>
        </div>

        <!-- 1. Perubahan: Menambahkan enctype="multipart/form-data" -->
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-gray-900/50 border border-gray-700/50 p-8 rounded-3xl space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-400 mb-2">Nama Produk</label>
                    <input type="text" name="name" required class="w-full bg-gray-950 border border-gray-700 rounded-xl p-4 text-white focus:border-blue-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-400 mb-2">Kategori</label>
                    <input type="text" name="category" required class="w-full bg-gray-950 border border-gray-700 rounded-xl p-4 text-white focus:border-blue-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-400 mb-2">Harga (Rp)</label>
                    <input type="number" name="price" required class="w-full bg-gray-950 border border-gray-700 rounded-xl p-4 text-white focus:border-blue-500 outline-none">
                </div>

                <!-- 2. Perubahan: Menambahkan Input File Gambar -->
                <div>
                    <label class="block text-sm font-bold text-gray-400 mb-2">Foto Produk</label>
                    <input type="file" name="image" accept="image/*" class="w-full bg-gray-950 border border-gray-700 rounded-xl p-3 text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-gray-800 file:text-gray-200 hover:file:bg-gray-700 focus:border-blue-500 outline-none cursor-pointer">
                </div>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 rounded-2xl font-bold transition-all">Simpan Produk</button>
                <a href="{{ route('products.index') }}" class="bg-gray-800 hover:bg-gray-700 text-gray-300 px-8 py-3 rounded-2xl font-bold transition-all">Batal</a>
            </div>
        </form>
    </div>
@endsection
