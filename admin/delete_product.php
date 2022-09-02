<?php
include 'config.php';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];

    $sql = "DELETE FROM `product` WHERE `id` = $id ";
    $result = mysqli_query($conn, $sql) or die(mysqli_error());
    if ($result) {
        $msg = 'deleted record';
        header('location: Products.php');
    } else {
        $msg = 'unable to delete data';
    }
}
