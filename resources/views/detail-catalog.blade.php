@extends('app')
@section('content')
    @include('partials.navbar')
    <div class="mx-[30px] md:mx-[60px] mt-[120px]">
      <div class="flex w-full flex-col md:flex-row justify-center md:justify-start items-center">
        {{-- carousel --}}
        <div class="foto">
          <div id="indicators-carousel" class="flex items-center space-x-12" data-carousel="static">
            {{-- carousel image --}}
            <div class="relative w-[380px] md:w-[500px]">
                <!-- Carousel wrapper -->
                <div class="relative h-[380px] overflow-hidden rounded-lg md:h-[500px] shadow-sm">
                  @foreach ($datas as $data)
                    <!-- Item -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="{{ $data->file_name == "*1.jpg" ? 'active' : '' }}">
                        <img src="{{ asset('img-catalog/'.$data->file_name) }}"
                            class="object-cover aspect-square absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            >
                    </div>
                  @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-hitam/30 group-hover:bg-hitam/60 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-hitam/30 group-hover:bg-hitam/60 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            {{-- indicators --}}
            <div class="flex flex-col space-y-4">
              @foreach ($datas as $key => $value)
                  <div class="w-[60px] h-[60px] md:w-20 md:h-20">
                    <button type="button" class="group rounded-lg" aria-current="true" aria-label="Slide {{ $key++ }}" data-carousel-slide-to="0">
                      <img class="w-full aspect-square object-cover rounded-lg group-hover:bg-gray-700 group-hover:bg-blend-multiply" 
                      src="{{ asset('img-catalog/'.$value->file_name) }}" alt="dummy-image">
                    </button>
                  </div>
              @endforeach
            </div>
          </div>
        </div>

        {{-- text --}}
        <div class="card-txt mt-10 p-0 md:mt-0 md:p-10">
          <h3 class="text-primary text-[38px] font-bold mb-6">{{ $datas[0]->katalog->nama }}</h3>
          <p class="text-hitam text-base mb-6">{{ $datas[0]->katalog->deskripsi }}</p>
          <a href="https://wa.me/6285236468831?text=Halo%20Masri%20Konveksi,%20saya%20ingin%20pesan%20{{ $datas[0]->katalog->nama }}." target="_blank" class="inline-flex text-white bg-primary hover:bg-primary-400 text-font-bold font-semibold rounded-2xl text-base px-[18px] py-[14px] focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48" class="mr-3">
              <g fill="none"><path d="M39 32H13L8 12h36l-5 20Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20H8Z"/><circle cx="13" cy="39" r="3" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><circle cx="39" cy="39" r="3" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g>
            </svg>
            Pesan
          </a>
        </div>
        
      </div>
    </div>
@endsection
