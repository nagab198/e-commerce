<?php

include 'config.php';
include 'header.php';

?>

<div class="left"><h2 style="padding-left: 50px">Category</h2></div>
<br>
<div style="float: right">
    <a class="btn btn-primary" href="add_category.php">add</a>
    <a class="btn btn-primary" href="update.php">update</a>
    <a class="btn btn-primary" href="deletefile.php">delete</a>
</div>
<div class="col-sm-6 text-center">
    <div style="">
        <?php
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <h2><a><?=$row['name'] ?></a></h2>
                <?php
            }
        }
        ?>


    </div>
</div>
</div>
</div>
</body>
</html>
