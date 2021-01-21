<?php
    // Chưa xong
    session_start();
    include("../Connect/connect.php");
    for($i=0;$i<$_SESSION['sosp'];$i++)
    {
        $masp=$_SESSION['sp'.$i][0];
        $tensp=$_SESSION['sp'.$i][1];
        $giasp=$_SESSION['sp'.$i][2];
        $sql="UPDATE ct_hoadon SET mahd=1,masp=$masp,tensp=$tensp,soluong=1,giasp=$giasp";
        connect::ExecuteQuery($sql);
    }
    echo("Thanh toán xong");
?>