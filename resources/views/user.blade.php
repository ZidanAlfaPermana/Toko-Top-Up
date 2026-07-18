@extends('layouts.app')

@section('content')
<div class="space-y-8 animate-fade-in">
    <div class="bg-gray-800 p-8 rounded-3xl border border-gray-700 shadow-xl">
        <h1 class="text-3xl font-bold text-white">Data Pelanggan</h1>
        <p class="text-gray-400 mt-2">Daftar pelanggan yang terdaftar di sistem Anda.</p>
    </div>

    <div class="relative">
        <input type="text" placeholder="Cari nama atau email pelanggan..." 
               class="w-full bg-gray-800 border border-gray-700 text-white pl-6 pr-6 py-4 rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none">
    </div>

    <div class="bg-gray-800/50 rounded-3xl border border-gray-700 overflow-hidden">
        <div class="grid grid-cols-4 px-6 py-4 border-b border-gray-700 text-[10px] font-bold text-gray-500 uppercase tracking-widest">
            <div>Pelanggan</div>
            <div>Kontak</div>
            <div>Total Pesanan</div>
            <div class="text-right">Tindakan</div>
        </div>

        <div class="p-6 grid grid-cols-4 items-center hover:bg-gray-700/30 transition-all cursor-default">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    BS
                </div>
                <div>
                    <p class="text-white font-bold">Budi Santoso</p>
                    <span class="text-gray-500 text-xs">ID: #CUS-001</span>
                </div>
            </div>

            <div class="text-gray-300">
                <div class="text-sm">budi@example.com</div>
                <div class="text-xs text-gray-500">081234567890</div>
            </div>

            <div>
                <span class="bg-indigo-500/10 text-indigo-400 px-3 py-1 rounded-lg text-sm font-bold border border-indigo-500/20">
                    12 Transaksi
                </span>
            </div>

            <div class="text-right">
                <button class="text-red-400 hover:text-white hover:bg-red-600 px-4 py-2 rounded-xl text-sm font-bold transition-all">
                    Hapus
                </button>
            </div>
        </div>
    </div>
</div>
@endsection