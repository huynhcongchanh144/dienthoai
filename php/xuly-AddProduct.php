<?php
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
     

    if (isset($_POST['registerbtn'])) 
    {
         
        //Lấy dữ liệu nhập vào
        $nameproduct = addslashes($_POST['nameproduct']);
        $description = addslashes($_POST['description']);
        $con= mysqli_connect('localhost','root','18600332','ustora');
        
        if (!$nameproduct || !$description) {
            echo "Vui lòng nhập đầy đủ thông tin hàng hóa. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $query = mysqli_query($con,"SELECT * FROM products WHERE product_name=$nameproduct");
        if (mysqli_num_rows($query) > 0) {
            echo "Loại hàng đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }else{
            @$AddProduct=mysqli_query($con,"
            INSERT INTO products (
                product_name,
                product_desc
            )
            VALUE (
                '{$nameproduct}',
                '{$description}'                      
            )
            ");
            if($AddProduct)
            {
                header('location: ../product-admin.php');
            }
            else{
                echo "Thêm thất bại. <a href='../product-admin.php'>Trở lại</a>";
            }
        }

    }
?>