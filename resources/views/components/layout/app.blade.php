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
    <main>
        @if ($errors->any())
            <div
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded absolute top-3 left-[50%] -translate-x-[50%] mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('error'))
            <div
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded absolute top-3 left-[50%] -translate-x-[50%] mb-4">
                {{ session()->get('error') }}
            </div>
        @endif
        @if (session()->has('success'))
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded absolute top-3 left-[50%] -translate-x-[50%] mb-4">
                {{ session()->get('error') }}
            </div>
        @endif

        <x-navbar />
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
