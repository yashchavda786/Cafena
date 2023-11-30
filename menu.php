<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head.php'); ?>
</head>
<body>
<main>
    <?php require_once('header.php'); ?>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-overlay="" data-opacity="5">
            <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
            <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">Menu</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index.php"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Menu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <section class="popular-menu__area position-relative pb-120 pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-40">
                            <span class="sub-title">menu</span>
                            <h2 class="title">Our Popular Menu </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="popular-menu__wrapper m-auto d-inline-block">
                            <div class="popular-menu__filter d-flex justify-content-center align-items-center mb-45">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".cat1">chocolate</button>
                                <button data-filter=".cat2">coffee</button>
                                <button data-filter=".cat3">sandwiches</button>
                                <button data-filter=".cat4">sweets</button>
                                <button data-filter=".cat5">Black tea</button>
                                <button data-filter=".cat6">Grean Tea</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popular-menu-grid-2" class="row popular-menu__grid popular-menu__lists mt-none-30">
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-sizer"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/hot-chocolate.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Gourmet Belgian Hot Chocolate','hot-chocolate.jpg','180')">Gourmet Belgian Hot Chocolate</a></h3>
                                <span class="price">&#8377; 180 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/cold-chocolate.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Gourmet Belgian Cold Chocolate','cold-chocolate.jpg','200')">Gourmet Belgian Cold Chocolate</a></h3>
                                <span class="price">&#8377; 200 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-3.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Espresso','menu-2-3.png','120')">Espresso</a></h3>
                                <span class="price">&#8377; 120 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/Macchiato.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Macchiato','Macchiato.jpg','145')">Macchiato</a></h3>
                                <span class="price">&#8377; 145 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-2-5.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Cafe Mocha','menu-2-5.png','165')">Cafe Mocha</a></h3>
                                <span class="price">&#8377; 165 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat2 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/menu-3.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Cappuccino','menu-3.jpg','135')">Cappuccino</a></h3>
                                <span class="price">&#8377; 135 /-</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat3 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/spinach-corn-sandwich.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Cheesy Corn ‘n’ Spinach','spinach-corn-sandwich.jpg','150')">Cheesy Corn ‘n’ Spinach</a></h3>
                                <span class="price">&#8377; 150 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat3 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/veg-cheese-sandwich.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Veg Cheese Sandwich','veg-cheese-sandwich.jpg','140')">Veg Cheese Sandwich</a></h3>
                                <span class="price">&#8377; 140 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat3 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/cheese-chilli-sandwich.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Cheese Chilli Sandwich','cheese-chilli-sandwich.jpg','150')">Cheese Chilli Sandwich</a></h3>
                                <span class="price">&#8377; 150 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat4 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/muffin.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Muffins','muffin.jpg','60')">Muffins</a></h3>
                                <span class="price">&#8377; 60 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat4 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/cake-pastry.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Cake Pastry','cake-pastry.jpg','200')">Cake Pastry</a></h3>
                                <span class="price">&#8377; 200 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat5 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/black-tea.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Black Tea','black-tea.jpg','120')">Black Tea</a></h3>
                                <span class="price">&#8377; 120 /-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat6 mt-35">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="assets/images/menu/green-tea.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="javascript:void(0)" onclick="addtocart('Green Tea','green-tea.jpg','120')">Green Tea</a></h3>
                                <span class="price">&#8377; 120 /-</span>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main>
    <?php require_once('footer.php'); ?>
</body>
</html>