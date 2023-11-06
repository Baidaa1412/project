<style>
    .cart-icon-container {
        position: relative;
        display: inline-block;
    }

    .cart-item-count {
        position: absolute;
        top: -9px; /* Adjust the position as needed */
        right: -10px; /* Adjust the position as needed */
        background-color: rgb(232, 222, 222); /* Background color of the circle */
        color:orangered; /* Text color */
min-width: 20px;
        height:fit-content ; /* Height of the circle */
        border-radius: 50%; /* Make it a circle */
        text-align: center;
        line-height: 20px;
    }
</style>
<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0  fadeIn" data-delay="0.1s">
    <div class="top-bar  align-items-center d-none d-lg-flex" style="gap:30%" >
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fas fa-truck"></i> Limited time free shipping</small>
        </div>
        <div class= "col-lg-6 px-5 text-end  d-lg-flex">
            <small>Follow us:</small>
            <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-body ms-3" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
</svg></a>
            <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-4 fadeIn" data-delay="0.1s">
        <a href="/" class="navbar-brand ms-3 ms-lg-0">
            <img src="{{ asset('/images/logo.png') }}" alt="logo" style="width: 60%;" >
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarCollapse">
            <div class="navbar ms-auto p-4 ">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About Us</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                    <div class="dropdown-menu" style="width:120px">
                        @foreach($categories as $item)
                            <a href="{{url('productcategory',$item->category_name)}}" class="dropdown-item">{{ $item->category_name }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="/contact" class="nav-item nav-link">Contact Us</a>
            </div>
            <div class="none d-lg-flex" style="margin-right:40px;" >
                <a class="btn-sm-square ms-3" href="" >
                    <small class="fa fa-search text-body"style="font-size: 18px"></small>
                </a>
                <div class="cart-icon-container">
                    <a class="btn-sm-square  ms-3" href="./cart.html">
                        <small class="fa fa-shopping-bag text-body" style="font-size: 18px"></small>
                        <div id="cartItemCount" class="cart-item-count">0</div>
                    </a>
                </div>
                <div class=" narrow-dropdown nav-item dropdown " >
                    <a href="#" class="btn-sm-square ms-3 center">
                        <div class="user">
                            <small class="fa fa-user text-body" style="font-size: 18px"></small>
                        </div>
                    </a>

                    <div class="dropdown-menu" style="max-width: 5px; box-sizing:content-box;">
                        @if (Route::has('login'))
                            @auth
                            <a href="{{ route('profile.show') }}" class="dropdown-item">profile</a>


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                            @else
                            <a href="/login" class="dropdown-item" >Login</a>
                            <a href="/register" class="dropdown-item">Register</a>
                            @endauth
                        @endif
                    </div>



            </div>

        </div>
    </nav>

@include('home.script')
