<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="js/main.js"></script>
    <title>@yield('title', 'Artikel')</title>
</head>
<body class="container mt-5">
    <nav>
        <a href="/article" class="">/Article</a>
        <a href="/article/create" class="">/+New</a>
    </nav>


    @yield('content')
</body>
</html>