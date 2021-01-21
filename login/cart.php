<?php
    session_start();
    include('../Connect/connect.php');
    $_SESSION["url"] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Details</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.php"><img src="../images/logo.png" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li>Hi,<a href=""><?php echo ($_SESSION['username']); ?></a></li>
                            <li><a href="../php/logout.php">Logout</a></li>
                            <li><a href="cart.php">My Cart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- cart items details -->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Edit</th>
                </tr>
                <?php
                    include('../include/cart-product.php');
                    $_SESSION['sosp']=$_SESSION['count'];
                ?>           
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td>Total</td>
                        <td><?php echo(number_format($_SESSION['total'])) ?> VND</td>
                    </tr>
                </table>                
            </div>
            <form action="../php/payment.php">
                    <button style='margin-left: 900px; padding: 10px'>Payment</button>
                </form>
        </div>
        <!-- footer -->
        <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="../about.html">About Us</a></li>
						<li><a href="../contact.html">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="../delivery.html">Orders and Returns</a></li>
						<li><a href="../contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="../about.html">About Us</a></li>
						<li><a href="../contact.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="../contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="../contact.html">Sign In</a></li>
							<li><a href="../index.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="../contact.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="../images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="../images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="../images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="../images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="../images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p>&copy; 2013 home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    </body>
</html>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Fraunces', serif;
}

.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}

nav{
    flex: 1;
    text-align: right;
}

nav ul{
    display: inline-block;
    list-style-type: none;
}

nav ul li{
    display: inline-block;
    margin-right: 20px;
}

a{
    text-decoration: none;
    color: #555;
}

p{
    color: #555;
}

.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}

.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

.col-2{
    flex-basis: 50%;
    min-width: 300px;
}

.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}

.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}

.btn{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}

.btn:hover{
    background: #563434;
}

.header{
    background: radial-gradient(#fff,#ffd6d6);
}

.header .row{
    margin-top: 70px;
}

.categories{
    margin: 70px 0;
}

.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}

.col-3 img{
    width: 100%;
}

.small-container{
    max-width: 1080px;
    margin:auto;
    padding-left: 25px;
    padding-right: 25px;
}

.col-4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}

.col-4 img{
    width: 100%;

}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
}
.title::after{
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform:translateX(-50%)
}
h4{
    color: #555;
    font-weight: normal;
}
.col-4 p{
    font-size: 14px;

}
.rating .fa{
    color: #ff523b;
}
.col-4:hover{
    font-size: 14px;
    transform: translateY(-5px)
}
.offer{
    background: radial-gradient(#fff,#ffd6d6);
    margin-top: 80px;
    padding: 30px 0;
}
.col-2 .offer-img{
    padding: 50px;
}
small{
    color:#555
}

.testimonial{
    padding-top: 100px;
}
.testimonial .col-3{
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.5s;
}
.testimonial .col-3 img{
    width: 50px;
    margin-top: 20px;
    border-radius: 50%;
}
.testimonial .col-3:hover{
    transform: translateY(-10px);
}
.fa.fa-quote-left{
    font-size: 34px;
    color: #ff523b;
}
.col-3 p{
    font-size: 12px;
    margin: 12px 0;
    color: #777;
}
.testimonial .col-3 h3{
    font-weight: 600px;
    color: #555;
    font-size: 16px;
}
.brands{
    margin: 100px auto;
}
.col-5{
    width: 160px;
}
.col-5 img{
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);

}
.col-5 img:hover{
    filter: grayscale(0);
}

ul{
    list-style-type: none;
}
.app-logo{
    margin-top: 20px;
}
.app-logo img{
    width: 140px;
}

.copyright{
    text-align:center;
}

