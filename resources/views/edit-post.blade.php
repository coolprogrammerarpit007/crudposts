<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog Post</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AR:wght@100..400&display=swap" rel="stylesheet">

    {{-- External Styling Link --}}
    <link rel="stylesheet" href="{{ url('css/blog-edit.css') }}">
</head>

<body>
    <div class="container">
        @php
            $post_id = $post->id;
            $post_title = $post->title;
            $post_body = $post->body;
        @endphp
        <form action="{{url('/')}}/update/{{$post_id}}" class="form-container" method="POST">
            @csrf
            <h2 class="register-title">Edit your form here...</h2>
            <div class="title-container input-container">
                <label for="title">Edit your title:</label>
                <input type="text" name="title" id="text" placeholder="Edit your title here..." value="{{$post_title}}">
            </div>
            {{-- <input type="text" name="title" id="title" value="{{$post_id}}"> --}}
            <div class="post-body input-container">
                <label for="body">Edit your post message here</label>
                <textarea name="body" id="body" cols="30" rows="10" placeholder="Edit your message here...">{{$post_body}}</textarea>
            </div>
            <div class="input-btns">
                <input type="submit" value="Submit" id="submit">
            </div>
        </form>
    </div>
</body>

</html>
