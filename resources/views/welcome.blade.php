<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel App</title>

        <style>
            #content {
                width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <h1>Laravel App</h1>

            <h3>Version: {{ $version }}</h3>
        </div>
    </body>
</html>
