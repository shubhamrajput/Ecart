<html>
<head><link href="css/style.css" rel="stylesheet" type="text/css" /></head>
 <body style=background-image:url('image/image2.jpg');background-repeat:no-repeat>
<div style="width:100%;text-shadow: 5px 5px 5px #FF000;height:50px;font-size:30pt;color:white;text-align:center;text-transform:uppercase" >
               ecart.com
          </div>
<?php
$page_title='Register';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	require('connection.php');
	$errors=array();
     if (!preg_match("/^[a-zA-Z ]*$/",$_POST['first_name'])) {
       $errors[] = "Only letters and white space allowed!!";}
       if (!preg_match("/^[a-zA-Z ]*$/",$_POST['last_name'])) {
       $errors[] = "Only letters and white space allowed!!";}
	if(empty($_POST['first_name']))
		{$errors[]='Enter your first name!!.';}
	else
		{$fn=mysqli_real_escape_string($dbc,trim($_POST['first_name']));}
	if(empty($_POST['last_name']))
		{$errors[]='Enter your last name!!.';}
	else
		{$ln=mysqli_real_escape_string($dbc,trim($_POST['last_name']));}

    if(empty($_POST['email']))
		{$errors[]='Enter your email address!!.';}
	else
		{$e=mysqli_real_escape_string($dbc,trim($_POST['email']));}
	if(!empty($_POST['pass1']))
	{
		if($_POST['pass1']!=$_POST['pass2'])
		{
			$errors[]='Passwords do not match!!.';
		}
		else
			{$p=mysqli_real_escape_string($dbc,trim($_POST['pass1']));}
	}
	else
	{
		$errors[]='Enter your password!!';
	}
	if(empty($errors))
     {
     	$q="select user_id from users where email='$e'";
     	$r=mysqli_query($dbc,$q);
     	if(mysqli_num_rows($r)!=0)
     	{
     		$errors[]='Email address already registered.<a href="login.php">Login</a>';
     	}
     

}
if(empty($errors))
{
     $q="insert into users (first_name,last_name,email,pass,reg_date)
     values('$fn','$ln','$e',SHA('$p'),NOW())";
     $r=mysqli_query($dbc,$q);
     if($r)
     {
     	 echo '<h1 style="color:red">Registered!</h1>
     	 <p ><h1 style="color:black">You Are Now Registered.</h1></p>
     	 <p><a href="login.php"><h1>Login</h1></a></p>';

     }
     mysqli_close($dbc);
     exit();
     }
     else
     {
          echo '<h1>Error!</h1>
          <p style="color:red"id="err_msg">The following error(s) occured:<br>';
          foreach($errors as $msg)
          {
          	echo "-$msg<br>";
          }
          echo 'Please try again';
          mysqli_close($dbc);
     }
 }
 ?>

 <div id="carrier">
               <form action="register.php" method="post">
                <divstyle="float:left;width:300px;margin-top:30px;">
          <table  style="line-height:30px;" id="rtable" cellspacing="5">
 <h1>Register</h1>
 <tr>
 <td>First Name:</td>
 <td><input type="text" preg_match("/^[a-zA-Z ]*$/") style="box-shadow:0px 0px 15px yellow inset"placeholder="First_Name"name="first_name" value="<?php if (isset($_POST['first_name']))echo $_POST['first_name'];?>"></td>
</tr>
<tr>
 <td>Last Name:</td>
 <td><input type="text" style="box-shadow:0px 0px 15px yellow inset"placeholder="Last_Name" name="last_name" value="<?php if (isset($_POST['last_name']))echo $_POST['last_name'];?>"></td>
</tr>
<tr>

<td>Email Address:</td>
<td><input type="email" name="email"style="box-shadow:0px 0px 15px yellow inset" placeholder="Email"value="<?php if (isset($_POST['email']))echo $_POST['email'];?>"></td>
</tr>
<tr>
 <td>Password:</td>
 <td><input type="password" AUTOCOMPLETE="off" style="box-shadow:0px 0px 15px yellow inset"placeholder="Password"name="pass1" value="<?php if (isset($_POST['pass1']))echo $_POST['pass1'];?>"></td>
</tr>
<tr>
 <td> Confirm Password:</td>
 <td><input type="password" AUTOCOMPLETE="off" style="box-shadow:0px 0px 15px yellow inset"name="pass2"placeholder="Confirm...." value="<?php if (isset($_POST['pass2']))echo $_POST['pass2'];?>"></td>
</tr>
<tr align="center">

<td colspan="2"><input type="submit"class="regbutton" value="Register"></td>
</tr>
</table>
          </div>
</form>
</div>

</body>
     </html>


