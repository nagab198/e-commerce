<?php
include 'config.php';
session_start();
$msg = '';

if (isset($_SESSION['user_name']) && isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'ADMIN') {
    header('location: dashboard.php');
}

if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['pswd']) && $_POST['email'] !== '' && $_POST['pswd'] !=='') {
        $email = $_POST['email'];
        $password = md5($_POST['pswd']);

        $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password` ='$password'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if ($rows > 0) {
            $response = mysqli_fetch_array($result);
            $_SESSION['user_name'] = $response['user_name'];
            $_SESSION['email'] = $response['email'];
            $_SESSION['account_type'] = $response['account_type'];
            if ($_SESSION['account_type'] == 'ADMIN') {
                header('location: dashboard.php');
            }else{
                $msg = '<span class="text-danger">Your are not admin</span>';
            }
        } else {
            $msg = '<span class="text-danger">Invalid credentials</span>';
        }
    }else{
        $msg = '<span class="text-danger">Please enter valid details</span>';
    }


}

?>



<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
    .btn btn-primary btn-block
    {
        color: white;
    }
    </style>
</head>
<body>
<div>
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
            <li><a href="home.php">Home</a> </li>
            <li ><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a>
            </li>
        </ul>
    </div>
</nav>
</div>




<form action="" method="post" name="login">

<div class="container">
    <div class="col-md-4 col-md-offset-4"  >
        <br><br><br><br>
                    <h1 class="card-title mb-4 mt-1" style="text-align: center">Log-In</h1><hr>
                        <div class="form-group">
                            <label>Your email</label>
                            <input name="" class="form-control" placeholder="Email" id="email" type="email">
                        </div>


                        <div class="form-group">
                            <a class="float-right" href="#">Forgot?</a>
                            <label>Your password</label>
                            <input class="form-control" placeholder="******" id="pswd" type="password">
                        </div>


                        <div class="form-group">
                            <div class="checkbox">
                                <label> <input type="checkbox"> Save password </label>
                            </div>
                        </div>
                        <div class="form-group">

                                <a href="dashboard.php" class="btn btn-primary" style="color: white"> Log-In </a>
                        </div>

    </div>
</div>
</form>


</body>
</html>