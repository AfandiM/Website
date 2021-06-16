<?php
if (isset($_POST['clear'])){
    session_start();
    unset($_SESSION['cartItems']);
    header("Location:P4_cartPage.php");
}
?>