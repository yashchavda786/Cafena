<aside class="cart-bar-wrapper">
    <div class="cart-bar__close">
        <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>
    <div class="cart-bar">
        <h4 class="cart-bar__title">Cart Items - <span><?php echo $mainobj->getCartItemsCount() ?></span></h4>
        <div class="cart-bar__lists">
            <?php
            $items  = $mainobj->getCartItems();
            if (!empty($items)) :
                foreach ($items as $item) :
            ?>
                    <div class="cart-bar__item position-relative d-flex">
                        <div class="thumb">
                            <img src="assets/images/menu/<?php echo $item['img'] ?>" alt="image_not_found">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="javascript:void(0)"><?php echo $item['prdnm'] ?></a>
                            </h4>
                            <span class="price">&#8377;<?php echo $item['price'] ?></span>
                            <a href="process/removecart.php?prdnm=<?php echo $item['prdnm'] ?>" class="remove"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
        <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
            <span>Sub Total:</span>
            <span>&#8377;<?php echo $mainobj->getCartTotal(); ?></span>
        </div>
        <div class="btns d-flex align-items-center justify-content-center">
            <a href="checkout.php" class="site-btn site-btn__borderd">Checkout</a>
        </div>
    </div>
</aside>