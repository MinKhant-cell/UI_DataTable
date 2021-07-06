
<?php include_once "template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="my-5">
                <a href="index.php" class="btn btn-outline-primary">List</a>
                <?php
                if(isset($_POST['save'])){
                    if (createProduct()){
                        echo showAlert('success','Created Product');
                    }else {
                        echo showAlert('danger', 'Created Product fail');
                    }

                }

                ?>

                <form method="post">
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
<?php include_once "template/footer.php"?>

