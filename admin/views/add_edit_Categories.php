<?php 
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Edit Category</h4>
    </div>
    <div class="card-body">
        <div class="container">
            <form method="post" action="<?php echo $formAction; ?>">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                       <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Danh mục cha</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="parent_id" style="width: 200px;">
                           <option value="0"></option>
                        <?php 
                            //lay cac danh muc cap cha
                            $categories = DB::fetchAll("SELECT * FROM categories where parent_id = 0 order by id desc");
                         ?>
                         <?php foreach($categories as $rows): ?>
                        <option <?php if(isset($record->id) && $rows->id==$record->parent_id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                            <?php 
                                //liet ke cac danh muc cap con thuoc danh muc nay
                                $subCategory = DB::fetchAll("SELECT * FROM categories where parent_id=".$rows->id." order by id desc");
                             ?>
                         <?php endforeach; ?>
                        </select>
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