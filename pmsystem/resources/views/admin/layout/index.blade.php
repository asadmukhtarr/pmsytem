@include('admin.layout.header')
    <main class="bg-gray-200 flex-grow h-screen main md:ml-64 md:w-[calc(100%-256px)] min-h-screen overflow-auto transition-all w-full">
        @include('admin.layout.navbar')
        @include('admin.layout.sidebar')
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="p-5">
            @yield('main-section')
        </div>
    </main>
@include('admin.layout.footer')
    