<!-- plugins:js -->
<script src="/Admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/Admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="/Admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="/Admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="/Admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/Admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/Admin/assets/js/off-canvas.js"></script>
<script src="/Admin/assets/js/hoverable-collapse.js"></script>
<script src="/Admin/assets/js/misc.js"></script>
<script src="/Admin/assets/js/settings.js"></script>
<script src="/Admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="/Admin/assets/js/dashboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- End custom js for this page -->
<script>
    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;
                });
            }
        });
        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    });
    </script>
<script>
    $(document).ready(function () {
        $("#selectAll").click(function () {
            if (this.checked) {
                $('input[name="items[]"]').prop("checked", true);
            } else {
                $('input[name="items[]"]').prop("checked", false);
            }
        });

        // Handle the "Delete" button click
        $("#deleteModal").on('click', function () {
            var selectedItems = $('input[name="items[]"]:checked').map(function () {
                return this.value;
            }).get();

            $("#selected-items").val(selectedItems);
        });
    });
    </script>
