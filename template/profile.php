<?php 
// Profile
error_reporting(0);
if(isset($_POST['save'])){
	include("template/profile_image.php");	
	if($mysqli->query("insert into profile values(
		
		'".$_SESSION['profile_session']."',
		'".base64_encode($_POST['j_title'])."',
		'".base64_encode($_POST['address'])."',
		'".base64_encode($_POST['p_number'])."',
		'".base64_encode($_POST['summary'])."',
		'".base64_encode($image_file)."'
	)")){		
		echo "<script>alert('Save success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
$cnk = mysqli_fetch_assoc($mysqli->query("select * from profile where a_id = '".$_SESSION['profile_session']."'"));
if(!empty($cnk['id'])){
	$p_button = '<button name="p_update" type="submit" class="btn btn-default">Update</button>';
	$req = '';
}else{
	$p_button = '<button name="save" type="submit" class="btn btn-default">save</button>';
	$req = 'required';
}
if(isset($_POST['p_update'])){
	$image_location = base64_decode($cnk['image']);
	if($_FILES["file"]["name"] == ''){
		$image_file = $image_location;
	}else{
		if(file_exists($image_location)){
			unlink($image_location);						
		}
		include("template/profile_image.php");		
	}	
	if($mysqli->query("update profile set
		job_title = '".base64_encode($_POST['j_title'])."',
		address = '".base64_encode($_POST['address'])."',
		mobile = '".base64_encode($_POST['p_number'])."',
		summary = '".base64_encode($_POST['summary'])."',
		image = '".base64_encode($image_file)."'
		where a_id = '".$_SESSION['profile_session']."'
	")){
		echo "<script>alert('Update success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}

 // Awards

if(isset($_POST['achi_save'])){
	
	if($mysqli->query("insert into achievements values(
		
		'".$_SESSION['profile_session']."',
		'".($_POST['project'])."',
		'".($_POST['done'])."',
		'".($_POST['award'])."',
		'".($_POST['client'])."'
		
	)")){		
		echo "<script>alert('Save success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
$cn = mysqli_fetch_assoc($mysqli->query("select * from achievements where a_id = '".$_SESSION['profile_session']."'"));
if(!empty($cn['id'])){
	$s_button = '<button name="s_update" type="submit" class="btn btn-default">Update</button>';
	$req = '';
}else{
	$s_button = '<button name="achi_save" type="submit" class="btn btn-default">save</button>';
	$req = 'required';
}
if(isset($_POST['s_update'])){
	
	if($mysqli->query("update achievements set
		working = '".($_POST['project'])."',
		done = '".($_POST['done'])."',
		awards = '".($_POST['award'])."',
		clients = '".($_POST['client'])."'
		
		where a_id = '".$_SESSION['profile_session']."'
	")){
		echo "<script>alert('Update success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}

// details

if(isset($_POST['det_save'])){
	
	if($mysqli->query("insert into details values(
	
		'".$_SESSION['profile_session']."',
		
		'".($_POST['age'])."',
		'".($_POST['exp'])."',
		'".base64_encode($_POST['exlanguage'])."',
		'".($_POST['select'])."'
		
	)")){		
		echo "<script>alert('Save success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
$det = mysqli_fetch_assoc($mysqli->query("select * from details where a_id = '".$_SESSION['profile_session']."'"));
if(!empty($cn['id'])){
	$det_button = '<button name="det_update" type="submit" class="btn btn-default">Update</button>';
	$req = '';
}else{
	$det_button = '<button name="det_save" type="submit" class="btn btn-default">save</button>';
	$req = 'required';
}
if(isset($_POST['det_update'])){
	
	if($mysqli->query("update details set
		age = '".($_POST['age'])."',
		exp ='".($_POST['exp'])."',
		exlanguage='".base64_encode($_POST['exlanguage'])."',
		freelance = '".($_POST['select'])."'
		where a_id = '".$_SESSION['profile_session']."'
	")){
		echo "<script>alert('Update success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}

//-------------------------------------------

// add 

if(isset($_POST['add'])){
	if($mysqli->query("insert into content values(
	
		'".$_SESSION['profile_session']."',
		'".$_POST['type']."',
		'".base64_encode($_POST['w_j_title'])."',
		'".base64_encode($_POST['d_q'])."',
		'".base64_encode($_POST['description'])."'
	)")){
		echo "<script>alert('Adding success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
if(!empty($_GET['content_delete_id'])){
	if($mysqli->query("delete from content where id = '".$_GET['content_delete_id']."'")){
		echo "<script>alert('Delete success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
//-----------------------------------

if(!empty($_GET['de_delete_id'])){
	if($mysqli->query("delete from details where id = '".$_GET['de_delete_id']."'")){
		echo "<script>alert('Delete success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}

// Add skills
if(isset($_POST['add_skill'])){
	if($mysqli->query("insert skill values(
		
		'".$_SESSION['profile_session']."',
		'".base64_encode($_POST['skill'])."',
		'".($_POST['proIndex'])."'
	)")){
		echo "<script>alert('Adding success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
if(!empty($_GET['skill_delete_id'])){
	if($mysqli->query("delete from skill where id = '".$_GET['skill_delete_id']."'")){
		echo "<script>alert('Delete success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
// add services

if(isset($_POST['add_ser'])){
	if($mysqli->query("insert services values(
	
		'".$_SESSION['profile_session']."',
		'".base64_encode($_POST['service'])."',
		'".base64_encode($_POST['describe'])."'
	)")){
		echo "<script>alert('Adding success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
if(!empty($_GET['ser_delete_id'])){
	if($mysqli->query("delete from services where id = '".$_GET['ser_delete_id']."'")){
		echo "<script>alert('Delete success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}

// Profile

?>
<div class="container" style="padding-bottom:150px; padding-top:50px; font-size:20px; background-color:pink">
<?php if(!empty($wer)){ echo $wer; }?>
	<div class="row">
		<div class="col-sm-12"><h2>Profile</h2></div>
		<div class="col-sm-4">
			<p>Personal information</p>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>JOb title:</label>
					<input value="<?php if(!empty($cnk['job_title'])){ echo base64_decode($cnk['job_title']); } ?>" type="text" class="form-control" placeholder="Enter JOb title" name="j_title" required>
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input value="<?php if(!empty($cnk['address'])){ echo base64_decode($cnk['address']); } ?>" type="text" class="form-control" placeholder="Enter Address" name="address" required>
				</div>
				<div class="form-group">
					<label>Phone number:</label>
					<input  value="<?php if(!empty($cnk['mobile'])){ echo base64_decode($cnk['mobile']); } ?>" type="text" class="form-control" placeholder="Enter Phone number" name="p_number" required>
				</div>
				<div class="form-group">
					<label>Summary:</label>
					<textarea class="form-control" placeholder="Enter Summary" name="summary" required><?php if(!empty($cnk['summary'])){ echo base64_decode($cnk['summary']); } ?></textarea>
				</div>
				<div class="form-group">
					<label>Profile Picture:</label>
					<?php
						if(!empty($cnk['image'])){
							echo '<img src="'.base64_decode($cnk['image']).'" style=" height:90px; width:90px; border:solid 1px #eee;padding:5px;margin:15px;float:left;"/>';
						}
					?>
					<input type="file" class="form-control" name="file" style="  padding: 3px 12px;" <?php if(!empty($req)){ echo $req; }?>>
				</div>	
				<?php echo $p_button; ?>
			</form>
		</div>

<!-- CV information -->

		<div class="col-sm-4">
		  
			<form action="" method="post">
				<p>CV information</p>
				<div class="form-group">
				  <label >Work Experience:</label>
				  <select name="type" class="form-control" required>
					<option value="">--select 0ne--</option>
					<option value="Work Experience">Work Experience</option>
					<option value="Education">Education</option>
				  </select>
				</div>
				<div class="form-group">
				  <label>job title / Institute name:</label>
				  <input type="text" class="form-control" placeholder="job title / Institute name" name="w_j_title" required>
				</div>
				<div class="form-group">
				  <label>start-end date / Qualification:</label>
				  <input type="text" class="form-control" placeholder="start-end date / Qualification" name="d_q" required>
				</div>
				<div class="form-group">
				  <label>Description:</label>
				  <textarea class="form-control" placeholder="Description" name="description" required></textarea>
				</div>				
				<button name="add" type="submit" class="btn btn-default">Add</button>
			</form>
			
			<table class="table table-bordered" style="margin-top:20px;">
			<?php
				$query = $mysqli->query("select * from content where a_id = '".$_SESSION['profile_session']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				  <tr>
					<td>
						<?php echo ($row['type']); ?><hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo base64_decode($row['content_one']); ?><hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo base64_decode($row['content_two']); ?><hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo base64_decode($row['content_three']); ?>
					</td>
					<td>
						<a href="index.php?page=profile&content_delete_id=<?php echo $row['id']; ?>">delete</a>
					</td>
				  </tr>
			<?php } ?>	  
			</table>
		</div>

<!-- Programming Skills -->

		<div class="col-sm-4">
		  
			<form action="" method="post">
				<p>Programming language</p>

				<div class="form-group">
				  <label>Language:</label>
				  <input type="text" class="form-control" placeholder="Programming Language" name="skill" required>
				</div>	
				<div class="form-group">
				  <label>Proficiency index:</label>
				  <input type="number" class="form-control" placeholder="Enter number" name="proIndex" required>
				</div>			
				<button name="add_skill" type="submit" class="btn btn-default">Add skill</button>
			</form>
			<table class="table table-bordered" style="margin-top:20px;">
			<?php
				$query = $mysqli->query("select * from skill where a_id = '".$_SESSION['profile_session']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				  <tr>
					<td>
						<?php echo base64_decode($row['content']); ?> <hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo ($row['proIndex']);?>
					</td>
					<td>
						<a href="index.php?page=profile&skill_delete_id=<?php echo $row['id']; ?>">delete</a>
					</td>
				  </tr>
			<?php } ?>	  
			</table>
		</div>

<!-- details section -->
		<div class="col-sm-4">
		  
			<form action="" method="post">
				<p>Details</p>
				<div class="form-group">
				  <label>age</label>
				  <input  value="<?php if(!empty($det['age'])){ echo ($det['age']); } ?>"  type="number" class="form-control" placeholder="age" name="age" required>
				</div>	
				<div class="form-group">
				  <label>exp</label>
				  <input value="<?php if(!empty($det['exp'])){ echo ($det['exp']); } ?>" type="number" class="form-control" placeholder="exp" name="exp" required>
				</div>
				<div class="form-group">
				<label>Extra Language</label>
				<input value="<?php if(!empty($det['exlanguage'])){ echo base64_decode($det['exlanguage']); } ?>" type="text" class="form-control" name="exlanguage">
			  </div>		
				<label>freelance</label>
				<select name="select" class="form-control" required>
					<option >--select 0ne--</option>
					<option>Available</option>
					<option>Unavailable</option>
				  </select>
				<?php echo $det_button; ?>	
			</form>
			
			
		</div>
		
<!-- services section -->
		<div class="col-sm-4">
		  
		  <form action="" method="post">
			  <p>Services</p>

			  <div class="form-group">
				<label>Service:</label>
				<input  type="text" class="form-control" placeholder="Enter text" name="service" required>
			  </div>	
			  <div class="form-group">
				<label>Description:</label>
				<input type="text" class="form-control" placeholder="describe about it" name="describe" required>
			  </div>			
			  <button name="add_ser" type="submit" class="btn btn-default">Add service</button>
		  </form>
		  <table class="table table-bordered" style="margin-top:20px;">
		  <?php
			  $query = $mysqli->query("select * from services where a_id = '".$_SESSION['profile_session']."'");
			  while($row = mysqli_fetch_assoc($query)){
		  ?>
				<tr>
				  <td>
					  <?php echo base64_decode($row['service']); ?> <hr style="margin:0px;border:solid 1px #eee;"/>
					  <?php echo base64_decode($row['description']);?>
				  </td>
				  <td>
					  <a href="index.php?page=profile&ser_delete_id=<?php echo $row['id']; ?>">delete</a>
				  </td>
				</tr>
		  <?php } ?>	  
		  </table>
	  </div>

<!-- Achievements area -->

	  <div class="col-sm-4">		  
		  <form action="" method="post">
			  <p>Achievements</p>
			  <div class="form-group">
				<label>on going project:</label>
				<input value="<?php if(!empty($cn['working'])){ echo ($cn['working']); } ?>" type="number" class="form-control" placeholder="number of ongoing projects" name="project" required>
			  </div>	
			  <div class="form-group">
				<label>done:</label>
				<input value="<?php if(!empty($cn['done'])){ echo ($cn['done']); } ?>" type="number" class="form-control" placeholder="number of completed projects" name="done" required>
			  </div>
			  <div class="form-group">
				<label>awards:</label>
				<input value="<?php if(!empty($cn['awards'])){ echo ($cn['awards']); } ?>" type="number" class="form-control" placeholder="Awards" name="award" required>
			  </div>
			  <div class="form-group">
				<label>happy clients:</label>
				<input value="<?php if(!empty($cn['clients'])){ echo ($cn['clients']); } ?>" type="number" class="form-control" placeholder="number of happy clients" name="client" required>
			  </div>
			  <?php echo $s_button; ?>						  
		  </form>
	  </div>
	</div>
</div>
