<?php 
 error_reporting(0);
if(isset($_POST['login'])){

	$check = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".base64_encode($_POST['email'])."' and password = '".base64_encode($_POST['password'])."'"));
	if($check['email'] == base64_encode( $_POST['email']) AND $check['password'] == base64_encode( $_POST['password'])){
		$_SESSION['profile_session'] = base64_encode( $_POST['email']);
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		
		$errors[] = 'E-mail/Password entered does not match our records. ';
		$errors[] = 'Perhaps you need to register, just click the Register ';
		$errors[] = 'button on the header menu';

} 
if (!empty($errors)) {                     
		$errorstring = "Error! <br /> The following error(s) occurred:<br>";
    foreach ($errors as $msg) 
    {
			$errorstring .= " $msg<br>\n";
		}
		$errorstring .= "Please try again.<br>";
		echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
		}
	}

?>

<div class="container" style="padding-bottom:150px;">
	<div class="col-sm-4"></div>
	<div class="col-sm-4" style="padding:0px">
<h2 class="h2 text-center">Login</h2>
<form action="" method="post" name="loginform" id="loginform">
<?php if(!empty($wer)){ echo $wer; }?>
  <div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email Address:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control"  id="email" name="email" 
	  placeholder="Email" maxlength="30" required >
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" name="password" 
	  placeholder="Password" maxlength="40" required>
	  <span>&nbsp;Between 8 and 12 characters.</span></p>
	  <div class="checkbox">
			  <label><input type="checkbox" name="remember"> Remember me <a href="index.php?page=signup">Signup</a> | <a href="index.php?page=forgot_password">Forgot password</a></label>
			</div>
	</div>
  </div> 
  <button name="login" type="submit" class="btn btn-success">Login</button>
	</form>
</div>



</div>

