<?php 
    //ket thua layout1.php de load vao day
    $layout = "Layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            Danh sách đơn hàng
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center" style="width: 5%;">STT</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Phone</th>
                        <th scope="col" class="text-center">Address</th>
                        <th scope="col" class="text-center">Create</th>
                        <th scope="col" class="text-center" style="width: 5%;">Status</th>
                        <th scope="col" class="text-center" style="width: 5%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; foreach($data as $rows): ?>
                    <tr>
                        <th class="align-middle text-center" scope="row"><?php echo $stt; ?></th>
                        <td class="align-middle text-center" style="width: 20%;"><?php echo $rows->name; ?></td>
                        <td class="align-middle text-center" style="width: 20%;"><?php echo $rows->email; ?></td>
                        <td class="align-middle text-center" style="width: 20%;"><?php echo $rows->phone; ?></td>
                        <td class="align-middle text-center" style="width: 20%;"><?php echo $rows->address; ?></td>
                        <td class="align-middle text-center" style="width: 20%;"><?php echo $rows->create_at; ?></td>
                        <td class="align-middle text-center" style="width: 20%;">
                            <?php 
                                if($rows->status == 0)
                                {
                                    echo "Chưa giao hàng";
                                }
                                else
                                {
                                    echo "Đã giao hàng";
                                }
                             ?>
                        </td>
                        <td class="align-middle text-center" style="width: 20%;"><a href="index.php?controller=Order&action=orderDetail&id=<?php echo $rows->orderID; ?>" class="btn btn-success">Chi tiết</a></td>
                    </tr>
                    <?php $stt++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>