    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.desc') }}</title>
    </head>
    <body>
        <h1>{{ config('app.desc') }}</h1>
        <p>Application Version: {{ config('app.version') }}</p>
        <p><a href="{{ route('book.index') }}">Book Index</a></p>
        <p><a href="{{ route('author.index') }}">Author Index</a></p>
    </body>
</html>
