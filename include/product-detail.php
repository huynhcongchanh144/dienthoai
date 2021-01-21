<?php 
    include('./Connect/connect.php'); 
    $idProduct=$_GET['id'];
    $sql="SELECT * FROM `products` where product_id=$idProduct";
    $bang = connect::ExecuteQuery($sql);
    $dong=mysqli_fetch_array($bang);
    $src="./images/".$dong["product_image"];

    $sql1="SELECT * from categories c,products p where p.product_id=$idProduct and p.product_cat=c.cat_id";
    $bang1= connect::ExecuteQuery($sql1);
    $dong1=mysqli_fetch_array($bang1);
    ?>
    <div class="content">
    <div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> >>>> <a href="index.php?act=Category&id=<?php echo($dong1['cat_id']) ?>"><?php echo($dong1['cat_name']) ?></a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
                <div class="section group">
                <div class="cont-desc span_1_of_2">
                <div class="product-details">				
                <div class="grid images_3_of_2">
                    <div id="container">
                        <div id="products_example">
                            <div id="products">
                            <div class="slides_container">
                                <a href="#" target="_blank"><img src=<?php echo($src) ?> alt=" " /></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="desc span_3_of_2">
                <h2><?php echo($dong['product_name']) ?></h2>					
                <div class="price">
                    <p style="display:inline">Viewer: <?php echo($dong['product_viewer']) ?></p> <img src="./images/viewer.svg" alt="">
                    <p>Quantity: <?php echo($dong['Quantity_sold']) ?></p>
                    <p>Producer: <?php echo($dong['product_producer']) ?></p>
                    <p>Origin: <?php echo($dong['product_origin']) ?></p>   
                    <p>Price: <span class="price"><?php  echo(number_format($dong['product_price'])) ?> VND</span></p>                   
                </div>
				<div class="share-desc">
					<div class="button"><span><a href="../dienthoai/login.php">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Details</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p><?php echo($dong['product_desc']) ?></p>
				</div>
			</div>
		 </div>
	 </div>
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default',         
            width: 'auto', 
            fit: true  
        });
    });
   </script>		
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
       <?php
        $cat=$dong['product_cat'];
        $sanphamcungloai="SELECT * FROM products where product_cat=$cat ORDER BY RAND() LIMIT 5";
        $bangSPCL = connect::ExecuteQuery($sanphamcungloai);
        ?>
            <div class="section group">
            <?php
                while($dongSPCL=mysqli_fetch_array($bangSPCL))
                {
                 $srcSPCL="./images/".$dongSPCL["product_image"];
                 ?>
                <div class="product">
                <?php
                        ?>                           
                            <a href="./preview.php?id=<?php echo($dongSPCL['product_id']) ?>"><img src=<?php echo $srcSPCL ?> alt=""></a>   
                            <h2><?php echo $dongSPCL["product_name"] ?></h2>
                            <div class="price-details">
				            <div class="price-number">
							<p><span class="rupees"></span><?php echo(number_format($dongSPCL['product_price'])) ?> đồng</p>
					        </div>
					       		<div class="add-cart">								
									<h4><a href="./preview.php?id=<?php echo($dongSPCL['product_id']) ?>">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					        </div>
                        <?php					    
                    ?>
				</div>
            <?php
        }
       ?>

            </div>
        
				


    
        
    <?php

    //Cập nhật lượt view
    $view=$dong['product_viewer'];
    $update="UPDATE products SET product_viewer=$view+1 WHERE product_id=$idProduct";
    connect::ExecuteQuery($update);
?>

<style>
    .slides_container img{
        width: 250px;
        height: 250px;
    }

    .price img{
        width: 15px;
        height: 15px;
        margin-top: 3px;
    }

    .product img{
        width: 200px;
        height: 199px;
    }

    .product{
        width: 220px;
        height: 270px;
        margin: 10px;
        float: left;
        margin-right: 20px;
        margin-bottom: 70px;
        text-align:center;
        border: 1px solid #ebe8e8;
    }

    .product h2{
        font-size: 14px;
        color: blue
    }

</style>
