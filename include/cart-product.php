<?php
    if(isset($_GET['MaSp']))
    {
        $id=$_GET['MaSp'];
        $_SESSION['maSP']=array();
        if(count($_SESSION['maSP'])==0) 
        {            
           $_SESSION['maSP'][count($_SESSION['maSP'])]=$id;
        }       
        if(count($_SESSION['maSP'])>0)
        {               
                  $_SESSION['maSP'][count($_SESSION['maSP'])]=$id;
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
                            <img src=<?php echo($src) ?>>
                            <div>
                                <p><?php echo($dong['product_name']) ?></p>
                            </div>
                        </div>
                        </td>                        <td>1</td>
                        <td><?php echo(number_format($dong['product_price'])) ?> VND</td>
                        
                    </tr>
                <?php
                }
                $_SESSION['total']=$total;
        }
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
                            <img src=<?php echo($src) ?>>
                            <div>
                                <p><?php echo($dong['product_name']) ?></p>
                            </div>
                        </div>
                        </td>                        <td>1</td>
                        <td><?php echo(number_format($dong['product_price'])) ?> VND</td>
                        
                    </tr>
                <?php
                }
                $_SESSION['total']=$total;
    }
    
?>