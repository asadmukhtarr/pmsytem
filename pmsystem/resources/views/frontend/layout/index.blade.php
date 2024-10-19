@include('frontend.layout.header')
    <main class="bg-gray-200 w-full">
        @include('frontend.layout.navbar')
            @yield('main-section')
    </main>
@include('frontend.layout.footer')
    