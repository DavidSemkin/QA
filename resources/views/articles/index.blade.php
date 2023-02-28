<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    @foreach($articles as $article)
        <a href="{{ route('articles.show', $article) }}">
            <p>
{{--                {{dd($article->author_id)}}--}}
                <span class="ms-5">{{ $article->title }}</span>
{{--                <span class="ms-5">{{ $article->content }}</span>--}}
                <span class="ms-5">{{ $article->author_id }}</span>
                <span class="ms-5">{{ $article->author->name }}</span>
            </p>
        </a>
    @endforeach

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Статья</th>
                    <th scope="col">Автор_id</th>
                    <th scope="col">ФИО автора</th>
                </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <th scope="row">{{ $article->title }}</th>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->author_id }}</td>
                    <td>{{ $article->author->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @foreach($authors as $author)
            <p>{{ $author->name}}
                @foreach($author->articles as $article)
                    <span class="ps-5">{{ $article->title }}</span>
                @endforeach
            </p>
        @endforeach


        <br>
        <br>
        <br>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
