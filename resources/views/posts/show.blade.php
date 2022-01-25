<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿詳細</h1>
        <div class='detail'>
            <h2 class = 'title'>{{$post->title}}</h2>
            <p class = 'body'>{{$post->body}}</p>
        </div>
        <footer>
            <a href="/">戻る</a>
        </footer>
    </body>
</html>