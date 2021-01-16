<link rel="stylesheet" href="include/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="include/assets/css/Elegant-Registration-Form.css">
    <link rel="stylesheet" href="include/assets/css/styles.css">
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
<style>
p{
    font-size: 16px;
}
</style>
<div class="container-fluid">
        <div class="row mh-94vh">
            <div style="font-size: 23px;" class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 style="font-size: 27px;" class="text-info font-weight-light mb-5">&nbsp;Login Form</h2>
                    <form action="" method="post" name="loginform" id="loginform">
					<?php if(!empty($wer)){ echo $wer; }?>
                        <div class="form-group"><label class="text-secondary">Email</label><input name="email" id="email" class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" placeholder="Enter your Email"></div>
                        <div class="form-group"><label class="text-secondary">Password</label><input name= "password" id="password" class="form-control" type="password" required="" placeholder="Enter Password"></div>
						<label style="font-size: 16px;" ><input type="checkbox" name="remember"> Remember me</label>
						<div></div>
						<button name="login" class="btn btn-info bg-primary mt-2" type="submit">Log In</button>
                        <div class="form-group">
                        <p>The password is too hard for you?<a href="index.php?page=changepassword">Change your password</a>.</p>
                    <p>Don't have an account yet? <a href="index.php?page=signup">Register now</a>.</p>
                    <p>Forgot your password? <a href="index.php?page=forgot">Reset your password</a>.</p>
                </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(include/assets/img/aldain-austria-316143-unsplash.jpg);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><em>&nbsp;&nbsp;</em><br></p>
            </div>
        </div>
    </div>
    <script src="include/assets/js/jquery.min.js"></script>
    <script src="include/assets/bootstrap/js/bootstrap.min.js"></script>