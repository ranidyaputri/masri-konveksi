<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masri</title>
        <link rel="icon" href="{{ asset('assets/img/icon.svg') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css', 'resources/js/app.js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    </head>
    <body class="antialiased font-jakarta">
      @include('partials.sidebar')
      <div class="p-4 sm:ml-64 bg-neutral h-[100vh]">
        <div class="p-4 mt-14">
          <div class="title flex flex-col md:flex-row columns-1 md:columns-2 justify-between mt-6">
            <h2 class="text-primary text-[28px] font-bold">Perbaharui Status Pesanan</h2>
          </div>

          <div class="card-table bg-white w-full h-full rounded-xl p-[28px] mt-[30px] shadow-sm">
            <form action="{{ url('/update-status/'.$datas->id) }}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="PATCH">
              <div class="mb-6">
                  @foreach ($status as $status)
                  <div class="flex items-center mb-3">
                    <input {{ $status->status == $datas->status ? 'checked' : '' }} id="default-radio-2" type="radio" value="{{ $status->status }}" name="status" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary-300 focus:ring-2">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $status->status }}</label>
                  </div>
                  @endforeach
              </div> 
              <button type="submit" class="mt-4 text-white bg-primary hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>
