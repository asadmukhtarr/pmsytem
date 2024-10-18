@include('frontend.layout.header')
    <main class="bg-gray-200 flex-grow h-screen main md:ml-64 md:w-[calc(100%-256px)] min-h-screen overflow-auto transition-all w-full">
        @include('frontend.layout.navbar')
        <div class="p-5">
            @yield('main-section')
        </div>
    </main>
@include('frontend.layout.footer')
    