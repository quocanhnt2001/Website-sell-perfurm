<?php 
include_once("data.php");
?>
<?php
    class ProImg{
        public function GetProImg(){
            $pro_id = $_GET['pd_id'];
            $sql = "SELECT * FROM products where pd_id='$pro_id' " ;
            $db = new Database();
            $result= $db->select($sql); 
            return $result;
        }
    }
?>

<?php
    class ShowProImg{
        public function ShowImg(){
            $p1 = new ProImg();
            $result = $p1->GetProImg();
            while ($row = mysqli_fetch_array($result)){
                $product1 = <<<DELIMITER
                    <img src={$row['pd_img']} alt="">
                DELIMITER;
                echo $product1;
            }
        }
    }
?>