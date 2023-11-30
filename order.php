<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('head.php'); ?>
    <style>
        .dropbox {
            margin: 20px 0px;
        }

        .food-box>.thumb {
            height: 100px;
            width: 100px;
        }

        .btn-link {
            text-decoration: none;
            color: #C7A17A;
        }

        .btn-link:hover,
        .btn-link:focus {
            color: #000;
            box-shadow: 0 0 0 0.25rem #c7a17a80;
        }

        .thumb {
            width: 100px;
        }

        .text-input:hover,
        :focus {
            box-shadow: 0 0 0 0.25rem #c7a17a80;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
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
                        <h2 class="page-title">Create Order</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index.php"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Order</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <section class="popular-menu__area position-relative pb-120 pt-115">

            <form id="orderForm" action="process/makeOrder.php" method="POST">
                <div class="container">
                    <div class="row mb-3" style="flex-direction:row-reverse;">
                        <div class="col-4">
                            <!-- <button class="site-btn text-white float-end" onclick="toggleTable(<?= $_REQUEST['table'] ?>)" type="button" onclick="">
                                OCCUPY / UNOCCUPY TABLE
                            </button> -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="accordion" id="accordionExample">

                                <!-- Card 1 -->
                                <div class="card">
                                    <div class="card-header d-flex" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </h2>
                                        <h2 style="margin-left:20px;">Products</h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-8 mt-4">
                                                <?php
                                                    if ($mainobj->isTableOccupied($_REQUEST['table'])) {
                                                        $data = $mainobj->getOrderFromTable($_REQUEST['table']);

                                                        echo '<input type="hidden" name="order_id" value="' . $data["id"] . '">';
                                                    }
                                                    ?>
                                                
                                                    <input type="text" name="name" class="form-control text-input" placeholder="Enter Name" value="<?= (!empty($data['name']))?$data['name']:'' ?>">
                                                    
                                                    <input type="hidden" name="table_id" value="<?= $_REQUEST['table'] ?>">
                                                </div>
                                                <div class="col-4 mt-4">
                                                    <input type="number" class="form-control text-input" placeholder="Enter Phone Number" max="9999999999" name="phone" value="<?= (!empty($data['phone']))?$data['phone']:'' ?>">
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th width="30%">Image</th>
                                                                <th width="25%">Name</th>
                                                                <th width="25%">Price</th>
                                                                <th width="20%">No.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb"><img src="assets/images/menu/hot-chocolate.jpg" alt=""></div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Gourmet Belgian Hot Chocolate</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 180 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="hot_choco_number" value="<?= (!empty($data['hot_choco_number']))?$data['hot_choco_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb"><img src="assets/images/menu/cold-chocolate.jpg" alt=""></div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Gourmet Belgian Cold Chocolate</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 200 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="cold_choco_number" value="<?= (!empty($data['cold_choco_number']))?$data['cold_choco_number']:'' ?>" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb"> <img src="assets/images/menu/menu-2-3.png" alt=""> </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Espresso</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 120 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="esperesso_number" value="<?= (!empty($data['esperesso_number']))?$data['esperesso_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb"><img src="assets/images/menu/Macchiato.jpg" alt=""></div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Macchiato</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 145 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="macchiato_number" value="<?= (!empty($data['macchiato_number']))?$data['macchiato_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/menu-2-5.png" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Cafe Mocha</a></h3>
                                                                </td>
                                                                <td> <span class="price">&#8377; 165 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="cafe_mocha_number" value="<?= (!empty($data['cafe_mocha_number']))?$data['cafe_mocha_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/menu-3.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Cappuccino</a></h3>
                                                                </td>
                                                                <td> <span class="price">&#8377; 135 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="cappucino_number" value="<?= (!empty($data['cappucino_number']))?$data['cappucino_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/spinach-corn-sandwich.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Cheesy Corn ‘n’ Spinach</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 150 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="corn_n_spinach_number" value="<?= (!empty($data['corn_n_spinach_number']))?$data['corn_n_spinach_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/veg-cheese-sandwich.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Veg Cheese Sandwich</a></h3>
                                                                </td>
                                                                <td> <span class="price">&#8377; 140 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="veg_cheese_number" value="<?= (!empty($data['veg_cheese_number']))?$data['veg_cheese_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/cheese-chilli-sandwich.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Cheese Chilli Sandwich</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 150 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="cheese_chilli_number" value="<?= (!empty($data['cheese_chilli_number']))?$data['cheese_chilli_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/muffin.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Muffins</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 60 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="muffins_number" value="<?= (!empty($data['muffins_number']))?$data['muffins_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/cake-pastry.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Cake Pastry</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 200 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="pastry_number" value="<?= (!empty($data['pastry_number']))?$data['pastry_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/black-tea.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Black Tea</a></h3>
                                                                </td>
                                                                <td><span class="price">&#8377; 120 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="black_tea_number" value="<?= (!empty($data['black_tea_number']))?$data['black_tea_number']:'' ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="thumb">
                                                                        <img src="assets/images/menu/green-tea.jpg" alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h3 class="title border-effect"><a href="javascript:void(0)">Green Tea</a></h3>
                                                                </td>
                                                                <td> <span class="price">&#8377; 120 /-</span></td>
                                                                <td><input class="form-control" placeholder="Enter Quantity" type="number" min=0 name="green_tea_number" value="<?= (!empty($data['green_tea_number']))?$data['green_tea_number']:'' ?>"/></td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Add more cards as needed -->

                                    </div>
                                    <!-- Card 2 -->
                                    <div class="card">
                                        <div class="card-header d-flex" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </h2>
                                            <h2 style="margin-left:20px;">Actions</h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <?php
                                                            if(!empty($data['id'])):
                                                             ?>
                                                            <a class="site-btn text-white" type="button" href="process/finalize.php?order_id=<?= $data['id'] ?>&table_id=<?= $_REQUEST['table'] ?>">
                                                                FINALIZE ORDER
                                                            </a>
                                                            <?php
                                                            endif; ?>
                                                        </div>
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <a class="site-btn site-btn__borderd text-dark" href="javascript:void(0)" onclick="makeOrder()">
                                                                CREATE / UPDATE ORDER
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
            </form>
        </section>


    </main>

    <?php require_once('footer.php'); ?>
    <script type="text/javascript">
        function toggleTable(id) {

            $.ajax({
                url: 'process/occupyTable.php',
                data: {
                    id: id
                },
                method: "POST",
                async: false,
                cache: false,
                success: function(ans) {
                    ans = JSON.parse(ans);
                    if (ans.color == 'red') {
                        notyf.error(ans.msg);
                        window.location = 'tables.php';
                    } else if (ans.color == 'green') {
                        notyf.success(ans.msg);
                    }

                }
            });
        }

        function makeOrder() {
            document.getElementById("orderForm").submit();
        }
    </script>

</body>

</html>