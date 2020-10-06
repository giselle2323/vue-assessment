<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/reset.css" rel="stylesheet" >
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" >
    </head>
    <body>
        <div id="app"></div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>

</html>
