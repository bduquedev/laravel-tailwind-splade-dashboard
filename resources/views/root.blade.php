<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @spladeHead
    @vite('resources/js/app.js')

</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-800">
    @splade
</body>

</html>