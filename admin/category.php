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
<h2 style="text-align: center"><a>In this section Categiries Are</a></h2>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Dashboard</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="category.php">
                  <h4>category<span class="caret"></span></h4></a>
              <ul class="dropdown-menu">
                  <ul class="nav navbar-default">
                      <li><a href="admen.php"><span class="glyphicon glyphicon-tag"></span>Mens Wear</a></li>
                      <li><a href="womenwear.php"><span class="glyphicon glyphicon-tag"></span>Women's wear</a></li>
                      <li><a href="adsport.php"><span class="glyphicon glyphicon-tag"></span>Sports</a></li>
                      <li><a href="adkids.php"><span class="glyphicon glyphicon-tag"></span>Kids Wear</a></li>

                  </ul>
              </ul>
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
      <div style="float: right" >
          <a class="btn btn-primary" href="adform.php">add</a>
          <a class="btn btn-primary" href="update.php">update</a>
          <a class="btn btn-primary" href="deletefile.php">delete</a>
      </div>
    <div class="col-sm-6">
        <div style="text-align: center">
          <h2>  <a href="admen.php">Mens wear</a><br><br>
            <a href="womenwear.php">Womens wear</a><br><br>
            <a href="adkids.php">kids&Babys wear</a><br><br>
            <a href="adsport.php">Sports wear</a>
          </h2>
      </div>
    </div>
  </div>
</div>
</body>
</html>
