<?php
error_reporting(0);
    require_once __DIR__."/send_mail/SendMail.php";
    function rand_string($length){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen($chars);
        $str = '';
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[rand(0,$size - 1)];
        }
        return $str;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    { 
        if(isset($_POST['email']))
        {
            $email = base64_encode($_POST['email']);
        }      
        $result = $mysqli->query("SELECT  * FROM `registration` WHERE email = '". $email. "'");
        $account = mysqli_fetch_assoc($result);

            if (empty($account)) {
                $_SESSION['errors'] = 'Email address does not exist ';
                header('Location: index.php?page=forgot');
                exit();
            }
            $randPassword = rand_string(8);
            $title = 'Update password';
            $content = "<h3> Dear ". base64_decode($account['name']). '</h3>';
            $content .= "<p>We have received a request to re-issue your password recently.</p>";
            $content .= "<p>We have updated and sent you a new password</p>";
            $content .= "<p>Your new password is : </p> <b>$randPassword</b>";
            $sendMai = SendMail::send($title, $content, base64_decode($account['name']), base64_decode($account['email']));
            if ($sendMai) {
                $mysqli->query("update registration SET password = '".base64_encode($randPassword)."' WHERE email = '".$email."' ");   
                echo "<script>alert('We sent you an email please check it :)) Login now?')</script>";
                echo "<script>window.open('index.php?page=signin','_self')</script>";
            } else {
                $_SESSION['errors'] = 'An error has occurred unable to retrieve the password';
                header('Location: index.php?page=forgot');
                exit();
            }
    }