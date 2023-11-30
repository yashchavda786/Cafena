<footer class="site-footer site-footer__3 pt-115 position-relative bg_img" data-opacity="8" data-overlay="dark" data-background="../assets/images/bg/footer-3-1.jpg">
    <div class="footer__menu-area mt-30 pb-90">
        <div class="container">
            <div class="row text-center">
                <p>&copy;2023 Cafena,India All rights reserved</p>
            </div>
        </div>
    
    </div>
</footer>

<!--========= JS Here =========-->
<!-- <script src="../assets/js/jquery-2.2.4.min.js"></script> -->
<script src="../assets/js/jquery-3.7.0.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap5.min.js.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery.meanmenu.min.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/lightcase.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/tilt.jquery.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/scrollwatch.js"></script>
<script src="../assets/js/sticky-header.js"></script>
<script src="../assets/js/waypoint.js"></script>
<script src="../assets/js/imagesloaded.pkgd.min.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
<script src="../assets/js/jquery-ui-slider-range.js"></script>
<script src="../assets/js/notyf.js"></script>
<script src="../assets/js/validate.js"></script>
<script src="../assets/js/main.js"></script>
<script type="text/javascript">
    var notyf = new Notyf({
        duration: 2e3,
        position: {
            x: "right",
            y: "top"
        }
    });

    function addtocart(prdnm, img, price) {
        $.ajax({
            type: "POST",
            url: 'process/addtocart.php',
            data: {
                prdnm :prdnm,
                img:img,
                price:price
            },
            async: false,
            cache: false,
            success: function(e) {
                if (e.trim() == "Success") {
                    notyf.success("Product added to cart success fully")
                    location.reload(true);
                } else {
                    notyf.error("Error Occurred in Adding Cart")
                }
            },
            error: function(e) {
                console.log("ERROR:" + e);
            }
        });
    }
    var table = new DataTable('#table');

</script>