<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <li><a href="#"><h3>Dashboard</h3></a></li>
                <li><a href="category.php">Category</a>


                </li>
                <li><a href="subcategory.php">Sub-Category</a></li>
                <li><a href="Products.php">Products</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="srord.php">Search Order</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="reguser.php">Registered Users</a></li>
                <li><a href="#">Total Registered Users</a></li>
            </ul>
        </div>
        <br>
        <br>

        <div class="col-sm-9">
            <div class="well">
                <h4>Total-Orders</h4>
                <p>10 Million</p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Total New-Orders</h4>
                        <p>1 Million</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Total Packed-Orders</h4>
                        <p>1 Million</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Total Dispatched-Orders</h4>
                        <p>1 Million</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Total In-Transit-Orders</h4>
                        <p>30%</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="well">
                        <h4>Total Out For Delivery-Orders</h4>
                        <p>Text</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h4>Total Delivered</h4>
                        <p>Text</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h4>Total Canceled</h4>
                        <p>Text</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="well">
                        <h4>Total Registered Users</h4>
                    </div>
                </div>
            </div>


            <div class="form-group">

                    <a href="../home.php" class="btn btn-primary" style="color: white">Logout</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
