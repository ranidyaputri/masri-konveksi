<nav class="">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-[60px] mt-[20px]">
    <a href="#" class="flex items-center">
        <img src="{{ asset('assets/img/masri-logo.png') }}" class="h-[46px]">
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border bg-putih md:bg-transparent border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 ">
        <li>
          <a href="{{ url('/landing') }}" class="block py-2 pl-3 pr-4 text-dismiss hover:text-primary hover:font-bold active:font-bold active:text-primary md:p-0 hover:transition ease-in-out duration-300">Beranda</a>
        </li>
        <li>
          <a href="#service" class="block py-2 pl-3 pr-4 text-dismiss hover:text-primary hover:font-bold active:font-bold active:text-primary md:p-0 hover:transition ease-in-out duration-300">Layanan</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-dismiss hover:text-primary hover:font-bold active:font-bold active:text-primary md:p-0 hover:transition ease-in-out duration-300">Katalog</a>
        </li>
        <li class="{{ Auth::check() ? 'hidden' : '' }}">
          <a href="{{ route('auth.index') }}" class="flex item-center py-2 pl-3 pr-4 text-dismiss hover:text-primary hover:font-bold active:font-bold active:text-primary md:p-0 hover:transition ease-in-out duration-300 group">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="flex-shrink-0 fill-dismiss group-hover:fill-primary transition ease-in-out duration-300 mr-2">
              <path d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm6 8H6q-.825 0-1.413-.588T4 18v-.8q0-.85.438-1.563T5.6 14.55q1.55-.775 3.15-1.163T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2v.8q0 .825-.588 1.413T18 20ZM6 18h12v-.8q0-.275-.138-.5t-.362-.35q-1.35-.675-2.725-1.012T12 15q-1.4 0-2.775.338T6.5 16.35q-.225.125-.363.35T6 17.2v.8Zm6-8q.825 0 1.413-.588T14 8q0-.825-.588-1.413T12 6q-.825 0-1.413.588T10 8q0 .825.588 1.413T12 10Zm0-2Zm0 10Z"/>
            </svg>
            <span>Masuk Akun</span>
          </a>
        </li>

        <div class="{{ Auth::check() ? '' : 'hidden' }}">
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center w-full text-dismiss hover:text-primary hover:font-bold active:font-bold focus:text-primary focus:font-bold md:p-0 hover:transition ease-in-out duration-300 group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-dismiss group-hover:fill-primary group-focus:fill-primary transition ease-in-out duration-300 mr-2">
                <path d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm6 8H6q-.825 0-1.413-.588T4 18v-.8q0-.85.438-1.563T5.6 14.55q1.55-.775 3.15-1.163T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2v.8q0 .825-.588 1.413T18 20ZM6 18h12v-.8q0-.275-.138-.5t-.362-.35q-1.35-.675-2.725-1.012T12 15q-1.4 0-2.775.338T6.5 16.35q-.225.125-.363.35T6 17.2v.8Zm6-8q.825 0 1.413-.588T14 8q0-.825-.588-1.413T12 6q-.825 0-1.413.588T10 8q0 .825.588 1.413T12 10Zm0-2Zm0 10Z"/>
              </svg>
              {{ $name }}
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
              @if (Auth::user()->roles == 'Customer')
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="flex items-centerblock px-4 py-2 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="stroke-dismiss mr-2">
                      <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M6.331 8H17.67a2 2 0 0 1 1.977 2.304l-1.255 8.152A3 3 0 0 1 15.426 21H8.574a3 3 0 0 1-2.965-2.544l-1.255-8.152A2 2 0 0 1 6.331 8z"/><path d="M9 11V6a3 3 0 0 1 6 0v5"/></g>
                    </svg>
                    Pesanan Saya
                  </a>
                </li>
              </ul>
              @else
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="flex items-centerblock px-4 py-2 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="stroke-dismiss mr-2">
                      <path fill="none" troke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 5a2 2 0 0 1 2-2h6v18H4a2 2 0 0 1-2-2V5Zm12-2h6a2 2 0 0 1 2 2v5h-8V3Zm0 11h8v5a2 2 0 0 1-2 2h-6v-7Z"/>
                    </svg>
                    Menu Admin
                  </a>
                </li>
              </ul>
              @endif
                <div class="py-1">
                  <form action="{{ route('auth.logout') }}" method="GET">
                    @csrf
                    <button type="submit" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="stroke-dismiss hover:stroke-primary transition ease-in-out duration-300 mr-2">
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8m4-9l-4-4m4 4l-4 4m4-4H9"/>
                      </svg>
                      Keluar Akun
                    </button>
                  </form>
                </div>
            </div>
          </li>
        </div>
        
        
      </ul>
    </div>
  </div>
</nav>