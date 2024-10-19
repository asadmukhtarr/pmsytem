<nav class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">RoomBank</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a href="{{ route('home') }}" class="mr-5 hover:text-gray-900">Home</a>
        <a class="mr-5 hover:text-gray-900">About</a>
        <a class="mr-5 hover:text-gray-900">Properties</a>
        <a class="mr-5 hover:text-gray-900">Services</a>
        <a class="mr-5 hover:text-gray-900">Contact</a>
      </nav>
      @guest
      <a href="{{ route('login') }}" class="inline-flex items-center bg-red-400 border-0 py-1 px-3 focus:outline-none hover:bg-green-700 rounded text-white mt-4 md:mt-0 ml-2">Login</a>
      @endguest
      @auth
      <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center bg-blue-400 border-0 py-1 px-3 focus:outline-none hover:bg-green-700 rounded text-white mt-4 md:mt-0 ml-2">Dashboard
      </a>
      @endauth
    </div>
</nav>