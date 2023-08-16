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
                <a href="{{ url('/order/create') }}" class="inline-flex w-fit mt-4 md:mt-0 text-white bg-primary hover:bg-primary-700 font-medium rounded-2xl text-sm px-[22px] py-[16px] focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" class="mr-3"><g fill="none">
                    <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="white" d="M10.5 20a1.5 1.5 0 0 0 3 0v-6.5H20a1.5 1.5 0 0 0 0-3h-6.5V4a1.5 1.5 0 0 0-3 0v6.5H4a1.5 1.5 0 0 0 0 3h6.5V20Z"/></g>
                </svg>
                Buat Pesanan
                </a>
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
                                Jumlah Barang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Bayar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit & Delete</span>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->id }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->order->nama_barang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->order->jumlah_barang }}
                            </td>
                            <td class="px-6 py-4">
                                Rp{{ number_format($data->total_bayar, 0, '.', ',') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->order->deskripsi }}
                            </td>
                            {{-- <td class="px-6 py-4 text-right flex-inline">
                                <a href="#" class="font-medium text-info hover:underline mr-3">Edit</a>
                                <a href="#" class="font-medium text-dismiss hover:underline">Delete</a>
                            </td> --}}
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
