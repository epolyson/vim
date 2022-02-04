<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class = 'post'>
                    <h2 class = 'title'>
                        <a href = "/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <p class = 'body'>{{$post->body}}</p>
                    <a href = '/posts/{{$post->id}}/edit'>edit</a>
                    <form onsubmit='return check()' action='/posts/{{$post->id}}' id='form_{{$post->id}}' method='post' style='display:inline' >
                        @csrf
                        @method('DELETE')
                        <button type='submit'>delete</button>
                    </form>
                    <script>
                        function check()
                        {
                            if(window.confirm('本当に削除しますか？')){
                                return true;
                            }
                            else{
                                return false;
                            }
                        }
                    </script>
                </div>
            @endforeach
        </div>
        <br><br>
        <a href='/posts/create'>create</a>
        <br>
        <div class = "paginate">
            {{$posts->links()}}
        </div>
    </body>
</html>