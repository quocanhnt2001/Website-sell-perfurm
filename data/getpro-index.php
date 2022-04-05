<?php include_once("data.php"); ?>

<?php
    class GetProductIndex{
        public function GetProductsIndex(){
            $sql = "SELECT * FROM products";
            $db = new Database();
            $result= $db->select($sql);
            return $result;
        }
    }
?>

<?php
    class ProductsIndex{
        public function ShowProductsIndex(){
            $pdi = new GetProductIndex();
            $result = $pdi->GetProductsIndex();
            while ($row = mysqli_fetch_array($result)){
                $product = <<<DELIMITER
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg={$row['pd_img']}>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{$row['pd_name']}</h6>
                                <a href="pages/shop-details.php">Go To Details</a>
                                <h5>{$row['pd_price']}₫</h5>
                            </div>
                        </div>
                    </div>
                DELIMITER;
                echo $product;
            }
        }
    }
?>