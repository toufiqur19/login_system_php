<?php 
$page_title= "Registration Form";
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
                        <h4>Registration Form</h4>
                    </div>
                    <div class="card_body">
                        
                        <!-- <form action="code.php" method="POST">
                            <div class="form_group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            
                            <div class="form_group mb-2">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form_group mb-2">
                                <label for="">name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form_group mb-2">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form_group">
                                <button type="submit" name="register-btn" class="btn btn-primary">Register Now</button>
                            </div>
                        </form>   -->

                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" required placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" required placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" required placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required placeholder="Enter password">
                            </div>
                            <input type="submit" name="signup" value="signup">
                            <h6>Alrady Have an Account? <a href="login.php">Login</a></h6>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('include/footer.php');?>