<?php include_once("data.php"); ?>

<?php
    class GetProductCart{
        public function GetProductsCart(){
            $sql = "SELECT * FROM products";
            $db = new Database();
            $result= $db->select($sql);
            return $result;
        }
    }
?>

<?php
    class ProductsCart{
        public function ShowProductsCart(){
            if(isset($_SESSION['cart'])){
                $product_id = array_column($_SESSION['cart'], "product_id");
                $pdc = new GetProductCart();
                $result = $pdc->GetProductsCart();
                while ($row = mysqli_fetch_assoc($result)){
                    foreach($product_id as $id){
                        if($row['pd_id']== $id){
                            $product = <<<DELIMITER
                            <form action="pages/shopping-cart.php?action=remove&id={$row['pd_id']}" method="post" class="cart-item"  >
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src={$row['pd_img']} width="150px" height="150px" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{$row['pd_name']}</h6>
                                            <h5>{$row['pd_price']} đ</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" name="quantily" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">{$row['pd_price']} đ</td>
                                    <input type="hidden" name="pd_price" value="{$row['pd_price']}">
                                    <td class="cart__close"><button type="submit" name="remove"><i class="fa fa-close"></i></button></td>
                                </tr>
                            </form>
                            DELIMITER;
                            echo $product;
                        }
                    }
                }  
            }else{
                $product = <<<DELIMITER
                <tr>
                    <td class="product__cart__item">
                        <div class="product__cart__item__pic">
                            <img src="" width="150px" height="150px" alt="" hidden>
                        </div>
                        <div class="product__cart__item__text">
                            <h6>Cart is empty</h6>
                            <h5>Go back to shop</h5>
                        </div>
                    </td>
                    <td class="quantity__item" hidden>
                        <div class="quantity">
                            <div class="pro-qty-2">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </td>
                    <td class="cart__price" hidden></td>
                    <td class="cart__close" hidden><button type="submit" name="remove"><i class="fa fa-close"></i></button></td>
                </tr>
                DELIMITER;
                echo $product;
            }
        }
    }
?>