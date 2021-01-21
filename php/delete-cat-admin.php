<?php
    include('../Connect/connect.php');   
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="DELETE FROM categories WHERE cat_id=$id";
        $result=connect::ExecuteQuery($sql);
        if($result)
        {
            header('location: ../category-admin.php');
        }
        else{
            echo "Xóa thất bại. <a href='../category-admin.php'>Trở lại</a>";
        }
    }
?>