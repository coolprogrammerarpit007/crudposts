<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- External Css Link --}}
    <link rel="stylesheet" href="{{url('css/login.css')}}">
    {{-- External Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="" class="form-container" method="POST">
            <div class="input-container">
                <label for="email">email</label>
                <input type="email" id="username" name="username" placeholder="arpit.mishra.gmail.com">
            </div>
            <div class="input-container">
                <label for="password">password</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
