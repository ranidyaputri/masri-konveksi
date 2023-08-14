@extends('app')
@section('content')
@include('partials.navbar')
  {{-- hero wrapper --}}
  <div class="hero-wrapper mx-[60px] mt-[5rem] flex flex-col md:flex-row columns-1 min-[900px]:columns-2 gap-[4rem] items-center justify-center">
    <div class="hero-txt">
      <h1 class="text-primary text-[44px] md:max-lg:text-[42px] sm:text-[50px] font-bold mb-8">Kualitas Diutamakan dengan Tepat Waktu</h1>
      <p class="text-hitam text-[20px] mb-10">
        Solusi Anda dalam pembuatan  baju seragam, baju wanita,<br>kaos event, kebaya, dan sebagainya.
      </p>
      <a href="#" class="text-white bg-primary hover:bg-primary-700 font-medium rounded-2xl text-md px-[22px] py-[16px] focus:outline-none">Pesan Sekarang</a>
    </div>
    <img src="{{ asset('assets/img/hero-img.png') }}" class="xl:max-w-[512px] max-w-[380px]">
  </div>
  {{-- end of hero wrapper --}}

  {{-- vision wrapper --}}
  <div class="vision-wrapper mx-[60px] mt-[123px] flex flex-col md:flex-row columns-1 min-[900px]:columns-2 gap-[4rem] items-center justify-center">
    <img src="{{ asset('assets/img/vision-img.png') }}" class="xl:max-w-[480px] max-w-[380px]">
    <div class="vision-card max-w-[649px]">
      <h2 class="text-primary text-[2rem] sm:text-[2.25rem] font-bold mb-8 text-center md:text-left">Kenali Kami Lebih Dekat</h2>
      <div class="card bg-putih rounded-2xl p-[28px] mb-6">
        <p class="text-primary text-[22px] font-bold mb-3">Visi Kami</p>
        <p class="text-hitam">Dikenal sebagai konveksi yang bisa di percaya dengan kualitas yang baik dan pelayanan yang profesional.</p>
      </div>
      <div class="card bg-putih rounded-2xl p-[28px]">
        <p class="text-primary text-[22px] font-bold mb-3">Misi Kami</p>
        <ul class="list-none">
          <li class="text-hitam flex">
            <img src="{{ asset('assets/img/checklist.svg') }}" class="grow-0 mr-2 w-[18px]">
            Memberikan hasil fashion yang berkualitas dan inovatif.
          </li>
          <li class="text-hitam flex">
            <img src="{{ asset('assets/img/checklist.svg') }}" class="grow-0 mr-2 w-[18px]">
            Memberikan layanan yang baik dan solusi positif kepada konsumen.
          </li>
          <li class="text-hitam flex">
            <img src="{{ asset('assets/img/checklist.svg') }}" class="grow-0 mr-2 w-[18px]">
            Mencetak pengusaha yang sanggup berkembang bersama.
          </li>
          <li class="text-hitam flex">
            <img src="{{ asset('assets/img/checklist.svg') }}" class="grow-0 mr-2 w-[18px]">
            Mengurangi pengangguran dan mensejahterakan masyarakat sekitar.
          </li>
        </ul>
      </div>
    </div>
  </div>

{{-- story wrapper --}}
<div class="story mt-[123px] bg-putih max-w-max py-[40px] md:py-[30px] px-[40px] md:px-32">
  <h2 class="text-primary text-center text-[2.25rem] font-bold mb-8">Cerita Kami</h2>
  <p class="text-hitam mt-[2.25rem] text-justify">
    Masri Konveksi berdiri sejak Juni 2022, di mana merupakan usaha bidang produksi pakaian yang dibuat secara massal dalam skala rumah tangga. 
    Masri Konveksi merupakan pilihan yang tepat sebagai tempat pembuatan baju seragam, baju wanita, kaos event, kebaya, dan sebagainya.
    <br><br>
    Masri Konveksi hadir sebagai jasa produksi Garmen one-stop yang melibatkan layanan dari nol hingga produk aktual yang siap dijual. 
    Masri Konveksi memiliki tujuan untuk mendukung dan melayani merek local independent, instansi, dan perusahaaan. 
    Kami berusaha keras untuk membantu suatu merek untuk mengembangkan ide paling kreatif mereka dalam bentuk, warna, dan ukuran apapun. Jika konsumen bisa membayangkan, konveksi bisa membuatnya. Masri konveksi juga fokus membantu masyarakat dengan mempekerjaan orang tua tunggal hingga ibu rumah tangga dan pekerja dibayar dengan upah yang adil. Masri berkomitmen penuh untuk maju dan bertumbuh bersama dengan mereka. Tujuan utama Masri konveksi adalah “Mengutamakan Kualitas”.
  </p>
