<?php
session_start();
 if(!isset($_SESSION['user_id']))
{
	  require('login_tools.php');
	  load();

}
$page_title='Ecart';
//include('includes/header.php');

echo "<h1>Home</h1>
<p>You are logged In,
{$_SESSION['first_name']}   {$_SESSION['last_name']}
</p>
<html>
	<head>
	<title>Ecart</title>

</head>
<body style=background-image:url('image/image2.jpg');background-repeat:no-repeat>
<p>
<a  href=\"forum.php\"><h1>Forum</h1></a>|

<a href=\"shop.php\"><h1>Shop</h1></a>|

 <a href=\"goodbye.php\"><h1>Logout</h1></a></p>
 <div style=\"float:right\"><img src=\"image\sale1.png\" width=200 height=200></div>

 <p><h1 style=\"color:red\">Welcome to e-Cart. You are just a click away for a unique online shopping experience .Online shopping destination for branded and genuine Mobiles, Tablets, Laptops, Perfumes, Watches, apparels, shoes, Tshirts, Belts, Accessories, Electronics ...</h1></p>

</body>
	</html>";
	?>
