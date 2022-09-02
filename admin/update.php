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
            color: purple;
        }
    </style>
</head>
<body>
<form>
    <div class="container">
        <div class="col-md-4 col-md-offset-4"  >
            <br><br><br><br>
            <h1 class="card-title mb-4 mt-1" style="text-align: center">Update</h1><hr>
            <div class="form-group">
                <select id="article_type" name="type">
                    <option value='0'>Select Categories</option>
                    <option value="1">Mens wear</option>
                    <option value="2">Womens wear</option>
                    <option value="3">Sports were</option>
                    <option value="3">Kids&Babys were</option>
                </select>
            </div>
            <input name="" class="form-control" placeholder="Email" type="email">
            <br>
            <div class="form-group">
                <a class="float-right" href="#"></a>
                <label>Item details</label>
                <input class="form-control" placeholder="******" type="password">
            </div>
            <div class="form-group">
                <label><b> Upload Image File</b></label>
                <span class="glyphicon glyphicon-open-file"></span><br>
                <br>
                <input type="file" name="imgFile" >
                <input type="hidden"  name="path" value="file">
                <br>
                <div class="clearfix">
                    <a class="btn btn-danger" href="category.php" >Cancel</a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-warning"  href="category.php" >Add</a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-success" href="category.php" >Upload</a>
                </div>
            </div>
        </div>
</form>


</body>
</html>