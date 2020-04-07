<?php 
    //load file layout
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            List Users
            <a class="btn btn-success" href="index.php?controller=users&action=add">Add user</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">STT</th>
                        <th scope="col" class="text-center">Fullname</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; foreach ($data as $rows) : ?>
                    <tr>
                        <th class="align-middle text-center" scope="row"><?php echo $stt; ?></th>
                        <td class="align-middle"><?php echo $rows->name; ?></td>
                        <td class="align-middle"><?php echo $rows->email; ?></td>
                        <td class="align-middle text-center">
                            <a class=" btn btn-primary" href="index.php?controller=users&action=edit&id=<?php echo $rows->id; ?>">Edit</a>
                            <a class=" btn btn-danger"href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                    <?php $stt++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>