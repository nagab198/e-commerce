<?php

include 'config.php';
include 'header.php';
?>
    <br>
    <br>

    <div class="col-sm-9">
        <div style="float: right">
            <a href="add_product.php" class="btn btn-primary">add</a>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th class="col-sm-7" style="text-align: center">Product</th>
                <th class="col-sm-7" style="text-align: center">category</th>
                <th style="text-align: center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT product.*, categories.name as c_name FROM product INNER JOIN categories ON product.category_id=categories.id";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td class="text-center"><?= $row['name'] ?></td>
                        <td class="text-center"><?= $row['c_name'] ?></td>
                        <td><a class="btn btn-primary">update</a>
                            <a href="delete_product.php?id=<?= $row['id'] ?>" class="btn btn-primary">delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
<?php
include 'footer.php';

