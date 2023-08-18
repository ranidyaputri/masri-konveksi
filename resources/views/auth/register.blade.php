@extends('app')
@section('content')
<div class="mx-[30px] md:mx-[60px] my-[60px]">
  <div class="flex justify-center items-center h-screen">
    <div class="card-login w-[450px] min-h-[300px] p-[48px] bg-putih rounded-xl">
      <img src="{{ asset('assets/img/masri-logo.png') }}" class="h-[40px] mb-8">
      <h1 class="font-bold text-primary text-[26px] md:text-[32px] mb-4">Buat Akun Masri</h1>
      <div class="register-form">
        <form method="POST" action="{{ route('register.create') }}">
          @csrf
          <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full p-2.5" required>
          </div>
          <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full p-2.5" placeholder="name@example.com" autocomplete="off" required>
          </div>
          <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full p-2.5" required>
          </div>
          <div class="mb-8">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
            <input type="password" name="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-300 focus:border-primary-300 block w-full p-2.5" required>
          </div>
          <button type="submit" class="w-full text-white text-[14px] bg-primary hover:bg-primary-700 font-medium px-[18px] py-[12px] rounded-xl">Daftar</button>
        </form>
        <p class="text-hitam text-[14px] md:text-[16px] mt-3 text-center">Sudah memiliki akun? 
          <span class="text-primary font-semibold hover:text-primary-400">
            <a href="{{ route('auth.index') }}">Masuk</a>
          </span>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection