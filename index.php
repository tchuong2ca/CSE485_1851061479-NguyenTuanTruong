<?php
include("config/config.php");
// error_reporting(0);
$page = '';
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
echo '<!DOCTYPE html><html lang="en"><head>';
	include("include/meta.php");
	include("include/title.php");
	include("include/css.php");
echo '</head><body>';
	include("include/nav.php");
echo '<div class="w3-content" style="max-width:2000px;margin-top:46px">';	
	if($page == 'signin'){
		if(!isset($_SESSION['profile_session'])){
			include("template/signin.php");
		}else{
			echo "<script>window.open('index.php','_self')</script>";
		}	
	}
	elseif($page == 'signup'){
		if(!isset($_SESSION['profile_session'])){
			include("template/signup.php");
		}else{
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
	elseif($page == 'forgot'){
		if(!isset($_SESSION['profile_session'])){
			include("template/forgot.php");
		}
	}
	elseif($page == 'changepassword'){
		if(!isset($_SESSION['profile_session'])){
			include("template/changepassword.php");
		}else{
			echo "<script>window.open('index.php','_self')</script>";
		}	
	}
	elseif($page == 'sendMail'){
		if(!isset($_SESSION['profile_session'])){
			include("sendMail.php");
		}else{
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
	elseif($page == 'profile'){
		if(!isset($_SESSION['profile_session'])){
			echo "<script>window.open('index.php','_self')</script>";
		}else{
			include("template/profile.php");
		}		
	}
	elseif($page == 'frontend/index.php'){
		include("frontend/index.php");
	}
	elseif($page == 'frontend/indexNoJs.php'){
		include("frontend/indexNoJs.php");
	}
	elseif($page == 'template/delete.php'){
		include("template/delete.php");
	}
	elseif($page == 'logout'){
		unset($_SESSION['profile_session']);
		echo "<script>window.open('index.php','_self')</script>";
	}else{
		include("include/article.php");
		
	}	
echo '</div>';	
	include("include/js.php");
echo '</body></html>';	
?>