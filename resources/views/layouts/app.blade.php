<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="d-flex flex-column vh-100">
        <header>
            @include('partials.header')
        </header>
        <main class="flex-grow-1 mt-5 container w-50">
            @yield('main')
        </main>
        <footer class="p-2 bg-dark text-white">
            @include('partials.footer')
        </footer>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        const createUrl = "{{ url('create') }}"
        const storeUrl = "{{ url('store') }}"
        const showUrl = "{{ url('show') }}"
    </script>
    <script src="{{ asset('js/myscript.js') }}"></script>
</body>

</html>
