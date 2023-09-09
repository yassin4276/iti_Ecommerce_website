<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @if (session('userid'))
        <header>
        <a href="{{route('adminindex')}}" class="logo">ROBINSON</a>
        <form action="{{route('search')}}" method="GET" enctype="multipart/form-data">
            <label for="search">Search:</label>
            <input type="text" name="name">
            <input type="submit" value="Search">
        </form>
        <nav class="navigation">
            <a href="{{route('menproducts')}}">Men</a>
            <a href="{{route('womenproducts')}}">Women</a>
            <a href="{{route('adminprofile',session('userid'))}}">profile</a>
            <a href="{{route('logout')}}">Sign out</a>
        </nav>
    </header>
    <div class="info">
        @if ($profile->image=="")
        <img src="{{URL('photos/user_male.jpg')}}" width="100px">
        @else
            <img src="{{URL('photos/'.$profile->image)}}" width="100px">
        @endif
       <p>FirstName:{{$profile->firstname}}</p>
       <p>LastName:{{$profile->lastname}}</p>
       <p>Email:{{$profile->email}}</p>
       <p>Password:{{$profile->password}}</p>
       <button><a href="{{route('adminupdateprofile',$profile->id)}}">Edit</a></button>

        @if (session('wmessege'))
                <p class="success">{{session('wmessege')}}</p>
        @endif
    </div>
    @else
    <h1>Error:must log in first</h1>
    <a href="{{route('loginform')}}">login</a>
    @endif
    

</body>
</html>