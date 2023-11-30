<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body>
    <section class="container px-4 mx-auto">
        <head>
            @yield('header')
        </head>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            Default Footer
        </footer>
    </section>
</body>
</html>