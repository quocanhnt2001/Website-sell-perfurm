<?php 
include_once("./data.php");
?>

<?php
    class ProductF{
        public function GetProductF(){
            $sql = "SELECT * FROM products" ;
            $db = new Database();
            $result= $db->select($sql);  
            return $result;
        }
    }
?>

<?php
    class ProductFeatured{
        public function ShowProductFeatured(){
            $p2 = new ProductF();
            $result = $p2->GetProductF();
            while ($row = mysqli_fetch_array($result)){
                $product1 = <<<DELIMITER
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg={$row['pd_img']}>
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                            </li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>{$row['pd_name']}</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>{$row['pd_price']} đ</h5>
                        <div class="product__color__select">
                            <label for="pc-4">
                                <input type="radio" id="pc-4">
                            </label>
                            <label class="active black" for="pc-5">
                                <input type="radio" id="pc-5">
                            </label>
                            <label class="grey" for="pc-6">
                                <input type="radio" id="pc-6">
                            </label>
                        </div>
                    </div>
                </div>
                DELIMITER;
                echo $product1;
            }
        }
    }
?>