<?php
session_start();
include 'config.php';
include 'header.php';

$msg = "";
$category_name_err = null;
$edit=false;

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
    if (isset($_POST['upload'])) {
        if (isset($_POST['category_name']) && $_POST['category_name'] != '') {
            $sql_true = true;
            $category_name = $_POST['category_name'];
        } else {
            $category_name_err = "Please enter title";
        }
        if ($category_name_err == null) {
            $sql = "INSERT INTO `categories`( `name`) VALUES ('$category_name')";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if ($result) {
                header('location: category.php');
            } else {
                $msg = 'unable to insert data';
            }
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
        <div class="col-md-4 col-md-offset-4">

            <br><br>
            <div class="text-center"><h2>Add a new Category</h2></div>

            <br><br>
            <br>
            <div class="form-group">

                <label>Enter Category Name</label>
                <input placeholder="name...." type="text" name="category_name" id="category_name" required>
            </div>
            <div class="text-center">
                <div class="form-group ">
                    <a class="btn btn-danger" href="category.php">Cancel</a>
                    <button type="submit" name="upload" class="btn btn-success">Upload</button>
                </div>

            </div>
        </div>
    </div>
</form>


</body>
</html>