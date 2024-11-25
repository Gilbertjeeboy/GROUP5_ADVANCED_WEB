<!DOCTYPE html>
<html>
<head>
	<title>PRIMIER LEGUE</title>
<link rel="icon" href="img/home1.jpg">
<style type="text/css">
		*
	{
		font-family: arial;
		margin: 0px;
	}
	.b ul li{
		float: right;
		margin-right: 5px;
		padding-left: 50px;
		list-style-type: none;
	}
	 .b ul
	{
		margin-right: 80px;
	}
	 .a ol li
	{
		list-style-type: none;
		float: right;
		margin-right: 70px;
	}
	.h3
	{
		float: left;
	}
	.a ol
	{
		text-align: center;
		color: blue;
		background:orange;
		height: 30px;
		padding-bottom: 20px;
	}
	.h
	{
		float: left;
	}
	.b
	{
		height: 40px;
		padding-top: 45px;
	}
	a{
		color: white;
		text-decoration: none;
		font-family: arial;
		margin-right: 50px;
	}
	a:hover
	{
		padding: 10px;
		border-radius: 5px;
		color: seagreen;
	}

	.p
	{
		padding-top: 100px;
		color: seagreen;
	}
	h3 i q
	{
		color: seagreen;
		font-size: 25px;
	}
	q
	{
		color: seagreen;
	}

	.a,.b ul
	{
		position: fixed;
		width: 100%;
	}
	.b ul
	{
		margin-top: 5px;
	}
	.b ul
	{
		background: #213432;
		color: orange;
		padding: 10px;
		margin-top: -10px;
	}
	.srv li
	{
		float: left;
	}
	.hh
	{
		float: left;
		padding-right: 260px;
	}
	.hn a
	{
		background: seagreen;
		padding: 12px;
		border-radius: 3px;
	}
	.b ul li
	{
		margin-top: -5px;
	}
	.ftr
	{
		height: 560px;
	}
	.col1,.col2,.col3,.col4
	{
		background: radial-gradient(grey,azure);
		width: 24%;
		height: 50%;
		float: left;
		margin-left: 10px;
		margin-bottom: 10px;
		text-align: center;
	}
		.col1_,.col2_,.col3_,.col4_
	{
		background: radial-gradient(grey,azure);
		width: 24%;
		height: 50%;
		float: left;
		margin-left: 10px;
		margin-bottom: 10px;
		text-align: center;
	}
	.col1 img,.col2 img,.col3 img,.col4 img,.col1_ img,.col2_ img,.col3_ img,.col4_ img
	{
		width: 100%;
		height: 70%;
	}

</style>
<body>
	<div class="a">
		<ol style="color: white;padding: 5px;">
			<li>| (782)824-186|</li>
			<li>support@primierlegue.com</li>
			<li class="h">We are open:Mon-Sat 9.00-16.00</li>
		</ol>
	</div>
	<div class="b">
		<ul>
			<li><a href="contact.html">CONTACT</a></li>
			<li class="hn"><a href="#" style="color: white;font-style: bold;font-size: 17px;">|| PRODUCTS</a></li>
						<li><a href="about.html">ABOUT</a></li>
			<li class=""><a href="../index.php"> HOME</a></li>
			<li class="h3"><h3>PRIMIER LEGUE</h3></li>
		</ul>
	
	</div><div style="text-align: center;">	<h1>Choose your product</h1></div>
	<div class="ftr" style="background: azure;">
		<div class="col1" ><img src="img/away1.jpg" > <h3>Price 5$</h3> <br>	
			<button id="p1" onclick="order()">Order</button></div>
		<div class="col2" ><img src="img/nothinghum2.jpg" > <h3>Price 5$</h3> <br>	
			<button id="p2" onclick="order()">Order</button></div>
		<div class="col3" ><img src="img/tot 3.jpg"> <h3>Price 5$</h3> <br>	
			<button id="p3" onclick="order()">Order</button></div>
		<div class="col4" ><img src="img/liverpool h.jpg"> <h3>Price 5$</h3> <br>	
			<button id="p4" onclick="order()">Order</button></div>
		<div class="col1_"><img src="img/liverpool away.jpg"> <h3>Price 5$</h3> <br	
			<button id="p5" onclick="order()">Order</button></div>
			<div class="col1_"><img src="img/man away.jpg"> <h3>Price 5$</h3> <br	
			<button id="p5" onclick="order()">Order</button></div>
			<div class="col1_"><img src="img/man city h.jpg"> <h3>Price 5$</h3> <br	
			<button id="p5" onclick="order()">Order</button></div>
		<div class="col2_"><img   src="img/home1.jpg" > <h3>Price 5$</h3> <br>	
			<button id="p6" onclick="order()">Order</button></div>
			<script type="text/javascript">
				function order()
				{
					if (confirm)
					 {
					 	alert('You are ordered sucessfuly');
					 }
				}
			</script>
	</div><div style="text-align: center;">	<button style="padding: 5px;" onclick="alert('There is no more products')">More</button></div>
		<div style="background: #111111;color: white;width: 100%;height: 60px;text-align: center;position: absolute;padding-bottom: -420px;"><br>	<br>	
		&copy;2024  <b style="color: seagreen;cursor: pointer;">PRIMIER LEGUE</b> || All right reserved
	</div>
</body>
</html>