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
            <h2 class="text-primary text-[28px] font-bold">Buat Pesanan Baru</h2>
          </div>

          <div class="card-table bg-white w-full h-full rounded-xl p-[28px] mt-[30px] shadow-sm">
            <form action="{{ url('order') }}" method="POST">
              @csrf
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                    <input type="text" name="nama_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama barang" autocomplete="off" required>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                    <input type="number" name="jumlah_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Jumlah" required>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Bayar</label>
                    <input type="number" name="total_bayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Total" required>
                </div>  
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Pembayaran</label>
                    <input type="text" name="tipe_bayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Debit/Cash/Transfer dll" autocomplete="off" required>
                </div>
              </div>
              <div class="mb-6">
                  <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                  <textarea type="text" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan deskripsi pesanan" autocomplete="off"></textarea>
              </div> 
              <button type="submit" class="text-white bg-primary hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>
