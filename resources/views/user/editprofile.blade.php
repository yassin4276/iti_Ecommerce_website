<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/updateprofileform.css')}}">
</head>
<body>
    @if (session('userid'))
        <header>
        <a href="{{route('userindex')}}" class="logo">ROBINSON</a>
        <form action="{{route('usersearch')}}" method="GET" enctype="multipart/form-data">
            <label for="search">Search:</label>
            <input type="text" name="name">
            <input type="submit" value="Search">
        </form>
        <nav class="navigation">
            <a href="{{route('usermenproducts')}}">Men</a>
            <a href="{{route('userwomenproducts')}}">Women</a>
            <a href="{{route('userprofile',session('userid'))}}">Profile</a>
            <a href="{{route('viewcart',session('userid'))}}">Cart</a>
            <a href="{{route('logout')}}">Sign out</a>
        </nav>
    </header>
    <br>
    <div class="apply">
        <form action="{{route('usereditprofile',$profile->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <input type="text" name="firstname" class="text" value="{{$profile->firstname}}" placeholder="enter your firstname">
            <br>
            
            <input type="text" name="lastname" class="text" value="{{$profile->lastname}}" placeholder="enter your last name">
            <br>
            
            <input type="number" name="age" class="text" value="{{$profile->age}}" placeholder="enter your age">
            <br>
            
            <input type="text" name="email" class="text" value="{{$profile->email}}" placeholder="enter your email">
            <br>
            
            <input type="text" name="password" class="text" value="{{$profile->password}}" placeholder="enter your password">
            <br>
            <label for="">Image:</label>
            <input type="file" name="image">
            <br>
            <input type="submit" value="Edit" class="submit">
            @if (session('wmessege'))
                <p class="error">error:{{session('wmessege')}}</p>
            @endif
        </form>
    </div>
    @else
    <h1>Error:must log in first</h1>
    <a href="{{route('loginform')}}">login</a>
    @endif
    
    
</body>
</html>