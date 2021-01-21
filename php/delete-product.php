<?php
    session_start();
    if(isset($_GET['delSP']))
    {
        $id=$_GET['delSP'];
        if(count($_SESSION['maSP'])==1)
        {
            unset($_SESSION['maSP']);
        }
        else{
            unset($_SESSION['maSP'][$id]);
        }
    }
    header('location: ../login/cart.php');
?>