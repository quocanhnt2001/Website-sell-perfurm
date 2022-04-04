<?php 
include_once("data.php");
?>
<?php
    class ProInfo{
        public function GetProInfo(){
            $pro_id = $_GET['pd_id'];
            $sql = "SELECT * FROM products where pd_id='$pro_id' " ;
            $db = new Database();
            $result= $db->select($sql); 
            return $result;
        }
    }
?>

<?php
    class ShowProInfo{
        public function ShowInfo(){
            $p1 = new ProInfo();
            $result = $p1->GetProInfo();
            while ($row = mysqli_fetch_array($result)){
                $product1 = <<<DELIMITER
                <h4>{$row['pd_name']}</h4>
                <h3>{$row['pd_price']} ₫</h3>
                <p>{$row['pd_detail']}</p>
                DELIMITER;
                echo $product1;
            }
        }
    }
?>