<style>
  .text{
  font-size: medium;
  }
 
</style>
<div class="w3-top" style="font-size: 15px; z-index:3">
  <div class=" w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="text w3-bar-item  w3-button w3-hover-text-white w3-hover-deep-orange w3-padding-large">HOME</a>
   
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="text w3-padding-large w3-button w3-hover-text-white w3-hover-deep-orange" title="More">Account <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
	  <?php if(!isset($_SESSION['profile_session'])){ ?>
		<a href="index.php?page=signin" class=" text w3-bar-item w3-button w3-hover-text-white w3-hover-orange">SignIn</a>
        <a href="index.php?page=signup" class="text w3-bar-item w3-button w3-hover-text-white w3-hover-green">SignUp</a>
    <?php }else{ ?>        
		<a href="index.php?page=profile" class="text w3-bar-item w3-button w3-hover-text-white w3-hover-deep-orange">Profile</a>
        <a href="index.php?page=logout" class="text w3-bar-item w3-button w3-hover-text-white w3-hover-red">Logout</a>
	  <?php } ?>	
      </div>
    </div> 
  </div>
</div>
<div id="navDemo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px; font-size: 15px;">
  <?php if(!isset($_SESSION['profile_session'])){ ?>  
  <a href="index.php?page=signin" class="text w3-bar-item w3-button w3-padding-large w3-hover-text-white w3-hover-orange" onclick="myFunction()">SignIn</a>
  <a href="index.php?page=signup" class="text w3-bar-item w3-button w3-padding-large w3-hover-text-white w3-hover-green" onclick="myFunction()">SignUp</a>
  <?php }else{ ?>
  <a href="index.php?page=profile" class="text w3-bar-item w3-button w3-padding-large w3-hover-text-white w3-hover-deep-orange" onclick="myFunction()">Profile</a>
  <a href="index.php?page=logout" class="text w3-bar-item w3-button w3-padding-large w3-hover-text-white w3-hover-red" onclick="myFunction()">Logout</a>
  <?php } ?>
</div>