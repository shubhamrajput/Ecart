<html>
<head><link href="css/style.css" rel="stylesheet" type="text/css" /></head>
<body style=background-image:url('image/image2.jpg');background-repeat:no-repeat>
	<div style="width:100%;text-shadow: 5px 5px 5px #FF000;height:50px;font-size:30pt;color:white;text-align:center;text-transform:uppercase" >
               ecart.com
          </div>
<?php
$page_title='Login';
if(isset($errors)&&!empty($errors))
{
	echo '<p id="err_msg">Oops!..There was a problem:<br>';
	foreach($errors as $msg)
	{
		echo "-$msg<br>";
	}
	echo 'Please try again or 
	<a href="register.php">Register</a></p>';
}
?>
<div id="carrier">
               <form action="login_action.php" method="post">
                <divstyle="float:left;width:300px;margin-top:30px;">
          <table  style="line-height:30px;" id="rtable" cellspacing="5">
<tr>
<td>Email</td>
<td><input type="text" name="email"style="box-shadow:0px 0px 15px #0000CC inset" placeholder="Email@gmail.com" autofocus="autofocus"  autocomplete="on"id="txtuser"/></td>
</tr>
				<tr >
<td>Password</td>

<td><input type="password"style="box-shadow:0px 0px 15px #0000CC inset" AUTOCOMPLETE="off" placeholder="Password"  name="pass"id="txtpass"/></td>
</tr>
				<tr align="center">
<td colspan="2"><input type="submit" class="regbutton"value="Login"/></td>

</tr>
<td>Don't have an account?<a href="register.php">Register Here</a></td>
</table><div style=" width:600px;float:right;padding-top:50px;">
      <ul>
      <li>
<a href="https://www.youtube.com" target="_blank">      <img src="image/y.jpg" /></a>
      </li>
      <li>
<a href="https://www.facebook.com" target="_blank">      <img src="image/f.png" /></a>
      </li>
      <li>
    
    <a href="https://www.twitter.com" target="_blank">  <img src="image/t.png" /></a>
    </li>
      </ul>
      
      </div>

         </div>
</form>
    

</div>
 


</body>
</html>