.menu-icon{
    width: 28px;
    margin-left: 20px;
    display: none;
}
@media only screen and (max-width:800px){
    nav ul{
        position: absolute;
        top:70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    nav ul li{
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    nav ul li a{
        color: #fff;
    }
    .menu-icon{
        display: block;
        cursor: pointer;
    }
}

.row-2{
    justify-content: space-between;
    margin: 100px auto 50px;
}

select{
    border: 1px solid #ff523b;
    padding: 5px;
}
select:focus{
    outline: none;
}
.page-btn{
    margin: 0 auto 80px;
}
.page-btn span{
    display: inline-block;
    border: 1px solid #ff523b;
    margin-left: 10px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
}
.page-btn span:hover{
    background: #ff523b;
    color: #fff;
}

.single-product{
    margin-top: 80px;
}
.single-product .col-2 img{
    padding: 0;
}
.single-product .col-2{
    padding: 20px;
}
.single-product h4{
    margin: 20px 0;
    font-size: 22px;
    font-weight: bold;
}
.single-product select{
    display: block;
    padding: 10px;
    margin-top: 20px;
}
.single-product input{
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid #ff523b;
}
input:focus{
    outline: none;
}
.single-product .fa{
    color:#ff523b;
    margin-left: 10px;
}
.small-img-row{
    display: flex;
    justify-content: space-between;
}
.small-img-col{
    flex-basis: 24%;
    cursor: pointer;
}

.cart-page{
    margin:80px auto;
}
table{
    width: 100%;
    border-collapse: collapse;
}
.cart-info{
    display: flex;
    flex-wrap: wrap;
}
th{
    text-align: left;
    padding: 5px;
    color: #fff;
    background: #ff523b;
    font-weight: normal;
}
td{
    padding: 10px 5px;
}
td input{
    width: 40px;
    height: 30px;
    padding: 5px;
}
td a{
    color: #ff523b;
    font-size: 12px;
}
td img{
    width: 80px;
    height: 80px;
    margin-right: 10px;
}
.total-price{
    display: flex;
    justify-content: flex-end;
}

.total-price table{
    border-top: 3px solid #ff523b;
    width: 100%;
    max-width: 350px;
}
td:last-child{
    text-align: right;
}
th:last-child{
    text-align: right;
}

@media only screen and (max-width:600px){
    .row{
        text-align: center;
    }
    .col-2,.col-3,.col-4{
        flex-basis:100%;
    }
    .single-product .row{
        text-align: left;
    }
    .single-product .col-2{
        padding: 20px 0;
    }
    .single-product h1{
        font-size: 26px;
        line-height: 26px;
    }
    .cart-info p{
        display:none;
    }
}

/*account - page*/
.account-page{
    padding:50px 0;
    background: radial-gradient(#fff,#ffd6d6);
}
.form-container{
    background: #fff;
    width: 300px;
    height: 600px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    overflow: hidden;
}

.form-container span{
    font-weight: bold;
    padding: 0 10px;
    color:#555;
    cursor:pointer;
    width: 100px;
    display: inline-block;

}  
.form-btn{
    display: inline-block;
}

.form-container form{
    max-width: 300px;
    padding:0 20px;
    position: absolute;
    top:80px;
    transition: transform 1s;
    
}

form .btn{
    width: 100%;
    border: none;
    cursor: pointer;
    margin: 10px 0;
}

form .btn:focus{
    outline:none;
}

#LoginForm{
    left:-300px;
}
#RegForm{
    left:0;
}
form a {
    font-size: 12px;
}
#Indicator{
    width:100px;
    border: none;
    background: #ff523b;
    height: 3px;
    margin-top: 8px;
    transform:translateX(100px);
    transition: transform 1s;
}
  .form-control {
    width: 260px;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
    border-radius: 30px;
  }
  
  .form-control:hover {
    border-color: #1ac7b6;
  }
  
  .form-group.invalid .form-control {
    border-color: #f33a58;
  }
  
  .form-group.invalid .form-message {
    color: #f33a58;
  }
  
  .form-message {
    padding-left: 5px;
    font-size: 10px;
    text-align: left;
  }

  .search-box{
    margin-top: 10px;
    margin-bottom: -50px;
    width: 100%;
    text-align: center;
    height: 40px;
  }
  .search-btn{
      color:#ff523b;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 20px;
  }
  .search-txt{
      border: 1px solid #ff523b;
      border-radius: 30px;
      font-size: 20px;
      padding-left: 5px;
      font-weight: normal;
      color: #555;
  }
</style>