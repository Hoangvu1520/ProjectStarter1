<?php require_once('views/admin/layouts/index.php'); ?>

<?php startblock('title')?>
    Trang đăng ký
<?php endblock('title')?>

<?php startblock('content')?>
<div class="container">
    <?php if (Flash::has('error')) { ?>
        <p><?php echo Flash::get('error'); ?></p>
    <?php } ?>
    <form action="<?php echo url('admin/auth/handleLogin') ?>" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Username</label>
            <input type="text" class="form-control" <?php echo isset($errors['username']) ? 'is-invalid' : '' ?> name="username" id="formGroupExampleInput" placeholder="Example input placeholder">
            <?php if (isset($errors['username'])) { ?>
                <div class="invalid-feedback"><?php echo $errors['username'] ?></div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" name="password_confirmation" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <button type="submit" class="btn btn-primary">Đăng kí</button>

        <a href="<?php echo url('admin/auth/register') ?>">Đăng nhập</a>
    </form>
</div>
<?php endblock() ?>