<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="design.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="school2.jpg" class="body_deg">
    <center>
        <div class="form_deg">

            <center style="font-family: cursive;padding-bottom:1px" class="title_deg">
                Login Form
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
?>
                </h4>
</center>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label style="font-family: cursive; text-align:left"  class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label style="font-family: cursive;text-align:left" class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                   
                    <input style="font-family: cursive;padding-top:5px" class="btn btn-primary"  type="submit"  name="submit" value="login" >
                </div>
</form>
</div>
</center>
</body>
</html>