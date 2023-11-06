<style>
    /* CSS to make all images the same size */
    .product-item img {
        height: 250px; /* Adjust the height to your preferred size */
        width:85%; /* To maintain the aspect ratio */
        object-fit: cover;
        margin: 14%;

    }
</style>
<div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4" style="display: flex; flex-wrap: wrap;">
            @foreach($products as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item" style="flex: 1; margin: 0 10px;">
                    <div class="position-relative bg-light overflow-hidden">
                       <img class="img-fluid" src="images/{{ $item->ImageURL }}" alt="{{ $item->ProductName }}">
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
                        <form method="POST" action="{{ route('cart', $item->id) }}">
                            @csrf
                            <small class="w-50 text-center py-2">
                                <button type="submit" class="btn btn-link text-body">
                                    <i class="fa fa-shopping-bag text-secondary me-2"></i>Add to cart
                                </button>
                            </small>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
