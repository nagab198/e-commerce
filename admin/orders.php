<?php
include 'config.php';
include "header.php";


?>

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
            <?php
            $sql = "SELECT * FROM orders ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($user = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['status'] ?></td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['created_at'] ?></td>
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
