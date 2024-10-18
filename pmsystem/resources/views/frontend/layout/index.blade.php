@include('frontend.layout.header')
    <main class="bg-gray-200 h-screen main  min-h-screen w-full">
        @include('frontend.layout.navbar')
        <div class="p-5">
            @yield('main-section')
        </div>
    </main>
@include('frontend.layout.footer')
    