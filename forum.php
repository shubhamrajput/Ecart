<?php
session_start();
if(!isset($_SESSION[user_id]))
{
	  require('login_tools.php');
	  load();

}
$page_title='Forum';
//include('includes/header.php');
require('connection.php');

$q="select * from forum";
$r=mysqli_query($dbc,$q);

if(mysqli_num_rows($r)>0)
{
  echo '<center><table><tr><th><h1>Posted By|</h1></th>
  <th><h1>Subject|</h1></th><th id="msg"><h1>Message</h1></th></tr></center>';
  while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
  {
  	echo '<tr style="color:red">
  	<td><h1>'.$row['first_name'].'</h1><h1>'.$row['last_name'].',<br><h1>'.$row['post_date'].'</td>
  	<td><h1>'.$row['subject'].'</h1></td><td><h1>'.$row['message'].'</h1></td>
  	</tr>';
  }
  echo '</table>';
}
else
{
	echo '<p>There are currently no messages.</p>';
}
echo '<p><a href="post.php">Post Message</a>|
<a href="shop.php">Shop</a>|
<a href="home.php">Home</a>|
<a href="goodbye.php">Logout</a></p>';
mysqli_close($dbc);
?>
<html>
<body style=background-image:url('image/image2.jpg');background-repeat:no-repeat>

</html>
</body>
