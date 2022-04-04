<?php include_once("data.php"); ?>
<?php
    class GetProduct{
        public function GetAllProducts(){
            $sql = "SELECT * FROM products";
            $db = new Database();
            $result= $db->select($sql);
            return $result;
        }
    }
?>

<?php
    class Products{
        public function ShowProducts(){
            $pd = new GetProduct();
            $result = $pd->GetAllProducts();
            while ($row = mysqli_fetch_array($result)){
                $product = <<<DELIMITER
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"> <img src={$row['pd_img']}>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{$row['pd_name']}</h6>
                            <a href="pages/shop-details.php?pd_id={$row['pd_id']}">Go To Details</a>
                            <h5>{$row['pd_price']} đ</h5>
                        </div>
                    </div>
                </div>
                DELIMITER;
                echo $product;
            }
        }
    }
?>