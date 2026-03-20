<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'SchoolManagement') }}</title>

    <link rel="icon" href="/images/fav.png" sizes="any">
    <link rel="icon" href="/images/fav.png" type="image/png">

    @viteReactRefresh
    @vite(['resources/js/app.jsx', "resources/js/pages/{$page['component']}.jsx"])
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
