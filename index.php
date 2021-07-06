<?php include_once "template/header.php"?>
<div class="container">

    <div class="row">
        <div class="col-12 ">
            <div class="my-2">
                <a href="create.php" class="btn btn-outline-primary">Add New Item</a>
            </div>
                <?php
                if(isset($_POST['delete'])){
                    $id= $_POST['id'];

                    if (deleteProduct($id)){
                        echo showAlert('success','Deleted Product');
                    }else {
                        echo showAlert('danger', 'Deleted Product fail');
                    }

                }

                ?>


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
                        foreach (products() as $row){
                        ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->price; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-outline-primary">Edit</a>
                            </td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $row->id; ?>" >
                                    <button class="btn btn-outline-danger" name="delete">DELETE</button>
                                </form>
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

<?php include_once "template/footer.php";?>

