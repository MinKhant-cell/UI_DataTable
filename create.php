<?php
$conn = mysqli_connect("localhost","root","","trs");
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
        <div class="col-12 col-lg-4">
            <div class="my-5">
                <a href="index.php" class="btn btn-outline-primary">List</a>

                <form action="save.php" method="post">
                    <div class="mb-3">
                        <label  class="form-label">Item Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Item Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <button class="btn btn-outline-primary" name="save">Save</button>

                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>
