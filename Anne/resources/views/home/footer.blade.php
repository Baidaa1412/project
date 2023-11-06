<div class="container-fluid  footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color:rgb(207, 196, 184)">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-lg-3 col-md-6">
                <h4 class="text-dark mb-4">Categories</h4>
                 @foreach($categories as $item)
                            <a href="{{url('productcategory',$item->category_name)}}">{{ $item->category_name }}</a><br>
                        @endforeach

            </div>
            <div class="col-lg-3 col-md-6" >
                <h4 class="text-dark mb-4">Quick Links</h4>
                <a  href="/about">About Us</a><br>
                <a  href="/contact">Contact Us</a><br>
                <a  href="">policy</a><br>
                <a  href="./terms.html">Terms & Condition</a><br>
                <a  href="">Support</a><br>
            </div>
            <div class="col-lg-3 col-md-6">

                <h4 class="text-dark mb-4">Newsletter</h4>
                <p style="color: black;">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-text-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-dark text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">ANNE STEVERS</a>, All Right Reserved.
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex pt-2">
                         <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                         <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                     </div>
                 </div>

            </div>
        </div>
    </div>
</div>
