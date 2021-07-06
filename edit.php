
<?php include_once "template/header.php";?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="my-5">
                <a href="index.php" class="btn btn-outline-primary">List</a>
                <?php

                    $id = $_GET['id'];
                    $product= product($id);
                if(isset($_POST['update'])){
                    if (updateProduct()){
                        echo showAlert('success','Updated Product');
                    }else {
                        echo showAlert('danger', 'Updated Product fail');
                    }

                }




                ?>

                <form  method="post">
                    <input type="hidden" name="id" value="<?php echo $product->id;?>">
                    <div class="mb-3">
                        <label  class="form-label">Item Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $product->title;?>">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Item Price</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $product->price;?>">
                    </div>
                    <button class="btn btn-outline-primary" name="update">Update</button>

                </form>
            </div>
        </div>
    </div>

</div>
<?php include_once "template/footer.php";?>


