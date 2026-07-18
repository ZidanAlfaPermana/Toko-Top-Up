@extends('layouts.app')

@section('content')
<div class="p-8 max-w-7xl mx-auto space-y-8 animate-in duration-700 fade-in">

    <div class="flex items-center justify-between border-b border-gray-800 pb-8">
        <div>
            <h1 class="text-4xl font-extrabold text-white tracking-tight">Manajemen Produk</h1>
            <p class="text-gray-500 mt-2 font-medium">Sistem kendali inventaris & stok terpadu.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg shadow-blue-900/20 active:scale-95">
                Tambah Produk
            </button>
        </div>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 shadow-[0_20px_50px_rgba(0,0,0,0.5)]">

        <div class="flex justify-between items-center mb-8">
            <div class="text-xs font-bold text-gray-500 uppercase tracking-widest italic">Inventory / 2026</div>
             <div class="relative w-96">
                <input type="text" placeholder="Cari produk..." class="w-full bg-gray-950 border border-gray-800 text-white pl-12 pr-4 py-4 rounded-2xl focus:border-blue-500 outline-none transition-all placeholder:text-gray-600">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-600">🔍</div>
            </div>
        </div>

        <div class="overflow-hidden">
            <div class="grid grid-cols-6 gap-4 px-6 py-4 text-[10px] font-black text-gray-600 uppercase tracking-widest border-b border-gray-800/50 mb-2">
                <div class="col-span-2">Produk</div>
                <div>Kategori</div>
                <div>Status</div>
                <div>Harga</div>
                <div class="text-right">Aksi</div>
            </div>

            <div class="grid grid-cols-6 gap-4 items-center px-6 py-5 hover:bg-gray-800/50 rounded-2xl transition-all duration-300">
                <div class="col-span-2 flex items-center gap-4">
                    <div class="w-14 h-14 bg-gray-800 rounded-xl border border-gray-700/50 flex items-center justify-center font-bold text-gray-500 text-xs italic">IMG</div>
                    <div class="font-bold text-white text-lg tracking-tight">Kopi Cokolatos Edit</div>
                </div>
                <div>
                    <span class="px-3 py-1 bg-gray-800 text-gray-400 rounded-lg text-[10px] font-bold uppercase tracking-widest border border-gray-700/50">Kopi ABC</span>
                </div>
                <div class="text-gray-400 font-medium">42 Pcs</div>
                <div class="text-white font-black text-lg">Rp 50.000</div>
                <div class="text-right flex justify-end gap-2">
                    <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 text-white rounded-lg text-[10px] font-black uppercase tracking-widest transition">Edit</button>
                    <button class="px-4 py-2 bg-red-900/20 hover:bg-red-600 text-red-500 hover:text-white rounded-lg text-[10px] font-black uppercase tracking-widest transition">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
