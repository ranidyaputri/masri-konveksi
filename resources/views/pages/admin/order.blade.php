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
          <h1 class="text-xl font-bold">Hallo</h1>
        </div>
      </div>
    </body>
</html>
