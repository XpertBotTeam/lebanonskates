<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LebanonSkates</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased">
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img style="width: 48px;height: 48px;border-radius: 50%;overflow: hidden;margin-top: -6px;" src="/imgs/logols2.png">
            <span class="ml-3 text-xl" style="color: orange; font-weight: bold; font-size: x-large">LEBANON SKATES</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="/">HOME</a>
            <a class="mr-5 hover:text-gray-900" href="/map">MAPS</a>
            <a class="mr-5 hover:text-gray-900" href="/events">EVENTS</a>
            <a class="mr-5 hover:text-gray-900" href="/quiz">QUIZ</a>
            <a class="mr-5 hover:text-gray-900" href="/skaters">SKATERS</a>
            <a class="mr-5 hover:text-gray-900" style="font-weight: bold; color: orange" href="/login">LOGIN</a>
        </nav>

    </div>
</header>

<main class="max-w-6xl mx-auto">
    {{$slot}}
</main>
</body>
</html>
