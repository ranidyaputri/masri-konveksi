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
                <h2 class="text-primary text-[28px] font-bold">Daftar Pesanan Pembeli</h2>
            </div>

            <div class="card-table bg-white w-full h-full rounded-xl p-[28px] mt-[40px] shadow-sm">
                <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID Transaksi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Barang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $data)
                        <tr class="bg-white border-b ">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->id }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              {{ $data->order->nama_barang }}
                            </td>
                            <td class="px-6 py-4">
                              {{ $data->status }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <div class="max-w-fit text-xs text-center font-semibold bg-info hover:bg-blue-400 p-3 rounded-lg text-putih">
                                    <a href="{{ url('/update-status/'.$data->id.'/edit') }}">Update Status</a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-center" colspan="4">Tidak ada data.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
