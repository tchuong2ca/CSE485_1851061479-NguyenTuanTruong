<?php
    $error = '';
    $success = '';
    if (isset($_SESSION['errors'])) {
        $error = $_SESSION['errors'];
    }
?>
<style>
.forgot, .btn, .form-control {
    font-size:18px;
    margin-bottom: 50px;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h3 style="font-size:23px;" class="text-center text-secondary mt-5 mb-3">Forgot Password</h3>
            <form method="post" action="index.php?page=sendMail" class="forgot border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="" name="email" id="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <?php
                        if (!empty($error)) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    ?>
                    <?php
                        if (!empty($success)) {
                        echo "<div class='alert alert-success'>$success</div>";
                    }
                    ?>
                    <button class="btn btn-success px-5">Send mail</button>
                </div>
                <div class="form-group">
                    <p>Don't have an account yet? <a href="index.php?page=signup">Register now</a>.</p>
                    <p>Do you already have an account ? <a href="index.php?page=signin">Login</a>.</p>
                </div>
            </form>          
        </div>
    </div>
</div>
<?php unset($_SESSION['errors']); ?>

