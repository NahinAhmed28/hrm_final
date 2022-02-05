<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--load header component -->
<x-header/>
<body>
    <div id="app">
       <!--load navbar component -->
       <x-navbar/>

        <main class="py-4">
            @yield('content')
        </main>
        <!--load footer component -->
        <x-footer/>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
