<?php
session_start();
if(!isset($_SESSION['user_id'])){require('login_tools.php');
load();
}
$page_title='Goodbye';
$_SESSION=array();
session_destroy();
echo '<h1>Goodbye!</h1>
<p><h1 style="color:red">You are logged out.</h1></p>
<p><a href="login.php"><h1>Login</h1></a></p>';
?>
<html>
<body style= "background-image:url('image/b.jpg');background-repeat:repeat">
	<table align=center>
<tr><td colspan=2 nowrap align=center>
	<hr>&nbsp;
	<marquee direction="right" height="125" scrolldelay="300" scrollamount="10" behavior="alternate" loop="0" style="font-family:Verdana;font-size:13px;text-decoration:none;color:#FFFFFF;background-color:transparent;" id="Marquee2"><img src="image/log.png">&nbsp;&nbsp;</marquee>
	<hr><br><br><br><br>
	</td></tr>

	</html>
</body>