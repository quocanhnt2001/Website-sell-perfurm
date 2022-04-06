<?php include_once("data.php"); ?>

<?php
    class GetProductIndex{
        public function GetProductsIndex(){
            $sql = "SELECT * FROM products LIMIT 8";
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {$row['filter_name']}">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"> <img src={$row['pd_img']}>
                                <ul class="product__hover">
                                    <li>
                                        <form action="" method="POST">
                                            <button type="submit" name="addcart"><img src="img/icon/cart.png" alt=""></button>
                                            <input type="hidden" name="pro_id" value="{$row['pd_id']}">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{$row['pd_name']}</h6>
                                <a href="pages/shop-details.php?pd_id={$row['pd_id']}">Go To Details</a>
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