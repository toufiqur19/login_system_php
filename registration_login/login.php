<?php 
$page_title= "Login Form";
include('include/header.php');
include('include/navbar.php');
include('code.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow p-4">
                    <div class="card_header text-center">
                        <h4>Login Form</h4>
                    </div>
                    <div class="card_body">
                        
                        <!-- <form action="" method="POST">
                            
                            <div class="form_group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form_group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            
                            <div class="form_group">
                                <button type="submit" class="btn btn-primary">Login Now</button>
                            </div>
                        </form>   -->

                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" required placeholder="Enter emaill or username">
                            </div>
                    
                            <div class="form-group">
                                <input type="password" name="password" required placeholder="Enter password">
                            </div>

                            <input type="submit" name="login" value="Login">

                            <p>Don't Have an Account? <a href="register.php">Sign Up</a></p>

                            <a href="forget_password.php" id="btn">Forget Password</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('include/footer.php');?>