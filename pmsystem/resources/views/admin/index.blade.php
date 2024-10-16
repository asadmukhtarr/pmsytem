@include('admin.layout.header')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        @include('admin.layout.navbar')
        @include('admin.layout.sidebar')
        <div class="p-5">
            @yield('main-section')
        </div>
    </main>
@include('admin.layout.footer')
    