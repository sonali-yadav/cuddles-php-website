<?php
session_start();
include_once("header.php");
?>

<body>
    <?php include_once("navigation.php"); ?>
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error']; session_unset(); ?></div>
    <?php } else if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['success']; session_unset(); ?></div>
    <?php } ?>
    <div class="flex_container" id="loginformdiv" style="justify-content: space-around;">
        <div style="background-color: rgba(0,105,217,0.8);">
            <div class="login_form">
                <form action="serverside/login.php" method="post">
                    <h2 class="text-center">Log in</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="required" name="loginid">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required" name="pass">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                        <div><a href="#" class="pull-right">Forgot Password?</a></div>
                    </div>
                </form>
            </div>
        </div>
        <div style="background-color: rgba(40,167,69,0.8);">
            <div class="login_form">
                <form action="serverside/register.php" method="post">
                    <h2 class="text-center">Sign Up</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" required="required" name="fname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" required="required" name="lname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="required" name="loginid">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required="required" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required" name="pass">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>