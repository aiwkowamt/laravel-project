@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<nav>
    <div>users</div>
    <div mt-3>menu 2</div>
    <div>menu 3</div>
    <img src="{{Vite::asset('resources/assets/JPEG_example_down.jpg')}}" alt="альтернативний текст">
</nav>
<section>
    @yield('content')
</section>
