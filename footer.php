<footer class="site-footer site-footer__3 pt-115 position-relative bg_img" data-opacity="8" data-overlay="dark" data-background="assets/images/bg/footer-3-1.jpg">

    <div class="footer__top footer__top--3 pt-155 position-relative">
        <a href="#" class="go-top position-absolute d-flex align-items-center justify-content-center">
            <i class="fal fa-long-arrow-up"></i>
            <span>go to top</span>
        </a>
        <div class="container">
            <div class="row justify-content-center mt-none-30">
                <div class="col-xl-3 col-lg-6 mt-30">
                    <div class="footer__widget footer__info">
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="assets/images/icons/ft-phone.png" alt="">
                            <span>Phone :</span>
                            <a href="tel:88019339702520">+88019 339 702 520</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30 pl-55">
                    <div class="footer__widget footer__info">
                        <div class="item d-flex align-items-center justify-content-start">
                            <img src="assets/images/icons/ft-map-marker.png" alt="">
                            <span>Address :</span>
                            <p>30 North West New</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 mt-30 pl-55">
                    <div class="footer__widget">
                        <div class="subscribe">
                            <form method="post">
                                <input type="email" name="email" id="email" placeholder="Enter your email">
                                <button type="submit" class="subscribe__btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__middle mt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="footer__logo--content">
                        <img class="mb-15" src="assets/images/logo/logo.png" alt="">
                        <p>Nestled in the vibrant heart of Housing City, our cafe is your haven for the most exquisite coffee experience you'll ever encounter. </p>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end">
                    <div class="social-links d-flex align-items-center justify-content-lg-end">
                        <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__menu-area mt-30 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="footer__menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="menu.php">Menu</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-end">
                    <a href="#" class="go-top go-top__bottom">
                        <span>go top</span>
                        <i class="fal fa-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--========= JS Here =========-->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrollwatch.js"></script>
<script src="assets/js/sticky-header.js"></script>
<script src="assets/js/waypoint.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
<script src="assets/js/jquery-ui-slider-range.js"></script>
<script src="assets/js/notyf.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/main.js"></script>
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
    
</script>