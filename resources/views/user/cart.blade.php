<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    <h1>My orders:</h1>
    <br>
    <br>
    @foreach ($orders as $order)
        @if ($order->profile_id==session('userid'))
        <div class="orders">
            <h1>Order number:{{$order->id}}</h1>
            
            <nav class="navigationn">
                <img src="{{URL('photos/' . $order->product->image)}}" width="100px">
                <br>
                <form action="{{route('deleteorder',$order->id)}}" method="POST" enctype="multipart/form-data">
                @method('DELETE')
                @csrf
                <button type="submit" class="delete">
                    <i class="fa-solid fa-trash"></i>
                    delete
                </button>
            </form>
                {{$order->product->name}}
                <br>
                {{$order->product->information}}
                <br>
                {{$order->product->price}}
            </nav>
            
                        
        </div>
        <br>
        @endif
    @endforeach
    
    <footer class="footer">
        <pre class="footer1"><span>ROBINSON</span>     @All rights reserved</pre>
        <div class="social-icons">
            <p>contact us:</p>
            <a href="https://www.facebook.com/profile.php?id=100005050236304"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            
        </div>
    </footer>
    @else
    <h1>Error:must log in first</h1>
    <a href="{{route('loginform')}}">login</a>
    @endif
    
</body>
</html>