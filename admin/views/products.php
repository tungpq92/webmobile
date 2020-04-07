<?php 
    //load file layout
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            List Products
            <a class="btn btn-success" href="index.php?controller=products&action=add">Add product</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">STT</th>
                        <th scope="col" class="text-center">Product Name</th>
                        <th scope="col" class="text-center">Category</th>
                        <th scope="col" class="text-center">Images</th>
                        <th scope="col" class="text-center">Hot</th>
                        <th scope="col" class="text-center">Discount</th>
                        <th scope="col" class="text-center">ManHinh</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; foreach($data as $rows): ?>
                        <tr>
                            <th class="align-middle text-center" scope="row"><?php echo $stt; ?></th>
                            <td class="align-middle text-center" style="width: 20%;"><?php echo $rows->name; ?></td>
                            <td class="align-middle text-center">
                                <?php
                                    //truy van truc tiep
                                    //lay bien ket noi
                                    $conn = Connection::getInstance();
                                    //thuc thi cau truy van
                                    $query = $conn->query("SELECT name FROM categories WHERE id=".$rows->category_id);
                                    //lay mot ban ghi
                                    $category = $query->fetch();
                                    echo isset($category->name)?$category->name:"";
                                 ?>
                            </td>
                            <td class="align-middle text-center">
                                <?php if(file_exists("../assets/upload/products/".$rows->photo)): ?>
                                    <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 50px;height: 80px;">
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center">
                                <?php if($rows->hot == 1): ?>
                                    <i class="material-icons">check</i>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center">
                                <?php echo $rows->discount; ?> %
                            </td>
                            <td class="align-middle text-center"><?php echo $rows->ManHinh; ?></td>
                            <td class="align-middle text-center">
                                <a class="btn btn-primary" href="index.php?controller=products&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    <?php $stt++; endforeach; ?>
                </tbody>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item "><a class="page-link active" href="index.php?controller=products&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>