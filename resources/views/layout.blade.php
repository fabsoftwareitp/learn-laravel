<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeira aplicação!</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Posts</a></li>
        </ul>
    </nav>

    <!--CONTEUDO DAS NOSSAS VIEWS -->
    <main>
        @yield('content')
    </main>

</body>
</html>
