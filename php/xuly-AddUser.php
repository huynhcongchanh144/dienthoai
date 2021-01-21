<?php
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
     

    if (isset($_POST['registerbtn'])) 
    {
         
        //Lấy dữ liệu nhập vào
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $permission=addslashes($_POST['permission']);
        $con= mysqli_connect('localhost','root','18600332','ustora');
        
        if (!$password || !$username || !$permission) {
            echo "Vui lòng nhập đầy đủ Username và Password. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $password=md5($password);
        $query = mysqli_query($con,"SELECT * FROM user where username='$username'");
        if (mysqli_num_rows($query) > 0) {
            echo "Username đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }else{
            $sql="SELECT * from user ORDER BY id DESC LIMIT 1";
            $bang=mysqli_query($con,$sql);
            $dong=mysqli_fetch_array($bang);
            $id=$dong['id']+1;
            @$AddUser=mysqli_query($con,"
            INSERT INTO user (
                id,
                username,
                password,
                name,
                birthday,
                address,
                permission
            )
            VALUE (
                '{$id}',
                '{$username}',
                '{$password}',
                '{$fullname}',
                '{$birthday}',
                '{$location}',
                '{$permiss}'
            )
            ");
            if($AddUser)
            {
                header('location: ../user_account-admin.php');
            }
            else{
                echo "Thêm thất bại. <a href='../user_account-admin.php'>Trở lại</a>";
            }
        }

    }
?>