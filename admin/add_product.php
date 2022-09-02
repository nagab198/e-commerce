<?php
session_start();
include 'config.php';
include 'header.php';

$msg = "";
$category_name_err = null;
$type_err = null;
$edit = false;

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
        if (isset($_POST['product_name']) && $_POST['product_name'] != '') {
            $sql_true = true;
            $product_name = $_POST['product_name'];
        } else {
            $category_name_err = "Please enter product name";
        }
        if (isset($_POST['type']) && $_POST['type'] != '') {
            $sql_true = true;
            $type = $_POST['type'];
        } else {
            $type_err = "Please enter type ";
        }
        if ($category_name_err == null && $type_err == null) {
            $sql = "INSERT INTO `product`( `name`,`category_id`) VALUES ('$product_name', $type)";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if ($result) {
                header('location: Products.php');
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
            <div class="text-center"><h2>Add a new Product</h2></div>

            <br><br>
            <br>

            <div class="form-group">
                <label for="title">Select Categories</label>
                <select id="type" name="type">
                    <?php
                    $sql = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                            <h2><a></a></h2>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Enter Product Name</label>
                <input placeholder="name...." type="text" name="product_name" id="product_name" required>
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