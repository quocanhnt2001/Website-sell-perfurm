<?php
include("./common/document_head.html");
?>
<body>
    <?php
    include("./common/header-menu.php");
    ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Perfume Collections</h2>
                                <p>A specialist label creating luxury essentials.Reputable products and 100% genuine guarantee.</p>
                                <a href="pages/shop.php" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Perfume Collections</h2>
                                <p>A specialist label creating luxury essentials.Reputable products and 100% genuine guarantee.</p>
                                <a href="pages/shop.php" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-1.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Male Collections</h2>
                            <a href="pages/shop.php?category=2">Shop now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-3.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Female Collections</h2>
                            <a href="pages/shop.php?category=3">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Recommend</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                    <?php
                        include('data/getpro-index.php');
                        $newpdindex = new ProductsIndex();
                        $newpdindex -> ShowProductsIndex();
                        require('data/addcart.php');

                    ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    
    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.png"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.png"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.png"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.png"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.png"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.png"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>"Ladies, a man will never remember your handbag, but he will remember your perfume."</p>
                        <h3>#DAD_Perfume</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Trend</span>
                        <h2>Summer trend</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <h5>Cool</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <h5>Generous</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <h5>Lightly</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <?php
    include("./common/document_footer.html");
    include("common/footer.html");
    ?>
</body>

</html>