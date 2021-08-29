<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <header>
            <a href="/">Stand Automovel</a>
        </header>

        <div id="contentArea">
            @yield('content')
        </div>
        
        <footer>

        </footer>
    </body>
</html>
