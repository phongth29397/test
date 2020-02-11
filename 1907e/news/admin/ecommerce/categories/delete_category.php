<!doctype html>
<html lang="en">
<head>
    <?php
    require_once "../../../init.php";
    require_once ADMIN_ROOT_PATH."/components/head.php";

    ?>
    <title>add_category</title>
</head>
<body>
<?php
if(!App::check_login()){
    header("location:login.php");
}
if(isset($_POST['add'])){
    $query="DELETE FROM `categories` WHERE `categories`.`id` = 11";
    mysqli_query($connection,$query);
}

?>

</body>
</html>