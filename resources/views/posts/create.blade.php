<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ブログ投稿作成画面</h1>
        <div class='creates'>
            <form action='/posts' method='POST'>
                @csrf
                <div class = 'title_create'>
                    <p>タイトル（一行テキストボックス・必須）</p>
                    <input type='text' name='post[title]' required></input>
                </div>
                <div class='body_create'>
                    <p>本文（テキストエリア・必須）</p>
                    <textarea name='post[body]' required></textarea>
                </div>
                <button type='submit'>送信</button>
            </form>
        </div>
        <br>
        <a href="/">戻る</a>
    </body>
</html>