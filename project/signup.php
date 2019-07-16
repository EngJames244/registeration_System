<?php include('include/connection.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Bootstrap Project">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Registeration System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"> 
    </head>     
    <body>
        <?php include('include/header.php'); ?>
        <div class="signup">
        <h2 class="text-center h2"> Signup Now </h2>
        <form method="post" action="signup.php" class="text-center">
            <div class="container">
                <div class="form-group">
                    <label>Username</label>
                    <input type=="text" class="form-control" placeholder="Enter Your Username" name="uname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type=="email" class="form-control" placeholder="Enter Your email" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type=="password" class="form-control" placeholder="Enter Your Password" name="password1">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type=="password" class="form-control" placeholder="Enter Your Password Again" name="password2">
                </div>
                <input type="submit" class="btn btn-warning" value="Signup" name="sinup">
                </div>
            </form>
        </div>
        <?php include('include/footer.php');?>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>