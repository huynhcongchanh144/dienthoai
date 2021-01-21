<?php
    if (session_id() == '') {
        session_start();
    }
    if($_SESSION['maSP']==false)
    {
        $_SESSION['maSP']=array();
    }
    if(isset($_GET['MaSp']))
    {
        
        $id=$_GET['MaSp'];
        if(count($_SESSION['maSP'])==0) 
        {            
           $_SESSION['maSP'][count($_SESSION['maSP'])]=$id;
        }       
        else if(count($_SESSION['maSP'])>0)
        {               
                $_SESSION['maSP'][count($_SESSION['maSP'])]=$id;               
        }
                $total=0;
                $_SESSION['count']=0;
                for($i=0;$i<count($_SESSION['maSP']);$i++)
                {
                    $id=$_SESSION['maSP'][$i];
                    $sql="SELECT * FROM `products` WHERE product_id=$id";
                    $bang = connect::ExecuteQuery($sql);
                    $dong=mysqli_fetch_array($bang);
                    $total=$total+intval($dong['product_price']);
                    $src="../images/".$dong["product_image"];
                    $_SESSION['sp'.$i]=array();
                    array_push($_SESSION['sp'.$i],$dong['product_id'],$dong['product_name'],1,$dong['product_price']);
                    $_SESSION['count']++;
                ?>
                    <tr>
                        <td> <div class="cart-info">
                            <img style="width: 60px;height: 70px" src=<?php echo($src) ?>>
                            <div>
                                <p><?php echo($dong['product_name']) ?></p>
                            </div>
                        </div>
                        </td>                       
                        <td style="vertical-align: middle;"><p style="padding-left: 30px">1</p></td>
                        <td style="vertical-align: middle;"><?php echo(number_format($dong['product_price'])) ?> VND</td>
                        <td style="vertical-align: middle;"><a href="../php/delete-product.php?delSP=<?php echo($dong['product_id']) ?>">Remove</a></td>
                    </tr>
                <?php
                }
                $_SESSION['total']=$total;
    }
    else{
                $total=0;
                for($i=0;$i<count($_SESSION['maSP']);$i++)
                {
                    $id=$_SESSION['maSP'][$i];
                    $sql="SELECT * FROM `products` WHERE product_id=$id";
                    $bang = connect::ExecuteQuery($sql);
                    $dong=mysqli_fetch_array($bang);
                    $total=$total+intval($dong['product_price']);
                    $src="../images/".$dong["product_image"];
                ?>
                    <tr>
                        <td> <div class="cart-info">
                            <img  src=<?php echo($src) ?>>
                            <div>
                                <p style="padding-top: 20px"><?php echo($dong['product_name']) ?></p>
                            </div>
                        </div>
                        </td>                        
                        <td style="vertical-align: middle;"><p style="padding-left: 30px">1</p></td>
                        <td style="vertical-align: middle;"><?php echo(number_format($dong['product_price'])) ?> VND</td>
                        <td style="vertical-align: middle;"><a href="../php/delete-product.php?delSP=<?php echo($dong['product_id']) ?>">Remove</a></td>
                    </tr>
                <?php
                }
                $_SESSION['total']=$total;
    }
    
?>