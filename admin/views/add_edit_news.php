<?php 
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Edit News</h4>
    </div>
    <div class="card-body">
        <div class="container">
            <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>" >
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                       <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Descripition</div>
                    <div class="col-md-10">
                        <textarea name="description" id="description" class="form-control" ></textarea>
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
                <div class="form-group row" style="margin-top: 10px;">
                    <div class="col-sm-10 text-center">
                         <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>