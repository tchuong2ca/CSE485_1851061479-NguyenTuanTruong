<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
    <title><?php echo base64_decode($get_user['name']); ?> - Curriculum Vitae</title>

    <?php
       error_reporting(0);
        // Import PHPMailer classes into the global namespace 
      use PHPMailer\PHPMailer\PHPMailer; 
      use PHPMailer\PHPMailer\Exception; 
      require 'Exception.php'; 
      require 'PHPMailer.php'; 
      require 'SMTP.php'; 
      $mail=new PHPMailer();
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'bapcaixanhxanhh@gmail.com';                     // SMTP username
  $mail->Password   = '0948804318';                               // SMTP password
  $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 587;   
  $mail->isHTML(true);
  $mail->setFrom('zzmmzzth@gmail.com','Nguyễn Tuấn Trường');
  $mail->addAddress($_POST["email"], 'blah');
  $mail->Subject=$_POST["subject"];
  $mail->Body = $_POST["message"];
  $mail->CharSet="UTF-8";   
  if($mail -> send())
  {
    echo "<script>alert('Email sent successfully :))')</script>";
    echo "<script>window.open('http://localhost:81/demofrontend/include/mailsender/index.php','_self')</script>";
  }
  else
  {
    echo"<script>aleert('Sorry, can not send mail')</script>";
  }
   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
?>
  </head>
  <body>
<style>
    .form-control {
  width: 100%;
 
  margin-bottom: 20px;
  font-size: 14px;
  border-radius: 0;
 
  padding: 8px 10px;
  border: 1px solid #e1e1e1;
} 
  .contact-form{
  
  background-color: #f1f1f1;
  padding: 30px;
  }
  .contact-form .form-control{
  height: 40px;
  border-radius: 0px;
  margin-bottom: 20px;
  border: 0px solid #fff;
  }
  .contact-form #message{
    height: 104px;
  }
  .form_submit{
  width: 100%;
  background: #f73b56;
  border-radius: 0px;
  color: #fff;
  padding-top: 13px;
  padding-bottom: 10px;
  transition: all 1s;	
  }
</style>
<form action="" method="post" id="contact"><section class="contact" id="CONTACT">
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="contact_title  wow fadeInUp animated">
                 
                  <h1  style=" text-align:center;">Mail to Client</h1>
                      
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              
              <div class="col-md-9  wow fadeInRight animated">
                  <form class="contact-form" action="">
                      <div class="row">
                          <div class="col-md-6">
                              <input  type="text" class="form-control"name="name" id="name" placeholder="Name">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                              <input  type="text" class="form-control" name="subject" id="subject" placeholder="Subject">                                
                          </div>
                          <div class="col-md-6" >
                              <textarea class="form-control" id="message" name="message" rows="6"  placeholder="  Message Texts..."  ></textarea>
                              <button type="submit"  name="send" id="send" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                                                        
                              <br>
                          
                            </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>    
  </section>
</form>
<a  href="http://localhost:81/demofrontend/index.php"><button class="form_submit" style="background-color:coral; margin-bottom: 180px;">Back</button></a>
  </body>
</html>