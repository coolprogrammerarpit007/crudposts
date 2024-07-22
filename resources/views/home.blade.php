<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Google Font Links --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="{{'/'}}/submit" class="form-container" method="POST">
            <fieldset>
                <legend>Create Your Post:</legend>
                <div class="title-container input-container">
                    <label for="title">Enter your title: </label>
                    <input type="text" name="title" id="text" placeholder="Enter your title here...">
                </div>
                <div class="post-body input-container">
                    <label for="body">Enter your post message here</label>
                    <textarea name="body" id="body" cols="30" rows="10" placeholder="Enter your message here..."></textarea>
                </div>
                <div class="input-btns">
                    <input type="submit" value="Submit" id="submit">
                    <input type="submit" value="edit" id="edit">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>
