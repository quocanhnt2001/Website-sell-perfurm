<?php
    if(isset($_POST['addcart'])){
        if(isset($_SESSION['cart'])){
            
            $item_array_id = array_column($_SESSION['cart'], "product_id");

            if(in_array($_POST['pro_id'], $item_array_id)){
                echo "<script>alert('Product already added in the cart')</script> ";
                echo "<script>
                            window.onload = function() {
                                if(!window.location.hash) {
                                    window.location = window.location + '#loaded';
                                    window.location.reload();
                                }
                            }
                    </script> ";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['pro_id']
                );
                $_SESSION['cart'][$count]= $item_array;
                print_r($_SESSION['cart']);
            }

        }else{
          $item_array = array(
             'product_id' => $_POST['pro_id']
            );
        // Create new session variable
          $_SESSION['cart'][0] = $item_array;
          print_r($_SESSION['cart']);
        }
        echo "<script>
                window.onload = function() {
                    if(!window.location.hash) {
                        window.location = window.location + '#loaded';
                        window.location.reload();
                    }
                }
            </script> ";

    }
?>