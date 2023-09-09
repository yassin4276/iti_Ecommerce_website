<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/createproduct.css')}}">
</head>
<body>
    @if (session('userid'))
        <div class="header">
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
        
    </div>
    <div class="apply">
        <form action="{{(route('storeproduct'))}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" class="text" name="name" placeholder="Enter product name">
            <br>
            <input type="text" class="text" name="information" placeholder="Enter product information">
            <br>
            <select name="gender" class="text">
                <option value="men">men</option>
                <option value="women">women</option>
                <option value="unisex">unisex</option>
            </select>
            <br>
            <input type="number" class="text" name="price" placeholder="Enter product price">
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image">
            <br>
            <input type="submit" value="Create" class="submit">
        </form>
            @if (session('messege'))
                <p class="error">error:{{session('messege')}}</p>
            @endif
    </div>
    @else
    <h1>Error:must log in first</h1>
    <a href="{{route('loginform')}}">login</a>
    @endif
    
</body>
</html>