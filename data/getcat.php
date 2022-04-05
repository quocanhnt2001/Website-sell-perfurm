<?php include_once("data.php"); ?>
<?php
    class GetCategory{
        private $cat_list=null;
        public function GetAllCategories(){
          if($this->cat_list == null){
            $sql = "SELECT * FROM category";
            $db = new Database();
            $this->cat_list= $db->select($sql);
          }  
            return $this->cat_list;
        }
    }
?>

<?php
    class ShowCategory{
        public function ShowAllCategories(){
            $cb = new GetCategory();
            $result = $cb->GetAllCategories();
            $count = 1;
            while ($row = mysqli_fetch_array($result)){
                $category = <<<DELIMITER
                        <li><a href="../Website-ecommerce/pages/shop.php?category={$count}">{$row['cat_name']}</a></li>
                DELIMITER;
                echo $category;
                $count ++;
            }
        }

        /*public function SetStyleForCurrentCategory($count){
            $cat_id= $this->GetCategory();
            $style;
            if ($count == $cat_id){
                $style = "style='color:#446218'";
                return $style;
            }
        }*/

        public function GetCategory(){
            $cat_id;
            if (!isset($_GET['category']))
                $cat_id = 1;
            else
                $cat_id = $_GET['category'];
            return $cat_id;
        }
    }
?>