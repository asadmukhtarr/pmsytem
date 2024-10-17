@include('admin.layout.header')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
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
    