<base href="/public">
@extends('home.masterpage')
<style>
    /* CSS to make all images the same size */
    .product-item img {
        height: 250px; /* Adjust the height to your preferred size */
        width: 100%; /* To maintain the aspect ratio */
        object-fit: cover; /* Resize image while maintaining aspect ratio */
    }
</style>
@section('content')
<div>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Details</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                <li class="breadcrumb-item"><a class="text-body" href="#">Categories</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">{{$category->category_name}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4" style="display: flex; flex-wrap: wrap;">
            @foreach($products as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item" style="flex: 1; margin: 0 10px;">
                    <div class="position-relative bg-light overflow-hidden">
                       <img class="img-fluid w-100" src="images/{{ $item->ImageURL }}" alt="{{ $item->ProductName }}">
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5 mb-2" href="#">{{ $item->ProductName }}</a>
                        <span class="text-secondary me-1">{{ $item->DiscountPrice }} JD</span>
                        <span class="text-body text-decoration-line-through"> {{ $item->Price }} JD</span>
                    </div>
                    <div class="d-flex border-top">
                        <small class="w-50 text-center border-end py-2">

                            <a class="text-body" href="{{route('pagedetail',$item->id)}}"><i class="fa fa-eye text-secondary me-2"></i>View detail</a>
                        </small>
                        <small class="w-50 text-center py-2">
                            <a class="text-body" href="#"><i class="fa fa-shopping-bag text-secondary me-2"></i>Add to cart</a>
                        </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div></div>
@endsection
