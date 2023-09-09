<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
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
    <section class="cards" id="shoes">
        
            @foreach ($products as $product)
            @if ($product->gender=="women" || $product->gender=="unisex")
                <div class="content">
            <a href=""><div class="card">
                <div class="image">
                    <img src="{{URL('photos/' . $product->image)}}" width="100%">
                </div>
                <div class="information">
                    <h1>{{$product->name}}</h1>
                    <p>{{$product->information}}</p>
                    <p>{{$product->price}}$</p>
                    <br>
                    <button class="edit">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <a href="{{route('updateform',$product->id)}}">edit</a>
                    </button>
                    <br>
                    <br>
                    <form action="{{route('delete',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="delete">
                            <i class="fa-solid fa-trash"></i>
                            delete
                        </button>
                    </form>
                </div>
            </div></a>
            @endif
            @endforeach
        
        


        
    </section>
    <br>

    <button class="create">
        <i class="fa-solid fa-plus"></i>
        <a href="{{route('createproduct')}}">create</a>
    </button>
    <br>
    <br>
    
    
    

    

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