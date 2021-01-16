<?php
	if(isset($_GET["id"]) == false)
		connect::ChangeURL("index.php");
	
	$id = $_GET["id"];
	$sql = "SELECT * FROM categories WHERE cat_id = $id";
	$bang = connect::ExecuteQuery($sql);
	$dong = mysqli_fetch_array($bang);
	if($dong == null)
		connect::ChangeURL("index.php");
?>
<div class="content_top" style="background-color:#383838">
<div class="heading">
    <h3 style="color: white">Sản phẩm <?php echo $dong["cat_name"]; ?></h3>
    	</div>
    		<div class="see">
    			<p><a style="color: white" href="products.php">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	    <div class="section group">
            <?php
                $sql = "SELECT * FROM products WHERE product_cat = $id";
                $bang = connect::ExecuteQuery($sql);
                while($dong = mysqli_fetch_array($bang))
                {
                    $src="./images/".$dong["product_image"];
                    ?>
                        <div class="product">
                            <?php
                                    ?>                           
                                        <a href="./preview.php?id=<?php echo($dong['product_id']) ?>"><img src=<?php echo $src ?> alt=""></a>   
                                        <h2 id="product-name"><?php echo $dong["product_name"] ?></h2>                                                      
                                        <div class="price-details">
                                        <div class="price-number">
                                        <p><span class="rupees"></span><?php echo(number_format($dong['product_price'])) ?> đồng</p>
                                        </div>
                                            <div class="add-cart">								
                                                <h4><a href="preview.html">Add to Cart</a></h4>
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
</div>
				

                <style>
    .product img{
        width: 200px;
        height: 199px;
    }

    .product{
        width: 250px;
        height: 300px;
        float: left;
        margin: 10px;
        margin-right: 20px;
        text-align:center;
        border: 1px solid #ebe8e8;
    }

    .product h2{
        font-size: 14px;
        color: blue
    }
</style>