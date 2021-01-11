<div class="container" style="font-size: 18px;">
  <h2>CV list</h2>  
  <table class="table table-bordered table-hover table-striped table-sm">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Account open date</th>
        <th>CV Details</th>
      </tr>
    </thead>
    <tbody>
<?php
$get_cv = $mysqli->query("select * from registration order by id desc");
while($row = mysqli_fetch_assoc($get_cv)){
?>	
      <tr>
        <td><?php echo base64_decode($row['name']); ?></td>
        <td><?php echo base64_decode($row['email']); ?></td>
        <td><?php echo ($row['data']); ?></td>
        <td>
			<a href="index.php?page=frontend/index.php&user_id=<?php echo $row['email']; ?>">View CV</a>
		</td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>