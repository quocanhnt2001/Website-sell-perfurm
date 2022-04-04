<?php
include("../common/document_head.html");
?>
<body>
    <?php
    include("./common/header-menu.html");
    ?>

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact us</h2>
                            <p>If you have any comments, always appreciate, please contact us.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Việt Nam</h4>
                                <p>140 Điện Biên Phủ, Phường 17, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php
    include("./common/document_footer.html");
    include("common/footer.html");
    ?>
</body>

</html>