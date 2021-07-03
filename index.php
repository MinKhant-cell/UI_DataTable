<?php
$conn = mysqli_connect("localhost","root","","trs");
$sql = "SELECT * FROM products";
$query= mysqli_query($conn,$sql);


//time set up
date_default_timezone_set("Asia/Yangon");

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-12 ">
            <div class="my-2">
                <a href="create.php" class="btn btn-outline-primary">Add New Item</a>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>CreatedTime</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row= mysqli_fetch_object($query)){
                        ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->price; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-outline-primary">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?delete=<?php echo $row->id; ?>" class="btn btn-outline-danger">Delete</a>

                            </td>
                            <td><?php echo date('d F Y',strtotime($row->created_at)); ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</body>
</html>
