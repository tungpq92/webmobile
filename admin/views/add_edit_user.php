<?php 
    $layout = "layout.php";
 ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Thêm mới thành viên</h4>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" value="<?php echo isset($record->email)?$record->email:''; ?>" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> name="email" class="form-control" required>
                        <?php if(isset($_GET["email"])): ?>
                           <span style="color:red;margin-top: 5px;"> * Email này đã tồn tại </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
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
