<?php
session_start();
if(!isset($_SESSION['user_id'])){require('login_tools.php');
load();
}
$page_title='CheckOut';
//include('includes/header.php');
if(isset($_GET['total'])&&($_GET['total']>0)&&(!empty($_SESSION['cart'])))
{
   require('connection.php');
    $q="insert into orders(user_id,total,order_date)values("
    	.$_SESSION['user_id'].",".$_GET['total'].",NOW())";
$r=mysqli_query($dbc,$q);
$order_id=mysqli_insert_id($dbc);
$q="select * from shop where item_id in(";
	foreach ($_SESSION['cart'] as $id=>$value)
		{$q.=$id.',';}
	$q=substr($q,0,-1).') order by item_id ASC';
$r=mysqli_query($dbc,$q);
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
{
	$query="insert into order_contents
	(order_id,item_id,quantity,price)
	values($order_id,".$row['item_id'].",".
    $_SESSION['cart'][$row['item_id']]['quantity'].",".
    $_SESSION['cart'][$row['item_id']]['price'].")";
$result=mysqli_query($dbc,$query);
}
mysqli_close($dbc);
echo "<center><p style=\"color:skyblue\">Thanks For Your Order.
      Your Order Number Is#".$order_id."</p></center>";
      $_SESSION['cart']=NULL;
}
else
{
	echo '<p><h1><center>There Are No Items In Your Cart.</center></h1></p>';
}
 echo '<center><p><a href="shop.php">Shop</a>|
     
     <a href="forum.php">Forum</a>|
     <a href="home.php">Home</a>|
     <a href="goodbye.php">LogOut</a></p></center>';
    ?>
    <html>
     <body style=background-image:url('image/image2.jpg');background-repeat:no-repeat>
   </body>
   </html>