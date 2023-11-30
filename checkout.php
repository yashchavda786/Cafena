
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('head.php');
    require_once 'config.php';
    if($mainobj->getCartTotal()==0){
        header('location:menu.php');
    }
    use Razorpay\Api\Api;
    $api = new Api($keyId, $keySecret);
    ?>
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
                        <h2 class="page-title">Checkout</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index.php"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Checkout</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <div class="checkout-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-wrapper checkout-wrapper">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="checkout-top">
                                        <h4 class="title">Payment Mathod</h4>
                                        <div class="tab-content" id="pdContent">
                                            <div class="tab-pane fade show active" id="pd-1" role="tabpanel" aria-labelledby="pd-1-tab">
                                                <div class="cart-form">
                                                    <form id="checkout">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="fname">First Name*</label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="fnm" id="fname" placeholder="First Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="lname">Last Name*</label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="lnm" id="lname" placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="cname">Company name </label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="company" id="cname" placeholder="Company Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="rname">Country / Region *</label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="country" id="rname" placeholder="Country">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="hname">Street address *</label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="street" id="hname" placeholder="House number & State">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="tname">Town / City *</label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="town" id="tname">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="zname">Postcode / ZIP (optional)*</label>
                                                                    <input type="text" data-rule-required="true" aria-required="true" name="zip" id="zname">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="tel">Phone</label>
                                                                    <input type="tel" data-rule-required="true" aria-required="true" name="phone" id="tel" placeholder="Enter your number..">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="from-group mt-30">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" data-rule-required="true" aria-required="true" name="email" id="email" placeholder="Enter your mail..">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <label for="ainfo">Additional Information*</label>
                                                                    <textarea name="detail" data-rule-required="true" aria-required="true" id="ainfo" placeholder="Note about your order, Special note for delevery !"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="cart-total mt-45 text-end">
                                                <h2 class="title text-start">Cart Total</h2>
                                                <div class="ct-sub ct-sub__total">
                                                    <span>Total</span>
                                                    <span>&#8377; <?php echo $mainobj->getCartTotal() ?></span>
                                                    <input type="hidden" name="total" id="total" value="<?php echo $mainobj->getCartTotal() ?>">
                                                </div>
                                                <button type="submit" class="site-btn">Checkout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php
    require_once('footer.php');
    $payment_data = [
        //'recipt' => rand(0000000, 9999999),
        'amount' => $mainobj->getCartTotal() * 100,
        'currency' => 'INR',
        'payment_capture' => 1
    ];
    $razorpayOrder = $api->order->create($payment_data);
    $orderid = $razorpayOrder['id'];
    $_SESSION['razorpay_order_id'] = $razorpayOrderId;
    ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script type="text/javascript">
        $('#checkout').submit(function(event) {
            let amount = parseInt($('#total').val());
            let phone = $('#tel').val();
            event.preventDefault();
            var options = {
                "key": '<?= $keyId ?>', // Enter the Key ID generated from the Dashboard
                "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "Cafena",
                "description": "Cafena Order Management",
                "image": "https://yatribooking.org/images/logo/yatribooking%20logo%2004.png",
                "order_id": "<?= $orderid ?>",
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },
                "handler": function(response) {
                    if (typeof response.razorpay_payment_id != 'undefined') {
                        $.ajax({
                            url: "process/checkoutprocess.php",
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                FormData: $('#checkout').serializeArray(),
                                razorpayPaymentId: response.razorpay_payment_id,
                                paymentStatus: 'SUCCESS'
                            },
                            success: function(e) {
                                if (e.status == "SUCCESS") {
                                    notyf.success(e.msg),
                                        window.location.replace("index.php")
                                } else {
                                    notyf.error(e.msg)
                                }
                            },
                            error: function(e) {
                                console.log("ERROR:" + e);
                            }
                        });

                    }
                },
                "notes": {
                    "address": " Online Payment Test"
                },
                "theme": {
                    "color": "#C7A17A"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.on();
            rzp1.open();
            event.preventDefault();
        });
    </script>
</body>

</html>