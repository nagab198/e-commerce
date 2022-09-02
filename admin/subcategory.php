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
    .wrap
    {
      list-style: none;
      float: right;
      display: flex;
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
        <li><a href="subcategory.php"><h3>Sub-Category</h3></a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="srord.php">Search Order</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="#">Registered Users</a></li>
      </ul>
    </div>
    <br>
    <br>

    <div class="col-sm-9">
        <div style="float: right" >
            <a class="btn btn-primary">add</a>
            <a class="btn btn-primary">update</a>
            <a class="btn btn-primary">delete</a>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>men's were</th>
                <th>Women's Were</th>
                <th>Sports</th>
                <th>Kids&Babys</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Shirts</td>
                <td>Sarees</td>
                <td>Balls</td>
                <td>Huggis</td>
            </tr>
            <tr>
                <td>Phants</td>
                <td>Leggins</td>
                <td>Bat</td>
                <td>Girl Dress</td>
            </tr>
            <tr>
                <td>Tshirt</td>
                <td>Half Sarees</td>
                <td>Nuts</td>
                <td>Baby Dress</td>
            </tr>
            <tr>
                <td>shorts</td>
                <td>Dresses</td>
                <td>Pads</td>
                <td>Dolls</td>

            </tr>

            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</body>
</html>