</div>

<div class="mx-[30px] md:mx-[40px] xl:mx-[60px]">
  {{-- services wrapper --}}
  <div id="service" class="services-wrapper mt-[123px]">
    <div class="services-text mb-6">
      <h2 class="text-primary text-center text-[2.25rem] font-bold mb-3">Layanan Kami</h2>
      <p class="text-hitam text-[20px] mb-8 text-center">Beberapa layanan yang akan Anda dapatkan pada Masri Konveksi.</p>
    </div>
    <div class="grid grid-cols-1 sm:max-lg:grid-cols-2 lg:grid-cols-4 place-content-center gap-[20px] ">
      {{-- card w/o link --}}
      <div class="card-withicon sm:max-lg:ml-auto mb-4 xl:mb-0 bg-putih rounded-2xl px-[26px] pt-[36px] max-w-full sm:max-w-[315px] min-h-[302px]">
        <div class="h-16 w-16 bg-primary flex items-center justify-center rounded-full mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9h8m-8 4h6m4-9a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3h-5l-5 3v-3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h12z"/>
          </svg>
        </div>
        <div class="service-txt">
          <p class="text-primary font-bold text-[24px] md:text[28px] mb-3">Konsultasi</p>
          <p class="text-hitam">
            Konsultasi kebutuhan baju yang hendak Anda pesan.
          </p>
        </div>
      </div>
      {{-- card w/ link --}}
      <div class="card-withicon mb-4 xl:mb-0 bg-putih rounded-2xl px-[26px] pt-[36px] max-w-full sm:max-w-[315px] min-h-[302px]">
        <div class="h-16 w-16 bg-primary flex items-center justify-center rounded-full mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <path fill="white" d="M21.71 8.71c1.25-1.25.68-2.71 0-3.42l-3-3c-1.26-1.25-2.71-.68-3.42 0L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59v4l-.71.7c-1.25 1.26-.68 2.71 0 3.42l3 3c.54.54 1.12.74 1.67.74c.71 0 1.36-.35 1.75-.74l2.7-2.71H15c1.7 0 2.56-1.06 2.87-2.1c1.13-.3 1.75-1.16 2-2C21.42 14.5 22 13.03 22 12V9h-.59l.3-.29M20 12c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-4.41l-3.28 3.28c-.31.29-.49.12-.6.01l-2.99-2.98c-.29-.31-.12-.49-.01-.6L5 15.41v-4l2-2V11c0 1.21.8 3 3 3s3-1.79 3-3h7v1m.29-4.71L18.59 9H11v2c0 .45-.19 1-1 1s-1-.55-1-1V8c0-.46.17-2 2-2h3.41l2.28-2.28c.31-.29.49-.12.6-.01l2.99 2.98c.29.31.12.49.01.6Z"/>
          </svg>
        </div>
        <div class="service-txt">
          <p class="text-primary font-bold text-[24px] md:text[28px] mb-3">Kemampuan</p>
          <p class="text-hitam mb-4 sm:mb-8">Kemampuan memenuhi kebutuhan bisnis apparel Anda.</p>
        </div>
        <button type="button" data-modal-target="kemampuan-modal" data-modal-toggle="kemampuan-modal" class="view-link flex text-info hover:text-info-700 text-xs font-bold">
          BACA SELENGKAPNYA
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="ml-2">
            <path fill="#545fc5" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10Zm.47-13.53a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H8a.75.75 0 0 1 0-1.5h6.19l-1.72-1.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
          </svg>
        </button>
      </div>
      {{-- card w/o link --}}
      <div class="card-withicon sm:max-lg:ml-auto mb-4 xl:mb-0 bg-putih rounded-2xl px-[26px] pt-[36px] max-w-full sm:max-w-[315px] min-h-[302px]">
        <div class="h-16 w-16 bg-primary flex items-center justify-center rounded-full mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M10 17h6V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a1 1 0 0 0 1 1h1m18-1v-4a4 4 0 0 0-4-4h-2v9h5a1 1 0 0 0 1-1Zm-7 1a3 3 0 1 0 6 0h-6Zm7-3h-2"/><circle cx="7" cy="17" r="3"/></g>
          </svg>
        </div>
        <div class="service-txt">
          <p class="text-primary font-bold text-[24px] md:text[28px] mb-3">Status Pesanan</p>
          <p class="text-hitam">
            Cek status pesanan baju Anda hingga tiba tujuan.
          </p>
        </div>
      </div>
      {{-- card w/ link --}}
      <div class="card-withicon mb-4 xl:mb-0 bg-putih rounded-2xl px-[26px] pt-[36px] max-w-full sm:max-w-[315px] min-h-[302px]">
        <div class="h-16 w-16 bg-primary flex items-center justify-center rounded-full mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <path fill="white" d="M11.825 13H15q.425 0 .713-.288T16 12q0-.425-.288-.713T15 11h-3.175l.9-.9Q13 9.825 13 9.412t-.3-.712q-.275-.275-.7-.275t-.7.275l-2.6 2.6q-.3.3-.3.7t.3.7l2.6 2.6q.275.275.688.287t.712-.287q.275-.275.275-.7t-.275-.7l-.875-.9ZM5 21q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h4.2q.325-.9 1.088-1.45T12 1q.95 0 1.713.55T14.8 3H19q.825 0 1.413.588T21 5v14q0 .825-.588 1.413T19 21H5Zm0-2h14V5H5v14Zm7-14.75q.325 0 .537-.213t.213-.537q0-.325-.213-.537T12 2.75q-.325 0-.537.213t-.213.537q0 .325.213.537T12 4.25ZM5 19V5v14Z"/>
          </svg>
        </div>
        <div class="service-txt">
          <p class="text-primary font-bold text-[24px] md:text[28px] mb-3">Retur Pesanan</p>
          <p class="text-hitam text-base sm:max-lg:text-sm mb-4 sm:mb-8">Garansi pada setiap produk yang kami buat. *S&K berlaku</p>
        </div>
        <button type="button" data-modal-target="retur-modal" data-modal-toggle="retur-modal" class="view-link flex text-info hover:text-info-700 text-xs font-bold">
          BACA SELENGKAPNYA
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="ml-2">
            <path fill="#545fc5" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10Zm.47-13.53a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H8a.75.75 0 0 1 0-1.5h6.19l-1.72-1.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  {{-- consultation wrapper --}}
  <div class="consultation-wrapper mt-[123px] max-w-[630px] mx-auto">
    <h1 class="text-primary text-[50px] font-bold text-center mb-8">Tertarik memesan baju di Masri Konveksi?</h1>
    <p class="text-hitam text-[20px] text-center mb-10">Konsultasi lebih lanjut untuk mendapatkan informasi seputar konveksi kami.</p>
    <div class="flex justify-center">
      <a href="https://wa.me/6285236468831?text=Halo%20Masri%20Konveksi,%20saya%20ingin%20konsultasi." target="_blank" class="inline-flex text-white bg-primary hover:bg-primary-700 text-font-bold font-medium rounded-2xl text-md px-[22px] py-[16px] focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="-2 -2 24 24" class="mr-3">
          <path fill="white" d="m16.907 4.44l-7.655 7.655c.227.325.42.676.575 1.048l1.91 4.599l5.17-13.303zm-9.002 6.308l7.656-7.656l-13.303 5.17l4.599 1.911a5.51 5.51 0 0 1 1.048.575zm11.618-7.862l-6.027 15.506c-.38.98-1.477 1.483-2.449 1.124a1.831 1.831 0 0 1-1.057-1.017L8.08 13.9a3.662 3.662 0 0 0-1.98-1.98l-4.6-1.91C.546 9.613.11 8.51.528 7.544a1.95 1.95 0 0 1 1.08-1.04L17.114.475a1.852 1.852 0 0 1 2.41 2.41z"/>
        </svg>
        Konsultasi Sekarang
      </a>
    </div>
  </div>
