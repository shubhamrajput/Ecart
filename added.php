<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  require('login_tools.php');
	  load();

}
$page_title="Cart Addition";
//include('includes/header.php');
if(isset($_GET['id']))$id=$_GET['id'];
require('connection.php');
$q="select * from shop where item_id=$id";
$r=mysqli_query($dbc,$q);
if(mysqli_num_rows($r)==1)
{

$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
if(isset($_SESSION['cart'][$id]))
{
	 $_SESSION['cart']['$id']['quantity']++;
	 echo '<p><h1>Another '.$row["item_name"].
	 '  has been added to your cart</p>';
	}
	else
	{
      $_SESSION['cart'][$id]=array('quantity'=>1,'price'=>$row['item_price']);
      echo '<p><h1>A '.$row["item_name"].
      ' has been added to your cart</p>';
	}
}
mysqli_close($dbc);
echo '<p><a href="shop.php">Shop</a>|
<a href="cart.php">View Cart</a>|
<a href="home.php">Home</a>|
<a href="goodbye.php">Logout</a></p>';
?>