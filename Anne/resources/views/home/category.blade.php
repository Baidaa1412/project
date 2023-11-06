<style>
    .card {
        width: 15%;
        height: 15%;
        background-color: #B8ADA0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .category {
    display: flex;
    gap: 20px; /* Adjust the gap as needed */
    flex-wrap: wrap;
  }
    .card img {
        width:90%;
        height: auto;
        /* border-radius: 50%; */
        padding: 2%;
        margin-left:10%;
    }

    .card:hover {
        background-color: rgb(226, 221, 221);
    }
    .card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.image-container {
    position: relative;
    overflow: hidden;
}

.zoom-in {
    transition: transform 0.3s;
}

.image-container:hover .zoom-in {
    transform: scale(1.1); /* Adjust the scale factor as needed */
}

span {
    margin-top: 10px; /* Add spacing between the image and text */
}


</style>
<div class="content">
    <div class="-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Categories</h1>
                        <p>Unique Decoration that Tells Your Home's Story.. Make It More Than Just a Place!</p>
                    </div>
                </div><br><br>
                <div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper category">
                            {{-- @dd($categories) --}}
                            @foreach($categories as $category)

                            <div class="swiper-slide card">
                                <a href="{{url('productcategory',$category->category_name)}}">
                                    <div class="image-container">
                                        <img class="zoom-in" src="/images/{{$category->category_image}}" alt="Image">
                                    </div>
                                </a>
                                <span>{{$category->category_name}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

