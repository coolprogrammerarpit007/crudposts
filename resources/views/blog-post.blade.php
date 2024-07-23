<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    {{-- External CSS Link --}}
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    {{-- Google Font Links --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        @foreach ($post as $item)
            <div class="blog">
                <div class="blog-title">
                    <h3>{{$item->title}}</h3>
                </div>
                <div class="blog-date">
                    <p>{{$item->created_at}}</p>
                </div>
                <div class="blog-post">
                    <p>{{$item->body}}</p>
                </div>
                <div class="action-btns">
                    <a href = "{{url('submit/edit',$item->id)}}"id="edit" class="btn-warning">Edit</a>
                    <a href = "{{url('submit/delete',$item->id)}}"id="delete" class="btn-danger">Delete</a>
                </div>
            </div>
        @endforeach

        <button onclick="window.location.href='{{route('home')}}'" class="back-to-home">back to home</button>
    </div>
</body>

</html>
