<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-100 text-gray-800">
    <header class="bg-white shadow">
        <h1 class="text-3xl font-bold text-center py-6">Our Cleaning Services</h1>
        <nav class="flex justify-center space-x-4">
            <a href="/" class="text-blue-500 hover:underline">Home</a>
            <a href="/services" class="text-blue-500 hover:underline">Services</a>
        </nav>
    </header>
    <main class="max-w-4xl mx-auto p-4">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="text-2xl font-semibold mt-4">Services We Offer</h2>
        <ul class="mt-4 space-y-4">
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-semibold">Residential Cleaning</h3>
                <p>Thorough cleaning for your home, including dusting, vacuuming, and sanitizing.</p>
            </li>
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-semibold">Commercial Cleaning</h3>
                <p>Professional cleaning services for offices and commercial spaces.</p>
            </li>
            <li class="bg-white p-4 rounded shadow">
                <h3 class="text-xl font-semibold">Deep Cleaning</h3>
                <p>A comprehensive cleaning service that covers every nook and cranny.</p>
            </li>
        </ul>
        <h2 class="text-2xl font-semibold mt-6">Book Our Services</h2>
        <form action="/book" method="POST" class="mt-4 bg-white p-4 rounded shadow">
            @csrf
            <label for="name" class="block mb-2">Name:</label>
            <input type="text" id="name" name="name" required class="border border-gray-300 p-2 w-full mb-4">
            <label for="email" class="block mb-2">Email:</label>
            <input type="email" id="email" name="email" required class="border border-gray-300 p-2 w-full mb-4">
            <label for="service" class="block mb-2">Select Service:</label>
            <select id="service" name="service" required class="border border-gray-300 p-2 w-full mb-4">
                <option value="Residential Cleaning">Residential Cleaning</option>
                <option value="Commercial Cleaning">Commercial Cleaning</option>
                <option value="Deep Cleaning">Deep Cleaning</option>
            </select>
            <label for="date" class="block mb-2">Preferred Date:</label>
            <input type="date" id="date" name="date" required class="border border-gray-300 p-2 w-full mb-4">
            <label for="notes" class="block mb-2">Additional Notes:</label>
            <textarea id="notes" name="notes" class="border border-gray-300 p-2 w-full mb-4"></textarea>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
        </form>
    </main>
    <footer>
        <p class="text-center py-4">&copy; 2023 Our Cleaning Service</p>
    </footer>
</body>

</html>
