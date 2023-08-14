@extends('app')
@section('content')
<div class="mx-[30px] md:mx-[60px]">
  <div class="flex flex-col justify-center items-center h-screen">
    <div class="card-login w-[450px] min-h-[300px] p-[48px] bg-putih rounded-xl">
      <img src="{{ asset('assets/img/masri-logo.png') }}" class="h-[40px] mb-8">
      <h1 class="font-bold text-primary text-[26px] md:text-[32px] mb-4">Masuk ke Akun</h1>
      @if (session()->has('success'))        
      <div id="toast-success" class="flex items-center w-full p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Akun berhasil dibuat! Silakan masuk.</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
      </div>
      @endif
      <div class="login-form">
        <form method="POST" action="{{ route('auth.login') }}">
          @csrf
          <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full p-2.5" placeholder="name@example.com" required>
          </div>
          <div class="mb-8">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full p-2.5" required>
          </div>
          <button type="submit" class="w-full text-white text-[14px] bg-primary hover:bg-primary-700 font-medium px-[18px] py-[12px] rounded-xl">Masuk</button>
        </form>
        <p class="text-hitam text-[14px] md:text-[16px] mt-3 text-center">Belum memiliki akun? 
          <span class="text-primary font-semibold hover:text-primary-400">
            <a href="{{ route('register.index') }}">Daftar</a>
          </span>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection