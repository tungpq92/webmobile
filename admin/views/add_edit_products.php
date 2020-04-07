<?php 
    //load file layout
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Edit Products</h4>
    </div>
    <div class="card-body">
        <div class="container">
            <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-md-10">
                        <input type="number" min=0 value="<?php echo isset($record->price)?$record->price:'0'; ?>" name="price" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Discount</label>
                    <div class="col-md-10">
                        <input type="number" min=0 max=100 value="<?php echo isset($record->discount)?$record->discount:'0'; ?>" name="discount" class="form-control" required>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Promotion</div>
                    <div class="col-md-10">
                        <textarea name="promotion" id="promotion" class="form-control" ></textarea>
                    </div>
                </div>
                <div class="form-group row" style="margin-top:10px;">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-md-10">
                        <select name="category_id" class="form-control" style="width: 200px;">
                            <?php
                                //lay bien ket noi
                                $conn = Connection::getInstance();
                                //liet ke cap 1
                                $query1 = $conn->query("SELECT * FROM categories WHERE parent_id = 0 order by id desc");
                                foreach($query1 as $rows1):
                            ?>
                            <option <?php if(isset($record->category_id)&&$record->category_id==$rows1->id): ?> selected <?php endif; ?> value="<?php echo $rows1->id; ?>"><?php echo $rows1->name; ?></option>
                            <?php
                                //liet ke cap 2
                                $query2 = $conn->query("SELECT * FROM categories WHERE parent_id=".$rows1->id." order by id desc");
                                foreach($query2 as $rows2):
                             ?>
                                <option <?php if(isset($record->category_id)&&$record->category_id==$rows2->id): ?> selected <?php endif; ?> value="<?php echo $rows2->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows2->name; ?></option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                    </select>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Descripition</div>
                    <div class="col-md-10">
                        <textarea name="description" id="description" class="form-control" ><?php echo isset($record->description)?$record->description:''; ?></textarea>
                        <script>CKEDITOR.replace('description');</script>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Content</div>
                    <div class="col-md-10">
                        <textarea name="content" id="content"><?php echo isset($record->content)?$record->content:''; ?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if (isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">Hot</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Màn Hình</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->ManHinh)?$record->ManHinh:''; ?>" name="ManHinh" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">HDH</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->HDH)?$record->HDH:''; ?>" name="HDH" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Cam Sau</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->CamSau)?$record->CamSau:''; ?>" name="CamSau" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Cam Truoc</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->CamTruoc)?$record->CamTruoc:''; ?>" name="CamTruoc" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">CPU</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->CPU)?$record->CPU:''; ?>" name="CPU" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">RAM</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->RAM)?$record->RAM:''; ?>" name="RAM" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bộ Nhớ Trong</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->BoNhoTrong)?$record->BoNhoTrong:''; ?>" name="BoNhoTrong" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Thẻ Nhớ</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->TheNho)?$record->TheNho:''; ?>" name="TheNho" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pin</label>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->Pin)?$record->Pin:''; ?>" name="Pin" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                         <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>