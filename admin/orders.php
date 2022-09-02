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
            .row.content {height: auto;}
        }
    </style>
</head>
<body>
<h2 style="text-align: center">Online Shopping Portal</h2>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="subcategory.php">Sub-Category</a></li>
                <li><a href="Products.php">Products</a></li>
                <li><a href="orders.php"><h3>Orders</h3></a></li>
                <li><a href="srord.php">Search Order</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="#">Registered Users</a></li>
            </ul>
        </div>
        <br>
        <br>

        <div class="col-sm-9">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Mobile</th>
                    <th>Current-Status</th>
                    <th>Order-Details</th>
                    <th>Change-Order</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
</body>
</html>
