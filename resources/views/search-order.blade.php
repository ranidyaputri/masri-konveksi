@extends('app')
@section('content')
@include('partials.navbar')
  <div class="mt-[100px] mx-[40px] md:mx-[60px]">
    <div class="card-resi w-full bg-putih rounded-xl min-h-[230px] p-[36px]">
      <h1 class="text-[36px] md:text-[42px] font-bold text-primary mb-3">Lacak Pesananmu</h1>
      <p class="text-md md:text-lg text-hitam mb-6">Masukkan ID transaksi yang telah diberikan melalui WhatsApp oleh tim kami.</p>
      <form class="flex items-center">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-[600px]">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <g fill="none" stroke="#928B93" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M10 17h6V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a1 1 0 0 0 1 1h1m18-1v-4a4 4 0 0 0-4-4h-2v9h5a1 1 0 0 0 1-1Zm-7 1a3 3 0 1 0 6 0h-6Zm7-3h-2"/><circle cx="7" cy="17" r="3"/></g>
              </svg>
            </div>
            <input type="search" name="search" value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full pl-10 p-2.5 " placeholder="Masukkan ID transaksi" autocomplete="off">
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-primary rounded-lg border hover:primary-400 focus:ring-4 focus:outline-none focus:ring-primary-300">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          <span class="sr-only">Search</span>
        </button>
      </form>
    </div>

    @forelse ($datas as $data)
    <div class="card-hasil mt-[30px] mb-[30px] bg-putih rounded-xl min-h-[200px] p-[36px] flex flex-col">
      <div class="transaction mb-4">
        <p class="text-sm mb-px text-dismiss">ID Transaksi</p>
        <p class="text-md font-bold text-hitam">{{ $data->id }}</p>
      </div>
      <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
      <div class="info mt-4">
        <p class="mb-2">status pesananmu saat ini:</p>
        <h2 class="text-primary font-bold text-[30px]">{{ $data->status }}</h2>
        <p class="text-sm text-gray-500">Terakhir diperbaharui pada {{ \Carbon\Carbon::parse($data->updated_at)->translatedFormat('l, d F Y H:i') }}</p>
      </div>
    </div>
    @empty
    <div class="card-hasil mt-[30px] mb-[60px] bg-putih rounded-xl min-h-[200px] p-[36px] flex flex-row items-center justify-center">
      <p class="text-dismiss">Tidak ada data ditemukan.</p>
    </div>
    @endforelse
    
  </div>
@endsection