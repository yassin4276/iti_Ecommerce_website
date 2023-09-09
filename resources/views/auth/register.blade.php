<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="header">
        <h1 class="logo">ROBINSON</h1>
        <button class="login"><a href="{{route('loginform')}}">log in</a></button>
    </div>
    <br>
    <div class="apply">
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input type="text" name="firstname" class="text" placeholder="enter your firstname">
            <br>
            
            <input type="text" name="lastname" class="text" placeholder="enter your last name">
            <br>
            
            <input type="number" name="age" class="text" placeholder="enter your age">
            <br>
            
            <input type="text" name="email" class="text" placeholder="enter your email">
            <br>
            
            <input type="password" name="password" class="text" placeholder="enter your password">
            <br>
            <label for="">Image:</label>
            <input type="file" name="image">
            <br>
            <input type="submit" value="Register" class="submit">
            <br>
            <br>
            @if (session('messege'))
                <p class="error">error:{{session('messege')}}</p>
            @endif
        </form>
    </div>
    
    
</body>
</html>