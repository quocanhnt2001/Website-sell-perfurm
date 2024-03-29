   <?php
   session_start();
   ?>
   <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
    -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">      
                            <?php 
                                if(isset($_SESSION['id']) && $_SESSION['id'] != NULL){?>
                                    <p> Hello, <?php echo $_SESSION['idname']; ?>. Welcome to DAD Perfume </p><?php
                                }else {?>
                                    <p> You need to Sign In </p> <?php
                                }
                            ?>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                            <?php 
                                if(isset($_SESSION['id']) && $_SESSION['id'] != NULL){?>
                                    <a href="../Website-ecommerce/data/logoutprocess.php">Sign out</a><?php
                                }else {?>
                                    <a href="./common/login.php">Sign in</a> <?php
                                }
                            ?>
                                
                            </div>
                            <div class="header__top__hover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./pages/shop.php">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="./pages/shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="./pages/checkout.php">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./pages/blog.php">Blog</a></li>
                            <li><a href="./pages/about.php">About Us</a></li>
                            <li><a href="./pages/contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <ul>
                            <li><a href="#" class=""><img src="img/icon/search.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="./pages/shopping-cart.php"><img src="img/icon/cart.png" alt=""> 
                                <?php
                                    if(isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<span id=\"cart_count\">$count</span>";
                                    }else{
                                        echo "<span id=\"cart_count\">0</span>";
                                    }
                                ?>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->