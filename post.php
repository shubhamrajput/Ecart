<?php
session_start();
if(!isset($_SESSION['user_id'])){require('login_tools.php');
load();
}
$page_title='Post Message';
?>
<html>
<body style=background-image:url('image/image.jpg');background-repeat:no-repeat>
<center>
	<h2>Message</h2>
<form action="post_action.php" method="POST" accept-charset="utf-8">
<p>Subject:<br>
<input type="text" style="height:40px;border-radius:30px;box-shadow:0px 0px 15px #0000CC inset"name="subject" size="70"></p>
<p>Message:<br>
<textarea name="message" style="box-shadow:0px 0px 15px #0000CC inset"rows="5" cols="50">
</textarea></p>
<p><input type="submit" style="background-color:#006; height:20px;width:150px;color:red;font-size:28px; height:50px; width:90px"value="Submit"></p>
</form>
<p>
<a href="forum.php">Forum</a>|
<a href="shop.php">Shop</a>|
<a href="home.php">Home</a>|
<a href="goodbye.php">Logout</a></p>
</center>
</html>
</body>


