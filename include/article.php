<link rel="stylesheet" href="include/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="include/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="include/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="include/assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

<div class="col search-table-col"><span class="counter pull-right"></span>
<h2 style="text-align: center;">CV List</h2>
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table style="font-size: 15px;" class=" table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd"> Name</th>
                        <th id="trs-hd" > Email</th>
                        <th id="trs-hd">Created since</th>
                        <th id="trs-hd">Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr class="warning no-result">
                        <td colspan="8"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
<?php
$get_cv = $mysqli->query("select * from registration order by id desc");
while($row = mysqli_fetch_assoc($get_cv)){
?>	
      <tr>
        <td><?php echo base64_decode($row['name']); ?></td>
        <td><?php echo base64_decode($row['email']); ?></td>
        <td><?php echo ($row['data']); ?></td>
        <td>
			<a href="index.php?page=frontend/index.php&user_id=<?php echo $row['email']; ?>" title="ViewCV"><i class="fas fa-eye"></i></a>&emsp; &emsp;
            <a href="index.php?page=template/delete.php&user_id=<?php echo $row['email']; ?>"><i class="fas fa-user-slash" style="color: orange;"></i></a>
		</td>
      </tr>
<?php } ?>
    </tbody>
            </table>
        </div>
    </div>
  <?php
    include("include/footer.php");
    ?>