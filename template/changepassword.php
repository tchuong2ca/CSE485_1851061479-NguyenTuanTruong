<link rel="stylesheet" href="include/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="include/assets/css/Elegant-Registration-Form.css">
    <link rel="stylesheet" href="include/assets/css/styles.css">
<?php
error_reporting(0);
if(isset($_POST['change']))
{
	$check = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".base64_encode($_POST['email'])."'"));
	if($check['email'] == base64_encode($_POST['email']))
	{
        $a=base64_encode($_POST['cupassword']);
        $b=($_POST['newpassword']);
        if($check['password'] == $a and $_POST['newpassword']==$_POST['newconfirm'] ){
            if($mysqli->query("update registration set password= '".base64_encode($b)."' where email = '".base64_encode($_POST['email'])."'
            ")){
                echo "<script>alert('Congratulation :)) Login now?')</script>";
                echo "<script>window.open('index.php?page=signin','_self')</script>";
            }else{
                $wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
            }}
            else{$wer='<p style="color:#f00;">confirm password failed.</p>';}
	}
}
?>


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h3 style="font-size:23px;" class="text-center text-secondary mt-5 mb-3">Forgot Password</h3>
            <form method="post"class="forgot border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light">
            <?php if(!empty($wer)){ echo $wer; }?>
                      
                      <div class="form-group"><input style="font-size: 21px;" name="email" class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" placeholder="Email" required></div>
                      <div class="form-group"><input style="font-size: 21px;" name="cupassword" class="form-control" type="password"  placeholder="Current Password"required></div>
                      <div class="form-group"><input style="font-size: 21px;" name="newpassword" class="form-control" type="password"  placeholder="New Password"required></div>
                      <div class="form-group"><input style="font-size: 21px;" name="newconfirm" class="form-control" type="password" placeholder="Confirm Password"required>
                         <button name="change" class="btn btn-info bg-success mt-2" type="submit">Change</button>
            </form>          
        </div>
    </div>
</div>


    <script src="include/assets/js/jquery.min.js"></script>
    <script src="include/assets/bootstrap/js/bootstrap.min.js"></script>

