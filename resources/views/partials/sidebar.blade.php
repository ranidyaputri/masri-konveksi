<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
        <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
          <img src="{{ asset('assets/img/masri-logo.png') }}" class="h-[40px]">
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 text-sm font-medium">
        <li>
          <a href="{{ url('/') }}" class="flex items-center p-2 text-dismiss hover:text-primary hover:font-semibold active:text-primary active:font-semibold rounded-lg active:bg-primary-100 hover:bg-primary-100 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 stroke-dismiss group-hover:stroke-primary" width="20" height="20" viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 19v-8.5a1 1 0 0 0-.4-.8l-7-5.25a1 1 0 0 0-1.2 0l-7 5.25a1 1 0 0 0-.4.8V19a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1z"/>
            </svg>
            <span class="ml-3">Beranda</span>
          </a>
      </li>
        <li>
            <a href="{{ url('/order') }}" class="flex items-center p-2 text-dismiss hover:text-primary hover:font-semibold active:text-primary active:font-semibold rounded-lg active:bg-primary-100 hover:bg-primary-100 group">
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 stroke-dismiss group-hover:stroke-primary" width="20" height="20" viewBox="0 0 48 48">
                <g fill="none" stroke-linejoin="round" stroke-width="4">
                  <rect width="30" height="36" x="9" y="8" rx="2"/>
                  <path stroke-linecap="round" d="M18 4v6m12-6v6m-14 9h16m-16 8h12m-12 8h8"/>
                </g>
              </svg>
              <span class="ml-3">Pesanan</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/update-status') }}" class="{{ request()->routeIs('update-status.index') ? 'bg-primary-100 font-bold text-primary' : '' }} flex items-center p-2 text-dismiss hover:text-primary hover:font-semibold rounded-lg hover:bg-primary-100 group active">
              <svg xmlns="http://www.w3.org/2000/svg" class="{{ request()->routeIs('update-status.index') ? 'stroke-primary' : '' }} flex-shrink-0 stroke-dismiss group-hover:stroke-primary" width="20" height="20" viewBox="0 0 48 48">
                <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                  <path d="m20 33l6 2s15-3 17-3s2 2 0 4s-9 8-15 8s-10-3-14-3H4"/>
                  <path d="M4 29c2-2 6-5 10-5s13.5 4 15 6s-3 5-3 5M16 18v-8a2 2 0 0 1 2-2h24a2 2 0 0 1 2 2v16"/>
                  <path d="M25 8h10v9H25z"/>
                </g>
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Atur Status Pesanan</span>
            </a>
        </li>
        
      </ul>
  </div>
</aside>