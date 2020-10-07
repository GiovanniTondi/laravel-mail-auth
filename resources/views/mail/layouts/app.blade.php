<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $user -> name }} {{  $action }}</title>

    <style media="screen">

        .container {
            width: 80%;

            margin: 20px auto;

        }

        .container .text {

            padding: 25px;

            font-style: italic;
        }

        .container .post {

            margin: 20px auto;
            padding: 25px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px 5px #ddd;
        }

        .container .post  {

        }

    </style>

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
