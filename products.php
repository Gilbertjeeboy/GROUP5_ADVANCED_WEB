<!DOCTYPE html>
<html>
<head>
	<title>MIXED MARKERTING-ELECTRONICS</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<header>
		<ol>
			<li>| (782)824-186|</li>
			<li>| support@mixedmarketing.com</li>
			<li class="h">We are open: Mon-Sat 9.00-16.00</li>

		</ol>
</header>
<nav>
	<ul>	
		<li class="logo"><h3>MIXED MARKETING</h3></li>
		<li><a href="index.php">HOME</a></li>
		<li class="hm"><a href="products.php">PRODUCTS</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li class="hnn"><a href="contact.php"> CONTACT</a></li>
			<div class="cart">
				<label id="cart"></label>
			</div>
			
		</ul>
</nav>
<main class="product">
		<div class="col1" >
			<img src="img/laptop.jpg" > 
			<label for="Quantity">mac book laptop i5 500GB HDD</label><input type="number" placeholder="Choose number of price" class="pquantity" autocomplete="" id="pqty1" min="0">
			Price 1$ 
			<button id="p1" onclick="cart()">Add to cart</button>
		</div>
		<div class="col2" >
			<img src="img/drone.jpg" > 
			<label for="Quantity">Drone with camera and their accesories 48h battery life</label><input type="number" placeholder="Choose number of price" class="pquantity" id="pqty2" min="0">
			Price 2$ 	
			<button id="p2" onclick="cart()">Add to cart</button>
		</div>
		<div class="col3" >
			<img src="img/laptop3.jpg">
		<label for="Quantity">Mac book pro 256GB SSD</label> <input type="number" placeholder="Choose number of price" class="pquantity" id="pqty3" min="0">
			Price 3$ 	
			<button id="p3" onclick="cart()">Add to cart</button>
		</div>
		<div class="col4" >
			<img src="img/camera.jpg">
			<label for="Quantity">Nikon camera with 2789mm lens for low price</label><input type="number" placeholder="Choose number of price" class="pquantity" id="pqty4" min="0">
			 Price 4$ 	
			<button id="p4" onclick="cart()">Add to cart</button>
		</div>
		<div class="col1_">
			<img src="img/phone.jpg">
			<label for="Quantity">Quantity</label><input type="number" placeholder="Choose number of price" class="pquantity" id="pqty5" min="0">
			 Price 5$
			<button id="p5" onclick="cart()">Add to cart</button>
		</div>
		<div class="col2_">
			<img   src="img/cam2.jpg" >
			<label for="Quantity">Quantity</label> <input type="number" placeholder="Choose number of price" class="pquantity" id="pqty6" min="0">
			Price 6$ 	
			<button id="p6" onclick="cart()">Add to cart</button>
		</div>
		<div class="col3_">
			<img src="img/charger.jpg" > 
			<label for="Quantity">Quantity</label><input type="number" placeholder="Choose number of price" class="pquantity" id="pqty7" min="0">
			Price 8$ 
			<button id="p7" onclick="cart()">Add to cart</button>
		</div>
		<div class="col4_">
			<img src="img/laptop5.jpg" >
			<label for="Quantity">Quantity</label><input type="number" placeholder="Choose number of price" class="pquantity" id="pqty8" min="0">
			 Price 9$
			<button id="p8" onclick="cart()">Add to cart</button>
		</div>
<script src="scripts/script.js"></script>
</main>
<footer>
			<br>
		&COPY;2024  <b style="color: seagreen;cursor: pointer;">MIXED MARKETING</b> || All right reserved
</footer>
</body>
</html>