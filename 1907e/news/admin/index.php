<!doctype html>
<html lang="en">
<head>
   <?php
   require_once "../init.php";
   require_once ADMIN_ROOT_PATH."/components/head.php";

   ?>

    <title>Login</title>
</head>

<body>
<?php
require_once "../init.php";
if(!App::check_login()) {
    header("location:login.php");
}
?>
<div class="container">
    <?php include_once ADMIN_ROOT_PATH."/components/top_header.php" ?>
    <div class="row">
        <?php include_once ADMIN_ROOT_PATH."/components/negative.php" ?>
        <div class="col-md-9">noi dung cua indexx</div>
    </div>
</div>



</body>
</html>
