<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php
require_once "../init.php";

if(!App::check_login()){
    header("location:admin/login.php");

}
 $query="SELECT * FROM new";
 $kq=mysqli_query($connection,$query);

 ?>
<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Shot description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row=mysqli_fetch_array($kq)){?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['short_description'];?></td>
        <td>
            <button class="btn btn_edit">Edit</button>
            <button class="btn btn_delete">Delete</button>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>


</body>
</html>
