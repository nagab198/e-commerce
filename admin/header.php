<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-3.3.7.min.css">
    <style>
        .row.content {
            height: 550px;
        }

        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
    </style>
</head>
<body>
<h2 style="text-align: center">Online Shopping Portal</h2>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="dashboard.php"><h3>Dashboard</h3></a></li>
                <li><a href="category.php">Category</a>


                </li>
                <li><a href="subcategory.php">Sub-Category</a></li>
                <li><a href="Products.php">Products</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="srord.php">Search Order</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="reguser.php">Registered Users</a></li>
                <li><a href="#">Total Registered Users</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
