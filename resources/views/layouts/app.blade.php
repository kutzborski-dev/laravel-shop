@include('partials.page-header')
    @include('partials.hero')
    
    <main class="py-16">
        <div class="container mx-auto max-w-7xl px-4">
            @yield('content')
        </div>
    </main>
    
    @include('partials.footer')
@include('partials.page-footer')