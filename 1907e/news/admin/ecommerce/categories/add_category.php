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

?>

<div class="container">
    <?php include_once ADMIN_ROOT_PATH."/components/top_header.php"?>
    <div class="row">
        <?php include_once ADMIN_ROOT_PATH."/components/negative.php"?>
        <div class="col-md-9">
            <form action="<?php echo ADMIN_ROOT_SITE.'ecommerce/categories/listcategory.php'?>" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" value=""></td>
                    </tr>
                    <tr>
                        <th>ordering</th>
                        <td><input type="text" name="ordering" value=""></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <select name="published">
                                <option value="1">Enable</option>
                                <option value="0">Disable</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary" name="add">Add</button>

                            </div>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</div>
</body>
</html>