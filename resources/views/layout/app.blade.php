<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BeJe | A Easy Way To Become Hedonism')</title>
    @include('layout.styles')
</head>
<body>
    @include('layout.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('layout.footer')

    @include('layout.scripts')
</body>
</html>