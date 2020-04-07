<?php 
    //ket thua layout1.php de load vao day
    $layout = "Layout.php";
 ?>
 <div class="card">
    <div class="card-header">
        <?php 
            //kiem tra xem don hang da giao chua, neu chua gio thi hien thi nut xac nhan da giao hang
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            $check = DB::fetch("SELECT status FROM orders WHERE id = $id");
        ?>
        <?php if($check->status == 1) : ?>
            <a href="#" class="btn btn-danger">Đã giao hàng</a>
        <?php else: ?>
            <a href="index.php?area=backend&controller=Order&action=sent&id=<?php echo $id; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
        <?php endif; ?>
        <h4 class="card-title" style="margin-top: 20px; text-transform: uppercase;font-weight: bold;">
            Chi tiết đơn hàng
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">STT</th>
                        <th scope="col" class="text-center">Tên sản phẩm</th>
                        <th scope="col" class="text-center">Hình ảnh</th>
                        <th scope="col" class="text-center">Giá</th>
                        <th scope="col" class="text-center">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; foreach($data as $rows): ?>
                        <tr>
                            <th class="align-middle text-center" style="width: 5%;" scope="row"><?php echo $stt; ?></th>
                            <td class="align-middle text-center" style="width: 50%;"><?php echo $rows->name; ?></td>
                            <td class="align-middle text-center">
                                <?php if(file_exists("../assets/upload/products/".$rows->photo)): ?>
                                    <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 50px;height: 80px;">
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center"><?php echo number_format($rows->price,0,'.','.'); ?></td>
                            <td class="align-middle text-center" style="width: 5%;"><?php echo $rows->number; ?></td>
                        </tr>
                    <?php $stt++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>