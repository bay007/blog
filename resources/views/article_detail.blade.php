<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{mix('css/app.css')}}" rel="stylesheet"> <!--Añadimos el css generado con webpack-->
    <title>{{$article->title}}</title>
</head>
<body>
    <h1>{{$article->title}} </h1>
    <p>{{$article->content}}</p>
    <ul>
        <li>{{$article->user->name}}</li>
        <li>{{$article->user->email}}</li>

        @if($article->user->type=='member')
            <li>Member since {{$article->user->created_at}}</li>
        @endif
    </ul>
    Categoría: {{$article->category->name}}
    <hr>
    Tags:
    <div class="article_tags">
    @foreach ($article->tags as $tag)
        {{$tag->name}},
    @endforeach
    </div>
    <script src="{{mix('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
</body>
</html>
