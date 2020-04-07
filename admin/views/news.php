<?php 
    //load file layout
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            List News
            <a class="btn btn-success" href="index.php?controller=news&action=add">Add News</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	<th scope="col" class="align-middle">ID</th>
                        <th scope="col" class="align-middle">Name</th>
                        <th scope="col" class="align-middle">photo</th>
                        <th scope="col" class="align-middle">Descripition</th>
                        <th scope="col" class="align-middle">hot</th>
                        <th scope="col" class="align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $rows): ?>
                        <tr>
                        	<td class="align-middle"style="width:5%;"><?php echo $rows->id; ?></td>
                            <td class="align-middle"style="width:40%;"><?php echo $rows->name; ?></td>
                            <td class="align-middle">
                            	<?php if(file_exists("../assets/upload/products/".$rows->photo)): ?>
                                    <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 50px;height: 80px;">
                                <?php endif; ?>
                            </td>
                            <td class="align-middle" style="width:20%;"><?php echo $rows->description; ?></td>
                            <td class="align-middle">
                            	<?php if($rows->hot == 1): ?>
                                    <i class="material-icons">check</i>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle">
                                <a class="btn btn-primary" href="index.php?controller=news&action=edit&id=<?php echo $rows->id; ?>">Edit</a>
                                <a class="btn btn-danger" href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>