</div>

{{-- footer --}}
<div class="footer grid grid-cols-1 md:grid-cols-2 place-items-center mt-[123px] bg-putih min-w-full py-[62px]">
  <img src="{{ asset('assets/img/masri-logo.png') }}" class="max-h-[80px] md:max-h-[130px] mb-6 md:mb-0 md:place-self-end">
  <div class="contact md:ml-10 md:place-self-start">
    <h3 class="text-primary font-bold text-2xl mb-3 text-center md:text-left">Narahubung</h3>
    <p class="text-hitam mb-6">
      Jl. Langgar GG Dame No.4
      <br>
      Medan, Sumatera Utara
    </p>
    <a href="https://wa.me/6285236468831" target="_blank" class="flex text-hitam hover:text-hitam-400 font-semibold group mb-5">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2 ">
        <g fill="none">
          <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/>
          <path class="fill-hitam group-hover:fill-hitam-400" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.958 9.958 0 0 1-4.863-1.26l-.305-.178l-3.032.892a1.01 1.01 0 0 1-1.28-1.145l.026-.109l.892-3.032A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2Zm0 2a8 8 0 0 0-6.759 12.282c.198.312.283.696.216 1.077l-.039.163l-.441 1.501l1.501-.441c.433-.128.883-.05 1.24.177A8 8 0 1 0 12 4ZM9.102 7.184a.695.695 0 0 1 .684.075c.504.368.904.862 1.248 1.344l.327.474l.153.225a.712.712 0 0 1-.046.864l-.075.076l-.924.686a.227.227 0 0 0-.067.291c.21.38.581.947 1.007 1.373c.427.426 1.02.822 1.426 1.055c.088.05.194.034.266-.031l.038-.045l.601-.915a.711.711 0 0 1 .973-.158l.543.379c.54.385 1.059.799 1.47 1.324a.696.696 0 0 1 .089.703c-.396.924-1.399 1.711-2.441 1.673l-.159-.01l-.191-.018a4.966 4.966 0 0 1-.108-.014l-.238-.04c-.924-.174-2.405-.698-3.94-2.232c-1.534-1.535-2.058-3.016-2.232-3.94l-.04-.238l-.025-.208l-.013-.175a3.76 3.76 0 0 1-.004-.075c-.038-1.044.753-2.047 1.678-2.443Z"/>
        </g>
      </svg>
      +628 523 646 8831
    </a>
    <a href="https://instagram.com/masri.konveksi" target="_blank" class="flex text-hitam hover:text-hitam-400 font-semibold group">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2 fill-hitam group-hover:fill-hitam-400">
        <path fill-rule="evenodd" d="M7.465 1.066C8.638 1.012 9.012 1 12 1c2.988 0 3.362.013 4.534.066c1.172.053 1.972.24 2.672.511c.733.277 1.398.71 1.948 1.27c.56.549.992 1.213 1.268 1.947c.272.7.458 1.5.512 2.67C22.988 8.639 23 9.013 23 12c0 2.988-.013 3.362-.066 4.535c-.053 1.17-.24 1.97-.512 2.67a5.396 5.396 0 0 1-1.268 1.949c-.55.56-1.215.992-1.948 1.268c-.7.272-1.5.458-2.67.512c-1.174.054-1.548.066-4.536.066c-2.988 0-3.362-.013-4.535-.066c-1.17-.053-1.97-.24-2.67-.512a5.397 5.397 0 0 1-1.949-1.268a5.392 5.392 0 0 1-1.269-1.948c-.271-.7-.457-1.5-.511-2.67C1.012 15.361 1 14.987 1 12c0-2.988.013-3.362.066-4.534c.053-1.172.24-1.972.511-2.672a5.396 5.396 0 0 1 1.27-1.948a5.392 5.392 0 0 1 1.947-1.269c.7-.271 1.5-.457 2.67-.511Zm8.98 1.98c-1.16-.053-1.508-.064-4.445-.064c-2.937 0-3.285.011-4.445.064c-1.073.049-1.655.228-2.043.379c-.513.2-.88.437-1.265.822a3.412 3.412 0 0 0-.822 1.265c-.151.388-.33.97-.379 2.043c-.053 1.16-.064 1.508-.064 4.445c0 2.937.011 3.285.064 4.445c.049 1.073.228 1.655.379 2.043c.176.477.457.91.822 1.265c.355.365.788.646 1.265.822c.388.151.97.33 2.043.379c1.16.053 1.507.064 4.445.064c2.938 0 3.285-.011 4.445-.064c1.073-.049 1.655-.228 2.043-.379c.513-.2.88-.437 1.265-.822c.365-.355.646-.788.822-1.265c.151-.388.33-.97.379-2.043c.053-1.16.064-1.508.064-4.445c0-2.937-.011-3.285-.064-4.445c-.049-1.073-.228-1.655-.379-2.043c-.2-.513-.437-.88-.822-1.265a3.413 3.413 0 0 0-1.265-.822c-.388-.151-.97-.33-2.043-.379Zm-5.85 12.345a3.669 3.669 0 0 0 4-5.986a3.67 3.67 0 1 0-4 5.986ZM8.002 8.002a5.654 5.654 0 1 1 7.996 7.996a5.654 5.654 0 0 1-7.996-7.996Zm10.906-.814a1.337 1.337 0 1 0-1.89-1.89a1.337 1.337 0 0 0 1.89 1.89Z" clip-rule="evenodd"/>
      </svg>
      @masri.konveksi
    </a>
  </div>
