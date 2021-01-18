<?php
 error_reporting(0);
 $mai=($_GET['user_id']);
if(isset($_POST["delete"])) {   
    $check = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '$mai' 
 and password = '".base64_encode($_POST['password'])."'"));
 if($check['password'] == base64_encode( $_POST['password'])){
    $mysqli->query("delete from services where a_id= '$mai'");
    $mysqli->query("delete from skill where a_id= '$mai'");
    $mysqli->query("delete from profile where a_id= '$mai'");
    $mysqli->query("delete from details where a_id= '$mai'");
    $mysqli->query("delete from content where a_id= '$mai'");
    $mysqli->query("delete from achievements where a_id= '$mai'");
    $mysqli->query("delete from registration where email= '$mai'");
   echo "<script>window.open('index.php?page=logout','_self')</script>";
    }
 else{
     $errors[] = 'Incorrect password. ';
        }if (!empty($errors)) {                     
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        .container{
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Account</h1>
                    </div>
                    <form method="post">
                        <div class="container">
                          
                            <div class="form-group"><label class="text-secondary">Password</label>
                            <input name= "password" id="password" class="form-control" type="password" required="" placeholder="Enter Password"></div>
                            <p>Do you really want to delete this account ?</p><br>
                            <p>
                                <input name="delete" type="submit" value="Delete" class="btn btn-warning">
                                <a href="index.php" class="btn btn-default">Cancel</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>