<?php
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
     

    if (isset($_POST['addbtn'])) 
    {
         
        //Lấy dữ liệu nhập vào
        $codecategory = addslashes($_POST['codecategory']);
        $namecategory = addslashes($_POST['namecategory']);
        $con= mysqli_connect('localhost','root','18600332','ustora');
        
        if (!$codecategory || !$namecategory) {
            echo "Vui lòng nhập đầy đủ tên loại và mã loại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $query = mysqli_query($con,"SELECT * FROM categories where cat_id=$codecategory");
        if (mysqli_num_rows($query) > 0) {
            echo "Loại hàng đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }else{
            @$AddCategory=mysqli_query($con,"
            INSERT INTO categories (
                cat_id,
                cat_name
            )
            VALUE (
                '{$codecategory}',
                '{$namecategory}'              
            )
            ");
            if($AddCategory)
            {
                header('location: ../category-admin.php');
            }
            else{
                echo "Thêm thất bại. <a href='../category-admin.php'>Trở lại</a>";
            }
        }

    }
?>