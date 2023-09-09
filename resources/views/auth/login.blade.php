<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="header">
        <h1 class="logo">ROBINSON</h1>
        <button class="register"><a href="{{route('register')}}">Register</a></button>
    </div>
    <div class="apply">
        <form action="{{route('login')}}" method="GET" enctype="multipart/form-data">
            <input type="text" class="text" name="email" placeholder="enter your email">
            <br>
            <input type="text" class="text" name="password" placeholder="enter tour password">
            <br>
            <input type="submit" class="submit" value="Log in">
            <br>
            <br>
            @if (session('messege'))
                <p class="error">error:{{session('messege')}}</p>
            @endif
        </form>
    </div>
</body>
</html>