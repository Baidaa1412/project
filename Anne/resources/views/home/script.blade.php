<script>    $(window).scroll(function () {
    if ($(window).width() < 992) {
        if ($(this).scrollTop() > 45) {
            $('.fixed-top').addClass('bg-blue shadow');
        } else {
            $('.fixed-top').removeClass('bg-blue shadow');
        }
    } else {
        if ($(this).scrollTop() > 45) {
            $('.fixed-top').addClass('bg-blue shadow').css('top', -45);
        } else {
            $('.fixed-top').removeClass('bg-blue shadow').css('top', 0);
        }
    }
});</script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
