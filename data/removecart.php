<?php
    if(isset($_POST['remove'])){
        if($_GET['action']=='remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value["product_id"] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been removed')</script>";
                    echo "<script>
                            window.onload = function() {
                                if(!window.location.hash) {
                                    window.location = window.location + '#loaded';
                                    window.location.reload();
                                }
                            }
                    </script> ";
                }
            }
        }
    }
?>