</div>
{{-- </section> --}}

{{-- modal kemampuan --}}
<div id="kemampuan-modal" tabindex="-1" aria-hidden="true" class="transition-all duration-300 ease-in-out fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <div class="px-6 py-6 lg:px-8">
              <h3 class="mb-8 text-xl font-semibold text-primary">Kemampuan</h3>
              <p class="text-justify text-hitam mb-[46px]">
                Kami memiliki kemampuan untuk memenuhi kebutuhan bisnis apparel anda baik skala besar maupun kecil. Semua proses dilakukan oleh tim yang ahli di bidangnya.
                <br><br>
                Opsi dan ketersediaan kain dan aksesori kami didasarkan pada inventaris pemasok kami, jadi kami akan mencari yang paling sesuai.
                <br><br>
                Kami memiliki kemampuan untuk memenuhi kebutuhan bisnis apparel anda baik skala besar maupun kecil. Semua proses dilakukan oleh tim yang ahli di bidangnya.
                <br><br>
                <span class="text-primary font-semibold">Kami menyediakan bordir custom, menggunakan mesin jahit manual dan bordir komputerisasi, serta menyediakan jasa sablon.</span>
              </p>
              <button data-modal-hide="kemampuan-modal" type="button" class="min-w-full text-white bg-grey hover:bg-grey-600 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-bold px-5 py-2.5 hover:text-gray-900 focus:z-10">Tutup</button>
            </div>
        </div>
    </div>
</div>
{{-- modal retur --}}
<div id="retur-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow">
          <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-8 text-xl font-semibold text-primary">Retur Pesanan</h3>
            <p class="text-justify text-hitam mb-[46px]">
              Kami memiliki garansi pada setiap produk yang kami buat. kami memiliki customer service yang siap tanggap dalam melayani setiap pertanyaan dan keluhan yang diajukan.
              <br><br>
              Jika ada cacat yang disebabkan dari proses produksi, Anda dapat menghubungi kami dan mengembalikan produk kepada kami dan kami akan mengurusnya.
              <br><br>
              <span class="text-primary font-semibold">Proses retur memakan waktu 5 hingga 14 hari dan akan dikembalikan kepada Anda sesegera mungkin dan Jika cacat disebabkan oleh cacat garmen, kami tidak dapat berbuat apa-apa.</span>
            </p>
            <button data-modal-hide="retur-modal" type="button" class="min-w-full text-white bg-grey hover:bg-grey-600 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-bold px-5 py-2.5 hover:text-gray-900 focus:z-10">Tutup</button>
          </div>
      </div>
  </div>
</div>


@endsection