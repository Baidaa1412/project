<base href="/public">

@extends('home.masterpage')
<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>


<style>
body {
    font-family: 'open sans';
    overflow-x: hidden; }

  img {
    max-width: 100%; }

  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px; } }

  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
      width: 18%;
      margin-right: 2.5%; }
      .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
      .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
      .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

  .tab-content {
    overflow: hidden; }
    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
              animation-name: opacity;
      -webkit-animation-duration: .3s;
              animation-duration: .3s; }

  .card {
    margin-top: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em; }
    .action button {
        background-color: #A4988A;
        color: #fff;
        padding: 8px;
        transition: background-color 0.3s, color 0.3s;
    }
    .submit{
     background-color: #A4988A;
        color: #fff;
        padding: 8px;
        color: #fff; /* Change to your desired color */
        border: #A4988A solid 1px;

    }
    .submit:hover{
        background-color: #333; /* Change to your desired color */
        color: #fff; /* Change to your desired color */
        box-shadow: #b36800;
    }

   .action button:hover {
        background-color: #333; /* Change to your desired color */
        color: #fff; /* Change to your desired color */
        box-shadow: #b36800;
    }


  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }

  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }

  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .product-title, .price, .sizes, .colors {
    text-transform: UPPERCASE;
    font-weight: bold; }

  .checked, .price span {
    color: #ff9f1a; }

  .product-title, .rating, .product-description, .price, .vote, .sizes {
    margin-bottom: 15px; }

  .product-title {
    margin-top: 0; }

  .size {
    margin-right: 10px; }
    .size:first-of-type {
      margin-left: 40px; }

  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px; }
    .color:first-of-type {
      margin-left: 20px; }

  .add-to-cart, .like {
    background: #eae3d9;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
            transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
      background: #b36800;
      color: #fff; }

  .not-available {
    text-align: center;
    line-height: 2em; }
    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff; }

  .orange {
    background: #ff9f1a; }

  .green {
    background: #85ad00; }

  .blue {
    background: #0076ad; }

  .tooltip-inner {
    padding: 1.3em; }

  @-webkit-keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }

  @keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }
              /* قم بتعيين لون النقطة */
  .dot {
      display: inline-block;
      width: 10px; /* تعيين عرض النقطة حسب الحاجة */
      height: 10px; /* تعيين ارتفاع النقطة حسب الحاجة */
      background-color: green; /* تعيين اللون الأخضر الذي تريده */
      border-radius: 50%; /* جعل النقطة دائرية */
      margin-right: 5px; /* تعيين هامش من اليمين حسب الحاجة */
  }


  /*# sourceMappingURL=style.css.map */
  </style>
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <img src="images/{{ $products->ImageURL }}" alt="{{ $products->ProductName }}" style="width: 55%;" />
                            </div>
                        </div>
                    </div>

                    <div class="details col-md-6">
                        <h3>{{$products->ProductName}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 reviews</span>
                        </div>
                        <p class="product-description">{{$products->Description}}</p>
                        <h4 class="price">
                            <span style="text-decoration-line: line-through; color: black;">{{$products->Price}}JD</span>
                            <span style="text-decoration-line: none;">{{$products->DiscountPrice}}JD</span>
                        </h4>
                        <p class="vote">
                            <strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong>
                        </p>

                        <h5>
                            <span class="dot"></span> In stock
                        </h5> <br>

                        <div class="quantity" style="display: flex">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-minus btn btn-default btn-number" data-type="minus" data-field="quantity">
                                        <span class="glyphicon glyphicon-minus">-</span>
                                    </button>
                                </span>
                                <input type="text" id="quantity" name="quantity" class=" input-number" value="1" min="1" style="width: 12%;     text-align: center;">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-plus btn btn-default btn-number" data-type="plus" data-field="quantity">
                                        <span class="glyphicon glyphicon-plus">+</span>
                                    </button>
                                </span>
                            </div>
                        </div><br><br>

                        <div class="action">
                            <button class="btn btn-default me-2" type="button">
                                <a class="text-white" href="#">
                                    <i class="fa fa-heart text-white me-2"></i>Wishlist
                                </a>
                            </button>
                            <button class="btn btn-default" type="button">
                                <a class="text-white" href="#">
                                    <i class="fa fa-shopping-bag text-white me-2"></i>Add to cart
                                </a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="">
                <h3>Customer Reviews</h3>
            </div>
            <div class="card-body">
                @foreach ($reviews as $review)
                    <div class="review">
                        <h4><i class="fa fa-user"></i> {{ $review->name }}</h4>
                        <p>{{ $review->review }}</p><hr>
                    </div>
                @endforeach
            </div>

            <form action="{{ route('reviews.store', ['id' => $products->id]) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name"  value="{{ auth()->user()->name }}" class="form-control" required>

                    <div class="form-group">
                        <label for="review">Your Review:</label>
                        <textarea id="review" name="review" class="form-control" required></textarea>
                    </div><br>
                    <button type="submit"  class="submit"   >Submit Review</button>
                </form>
            </div>


        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.quantity-plus').click(function(e) {
                e.preventDefault();
                fieldName = $(this).attr('data-field');
                var currentVal = parseInt($('input[name=' + fieldName + ']').val(), 10);
                if (!isNaN(currentVal)) {
                    $('input[name=' + fieldName + ']').val(currentVal + 1);
                } else {
                    $('input[name=' + fieldName + ']').val(1);
                }
            });

            $('.quantity-minus').click(function(e) {
                e.preventDefault();
                fieldName = $(this).attr('data-field');
                var currentVal = parseInt($('input[name=' + fieldName + ']').val(), 10);
                if (!isNaN(currentVal) && currentVal > 1) {
                    $('input[name=' + fieldName + ']').val(currentVal - 1);
                } else {
                    $('input[name=' + fieldName + ']').val(1);
                }
            });
        });
    </script>

