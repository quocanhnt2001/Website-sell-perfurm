<?php
include("../common/document_head.html");
?>
<body>
    <?php
    include("../common/header-menu.php");
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        include('../data/cart-item.php');
                                        $newpdcart = new ProductsCart();
                                        $newpdcart -> ShowProductsCart();
                                            if(isset($_SESSION['cart'])){
                                                $amount = $_POST['amount'];
                                                
                                            } 
                                                                                  
                                        require('../data/removecart.php');
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="pages/shop.php">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="pages/shopping-cart.php"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <?php
                            if(isset($_SESSION['cart'])){
                                echo "<li>Items<span> $count</span></li>";
                                echo "<li>Subtotal <span> 9.850.000đ</span></li>";
                                echo "<li>Total <span> 9.850.000đ</span></li>";
                            }else{
                                echo "<li>Items<span>0</span></li>";
                            }
                            ?>
                        </ul>
                        <a href="pages/checkout.php" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <?php
    include("../common/document_footer.html");
    include("../common/footer.html");
    ?>
</body>

</html>