<link rel="stylesheet" href="include/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="include/assets/css/Elegant-Registration-Form.css">
    <link rel="stylesheet" href="include/assets/css/styles.css">
<?php
error_reporting(0);
if(isset($_POST['signup']))
{
	$check = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".base64_encode($_POST['email'])."'"));
	if($check['email'] == base64_encode($_POST['email']))
	{
		$wer = '<p style="color:#f00;">Email already exist! please try again.</p>';
	}
	else
	{
		if($_POST['password']==$_POST['confirm']){
		if($mysqli->query("insert into registration values(
			'',
			'".base64_encode($_POST['name'])."',
			'".base64_encode($_POST['email'])."',
			'".base64_encode($_POST['password'])."',
			'".date('d-m-y')."'
		)")){
			echo "<script>alert('Congratulation :)) Login now?')</script>";
			echo "<script>window.open('index.php?page=signin','_self')</script>";
		}else{
			$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
		}}
		else{$wer='<p style="color:#f00;">confirm password failed.</p>';}
	}
}
?>
<div class="container-fluid">
        <div class="row mh-94vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 col-xl-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 style="font-size: 27px;" class="text-info font-weight-light mb-5">Sign up form</h2>
                    <form action="" method="post">
					<?php if(!empty($wer)){ echo $wer; }?>
                        <div class="form-group"><input style="font-size: 21px;" name="name" class="form-control" type="text" placeholder="Full name" required></div>
                        <div class="form-group"><input style="font-size: 21px;" name="email" class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" placeholder="Email" required></div>
                        <div class="form-group"><input style="font-size: 21px;" name="password" class="form-control" type="password"  placeholder="Password"required></div>
                        <div class="form-group"><input style="font-size: 21px;" name="confirm" class="form-control" type="password" placeholder="Confirm Password"required>
                            <div class="form-check"><input name="check" class="form-check-input" type="checkbox" id="formCheck-1" required>&emsp;&emsp; <label class="form-check-label" for="formCheck-1">I accept the Terms of Use &amp; Privacy Policy</label></div>
							</div><button name="signup" class="btn btn-info bg-success mt-2" type="submit">Submit</button>
					</form>				
                    <p class="mt-3 mb-0"></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;include/assets/img/aldain-austria-316143-unsplash.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a class="text-dark" href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
    <script src="include/assets/js/jquery.min.js"></script>
    <script src="include/assets/bootstrap/js/bootstrap.min.js"></script>
