<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <style>
        .active-nav-link {
            background: #059669;
        }

        .nav-item:hover {
            background: #059669;
        }
        .nav-item {
            background: #10b981;
        }
    </style>
</head>

<body>

    {{ $slot }}

    @livewireScripts
</body>

</html>
