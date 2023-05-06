<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trains</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="raw d-flex flex-wrap">
                @include('partial.trains')
            </div>
            
        </div>

    </body>
</html>