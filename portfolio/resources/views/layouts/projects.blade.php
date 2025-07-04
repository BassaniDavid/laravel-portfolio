<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">
            @yield('title')
        </h1>

        @yield('content')
    </div>

</body>
</html>
