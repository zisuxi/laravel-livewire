<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    @livewireStyles
</head>
<body>

    <livewire:header />

    <main>
        @yield('main-content')
    </main>

    <livewire:footer />

    @livewireScripts
</body>
</html>
