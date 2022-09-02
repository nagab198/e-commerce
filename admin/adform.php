<?php
session_start();
include 'config.php';
include 'header.php';

$msg = "";
$user_msg = null;
$email_msg = null;
$psw_msg = null;
$edit_row = '';
$edit = false;
$sql_true = false;
$edit_title = null;
$edit_desc = null;
$edit_type = null;
$edit_path = null;


if (isset($_GET['id']) && $_GET['id'] != '') {
    $edit = true;
    $id = $_GET['id'];
}

if ($edit) {
    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $type = $_POST['type'];

        if (isset($_POST['imgFile'])) {
            $rand_name = rand(1000, 100000);
            $file = $rand_name . "-" . $_FILES['imgFile']['name'];
            $file_loc = $_FILES['imgFile']['tmp_name'];
            $file_size = $_FILES['imgFile']['size'];
            $file_type = $_FILES['imgFile']['type'];
            $folder = "../upload/";

            move_uploaded_file($file_loc, $folder . $file);
        } else {
            $file = $_POST['path'];
        }
        $update_sql = "UPDATE `article` SET `title`='$title',`description`='$description',`img_path`='$file',`type`='$type' WHERE `id` = $id";
        $res = mysqli_query($conn, $update_sql) or die(mysqli_error());
        if ($res) {
            header('location: article.php');
        } else {
            $msg = 'unable to insert data';
        }
    }


} else {
    if (isset($_POST['create_article'])) {
        if (isset($_POST['title']) && $_POST['title'] != '') {
            $sql_true = true;
            $title = $_POST['title'];
        } else {
            $user_msg = "Please enter title";
        }
        if (isset($_POST['description']) && $_POST['description'] != '') {
            $sql_true = true;
            $description = $_POST['description'];
        } else {
            $email_msg = "Please enter description";
        }
        if (isset($_POST['type']) && $_POST['type'] != '') {
            $sql_true = true;
            $type = $_POST['type'];
        }

        $rand_name = rand(1000, 100000);
        $file = $rand_name . "-" . $_FILES['imgFile']['name'];
        $file_loc = $_FILES['imgFile']['tmp_name'];
        $file_size = $_FILES['imgFile']['size'];
        $file_type = $_FILES['imgFile']['type'];
        $folder = "../upload/";

        move_uploaded_file($file_loc, $folder . $file);

        $sql = "INSERT INTO `article`(`title`, `description`, `img_path`, `type`) VALUES ('$title', '$description', '$file', $type)";
        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        if ($result) {
            header('location: article.php');
        } else {
            $msg = 'unable to insert data';
        }


    }
}

if ($edit) {
    $get_sql = "SELECT * FROM `article` WHERE `id` = $id";
    $res = mysqli_query($conn, $get_sql) or die(mysqli_error());
    if (mysqli_num_rows($res) > 0) {
        $edit_row = mysqli_fetch_assoc($res);
        $edit_title = $edit_row['title'];
        $edit_desc = $edit_row['description'];
        $edit_type = $edit_row['type'];
        $edit_path = $edit_row['img_path'];
    }
}

?>

<form name="navbar" id="navbar" method="post" action="" enctype="multipart/form-data">
<div class="container">
    <div class="col-md-4 col-md-offset-4"  >
        <br><br><br><br>
                    <h1 class="card-title mb-4 mt-1" style="text-align: center">Add</h1><hr>
                        <div class="form-group">
                            <select id="article_type" name="type">
                                <option value='0'>Select Categories</option>
                                <option value="1">Mens wear</option>
                                <option value="2">Womens wear</option>
                                <option value="3">Sports were</option>
                                <option value="3">Kids&Babys were</option>
                            </select>
                        </div>
        <br>
        <div class="form-group">
                            <a class="float-right" href="#"></a>
                            <label>Item details</label>
                            <input placeholder="Item Description" type="name">
                        </div>
                        <div class="form-group">
                            <label><b> Upload Image File</b></label>
                            <span class="glyphicon glyphicon-open-file"></span><br>
                            <br>
                            <input type="file" name="imgFile" >
                            <input type="hidden"  name="path" value="file">
                            <br>
                            <div class="clearfix">
                                <a class="btn btn-danger" href="category.php" >Cancel</a>
                                &nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;
                                <button type="submit" name="upload" class="btn btn-success" >Upload</button>
                            </div>
    </div>
</div>
</form>


</body>
</html>