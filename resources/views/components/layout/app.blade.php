<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Cleaning Service</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-100 text-gray-800">
    {{-- <x-navbar /> --}}
    <main >
          <x-navbar/>
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
