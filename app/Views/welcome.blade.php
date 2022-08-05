<!DOCTYPE html>
<html lang="es-Es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DosCodigos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="/assets/app.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex justify-center items-center  min-h-screen">
            <h1 class="text-3xl font-bold ">
                Hola, {{$_ENV['APP_NAME']}}
              </h1>
        </div>
    </body>
</html>
