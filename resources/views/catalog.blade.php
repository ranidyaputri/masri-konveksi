@extends('app')
@section('content')
@include('partials.navbar')
<div class="mx-[30px] md:mx-[50px]">
  {{-- jumbotron --}}
  <div class="flex flex-col justify-center items-start md:items-center bg-cover card-wrapper mt-[120px] bg-center bg-no-repeat bg-cloth bg-gray-400 bg-blend-multiply rounded-xl min-h-[300px] w-full p-[36px]">
    <h1 class="text-white text-[30px] md:text-[38px] font-bold mb-3">Eksplor Katalog Masri Konveksi</h1>
    <p class="text-white text-[18px] md:text-[22px] mb-5">Ingin memesan? Hubungi kami lebih lanjut.</p>
    <div class="flex justify-center">
      <a href="https://wa.me/6285236468831?text=Halo%20Masri%20Konveksi,%20saya%20ingin%20pesan." target="_blank" class="inline-flex text-primary bg-white hover:bg-primary-200 text-font-bold font-semibold rounded-2xl text-md px-[22px] py-[16px] focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48" class="mr-3">
          <g fill="none"><path d="M39 32H13L8 12h36l-5 20Z"/><path stroke="#402643" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20H8Z"/><circle cx="13" cy="39" r="3" stroke="#402643" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><circle cx="39" cy="39" r="3" stroke="#402643" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g>
        </svg>
        Pesan Sekarang
      </a>
    </div>
  </div>

  {{-- card wrapper --}}
  <div class="grid grid-cols-2 md:grid-cols-4 place-items-center mt-10">
    {{-- card --}}
    <a href="#" class="card-link">
      <div class="flex flex-col card-catalog h-[400px] w-[300px] mb-4">
        <div class="img-card w-[300px] h-[300px]">
          <img src="{{ asset('assets/img/card.jpg') }}" class="object-cover rounded-xl aspect-square">
        </div>
        <div class="card-txt mt-4">
          {{-- <div class="inline-flex justify-between w-full"> --}}
            <h3 class="text-xl text-primary font-bold">Kebaya</h3>
            {{-- <span class="price-tag w-fit p-3 bg-white rounded-lg text-hitam text-xs">Rp200.000</span> --}}
          {{-- </div> --}}
          <p class="text-hitam text-sm mt-2">Custom kebaya by Masri Konveksi.</p>
        </div>
      </div>
    </a>
    

    {{-- card --}}
    <div class="flex flex-col card-catalog h-[400px] w-[300px] mb-4">
      <div class="img-card w-[300px] h-[300px]">
        <img src="{{ asset('assets/img/card.jpg') }}" class="object-cover rounded-xl aspect-square">
      </div>
      <div class="card-txt mt-4">
        {{-- <div class="inline-flex justify-between w-full"> --}}
          <h3 class="text-xl text-primary font-bold">Seragam</h3>
          {{-- <span class="price-tag w-fit p-3 bg-white rounded-lg text-hitam text-xs">Rp200.000</span> --}}
        {{-- </div> --}}
        <p class="text-hitam text-sm mt-2">Custom kebaya by Masri Konveksi.</p>
      </div>
    </div>

    {{-- card --}}
    <div class="flex flex-col card-catalog h-[400px] w-[300px] mb-4">
      <div class="img-card w-[300px] h-[300px]">
        <img src="{{ asset('assets/img/card.jpg') }}" class="object-cover rounded-xl aspect-square">
      </div>
      <div class="card-txt mt-4">
        {{-- <div class="inline-flex justify-between w-full"> --}}
          <h3 class="text-xl text-primary font-bold">Baju Wanita</h3>
          {{-- <span class="price-tag w-fit p-3 bg-white rounded-lg text-hitam text-xs">Rp200.000</span> --}}
        {{-- </div> --}}
        <p class="text-hitam text-sm mt-2">Custom kebaya by Masri Konveksi.</p>
      </div>
    </div>

    {{-- card --}}
    <div class="flex flex-col card-catalog h-[400px] w-[300px] mb-4">
      <div class="img-card w-[300px] h-[300px]">
        <img src="{{ asset('assets/img/card.jpg') }}" class="object-cover rounded-xl aspect-square">
      </div>
      <div class="card-txt mt-4">
        {{-- <div class="inline-flex justify-between w-full"> --}}
          <h3 class="text-xl text-primary font-bold">Baju PDH</h3>
          {{-- <span class="price-tag w-fit p-3 bg-white rounded-lg text-hitam text-xs">Rp200.000</span> --}}
        {{-- </div> --}}
        <p class="text-hitam text-sm mt-2">Custom kebaya by Masri Konveksi.</p>
      </div>
    </div>

    {{-- card --}}
    <div class="flex flex-col card-catalog h-[400px] w-[300px] mb-4">
      <div class="img-card w-[300px] h-[300px]">
        <img src="{{ asset('assets/img/card.jpg') }}" class="object-cover rounded-xl aspect-square">
      </div>
      <div class="card-txt mt-4">
        {{-- <div class="inline-flex justify-between w-full"> --}}
          <h3 class="text-xl text-primary font-bold">Jubah</h3>
          {{-- <span class="price-tag w-fit p-3 bg-white rounded-lg text-hitam text-xs">Rp200.000</span> --}}
        {{-- </div> --}}
        <p class="text-hitam text-sm mt-2">Custom kebaya by Masri Konveksi.</p>
      </div>
    </div>
  </div>
</div>
@endsection