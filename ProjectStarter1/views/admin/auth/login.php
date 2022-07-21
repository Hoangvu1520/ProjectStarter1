<?php require_once('views/admin/layouts/index.php'); ?>
<?php require_once('core/Flash.php'); ?>

<?php startblock('title')?>
    Trang đăng nhập Admin
<?php endblock('title')?>

<?php startblock('content')?>
<div class="container">
    <?php if (Flash::has('error')) { ?>
        <p><?php echo Flash::get('error'); ?></p>
    <?php } ?>
    <form action="<?php echo url('admin/auth/handleLogin') ?>" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>

        <button type="submit" class="btn btn-primary">Đăng nhập</button>

        <a href="<?php echo url('admin/auth/register') ?>">Đăng kí</a>
    </form>
</div>
<?php endblock() ?>