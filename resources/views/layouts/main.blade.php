<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Shop</title>
</head>

<body>
    <div class="wrapper d-flex flex-column">
        @include('includes.header')
        <main class="flex-grow-1 bg-products">
            @yield('content')
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
</body>

</html>
