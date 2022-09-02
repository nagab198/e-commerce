<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
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
        .container-fluid {
            margin-top: 20px;
        }
        .footer
        {
            background:cadetblue;
        }
    </style>
</head>
<body>
   <nav class="navbar-inverse navbar-fixed-top " style="font-weight: bold">
       <div class="container-fluid">
           <ul class="nav navbar-nav navbar-left">
               <form class="navbar-form navbar-left">
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Search" name="search">
                   </div>
                   <button type="submit" class="btn btn-default">Search</button>
               </form>
               <li><a href="login.php">Sign-in</a></li>
               </li>
               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders<span
                       class="caret"></span></a>
               </li>
               <li ><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a>
               </li>

             <li><a href="./admin/logout.php">Logout</a>

             </li>

           </ul>
       </div>
   </nav>
<br>
   <br>
   <br>
   <br>



   <div class="container">
   <nav class=" nav navbar" style="font-weight: bold">
       <div class="col-lg-5">
           <ul class="nav navbar-nav navbar-left">
               <li><a href="reg_form.php">Register</a></li>
               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">category
                   <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                       <ul class="nav navbar-default">
                           <li><a href="men.php"><span class="glyphicon glyphicon-tag"></span>Mens Wear</a></li>
                           <li><a href="women.php"><span class="glyphicon glyphicon-tag"></span>Women's wear</a></li>
                           <li><a href="kids.php"><span class="glyphicon glyphicon-tag"></span>Kid's wear</a></li>
                           <li><a href="sports.php"><span class="glyphicon glyphicon-tag"></span>sports</a></li>

                       </ul>
                   </ul>
               </li>
               <li><a href="#">Products<span class="caret"></span></a>
               <li ><a href="#">Reports</a>
           </ul>
       </div>
   </nav>
   </div>
   <br>
   <br>



   <div class="body">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="./assets/img/baby2.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="./assets/img/m4.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="./assets/img/backgroun2.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev"   >
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


<br>
    <br>
    <br>

    <div class="container-fluid">
        <div class="col-lg-3">
            <img src="./assets/img/men.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/women.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/kids.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/baby.jpg" class="img-responsive"  width="250" height="100">
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-lg-3">
            <img src="./assets/img/mobile1.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/mi.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/samsung1.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/one plus.jpg" class="img-responsive"  width="250" height="250">
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-lg-3">
        <img src="./assets/img/watch4.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
        <img src="./assets/img/watch2.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
        <img src="./assets/img/watch3.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
        <img src="./assets/img/watch1.jpg" class="img-responsive"  width="250" height="250">
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-lg-3">
            <img src="./assets/img/foot1.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/foot2.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/foot3.jpg" class="img-responsive"  width="250" height="250">
        </div>
        <div class="col-lg-3">
            <img src="./assets/img/foot4.jpg" class="img-responsive"  width="250" height="250">
        </div>
    </div>
</div>
</body>
<br>
<br>
<div class="footer">
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>About-us</th>
                <th>Contact-us</th>
                <th>Help</th>
            </tr>
            </thead>
        </table>
    </div>

</div>

</html>