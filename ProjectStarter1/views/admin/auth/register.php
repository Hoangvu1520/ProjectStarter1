<?php require_once('views/admin/layouts/index.php'); ?>

<?php startblock('title')?>
    Trang đăng ký
<?php endblock('title')?>

<?php startblock('content')?>
<div class="container">
    <?php if (Flash::has('error')) { ?>
        <p><?php echo Flash::get('error'); ?></p>
    <?php } ?>
    <form action="<?php echo url('admin/auth/handleRegister') ?>" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">email</label>
            <input type="text" class="form-control" <?php echo isset($errors['email']) ? 'is-invalid' : '' ?> name="email" id="formGroupExampleInput" placeholder="Example input placeholder">
            <?php if (isset($errors['email'])) { ?>
                <div class="invalid-feedback"><?php echo $errors['email'] ?></div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">password</label>
            <input type="password" class="form-control" <?php echo isset($errors['password']) ? 'is-invalid' : '' ?> name="password" id="formGroupExampleInput" placeholder="Example input placeholder">
            <?php if (isset($errors['password'])) { ?>
                <div class="invalid-feedback"><?php echo $errors['password'] ?></div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Xác nhận password</label>
            <input type="password" class="form-control" <?php echo isset($errors['password_confirmation']) ? 'is-invalid' : '' ?> name="password_confirmation" id="formGroupExampleInput" placeholder="Example input placeholder">
            <?php if (isset($errors['password_confirmation'])) { ?>
                <div class="invalid-feedback"><?php echo $errors['password_confirmation'] ?></div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Đăng kí</button>

        <a href="<?php echo url('admin/auth/register') ?>">Đăng nhập</a>
    </form>
</div>
<?php endblock() ?>