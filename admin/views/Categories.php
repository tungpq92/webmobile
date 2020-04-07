<?php 
    //load file layout
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            List Cateogry
            <a class="btn btn-success" href="index.php?controller=categories&action=add">Add category</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="align-middle">Category Name</th>
                        <th scope="col" class="align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $rows): ?>
                        <tr>
                            <td class="align-middle" style="font-weight: bold; text-transform: uppercase;"><?php echo $rows->name; ?></td>
                            <td class="align-middle">
                                <a class="btn btn-primary" href="index.php?controller=categories&action=edit&id=<?php echo $rows->id; ?>">Edit</a>
                                <a class="btn btn-danger" href="index.php?controller=categories&action=edit&id=<?php echo $rows->id; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                            //liet ke cac danh muc cap con thuoc danh muc nay
                            $subCategory = DB::fetchAll("select * from categories where parent_id=".$rows->id." order by id desc");
                        ?>
                        <?php foreach($subCategory as $subRows): ?>
                            <tr>
                                <td style="padding-left: 35px;"><?php echo $subRows->name; ?></td>
                                <td class="align-middle">
                                    <a class="btn btn-primary" href="index.php?controller=categories&action=edit&id=<?php echo $subRows->id; ?>">Edit</a>&nbsp;
                                    <a class="btn btn-danger" href="index.php?controller=categories&action=delete&id=<?php echo $subRows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>