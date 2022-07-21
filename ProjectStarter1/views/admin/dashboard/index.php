<?php require_once('core/Auth.php');?>

<?php if(!Auth::loggedIn('user')) { ?>
    <p>Người dùng chưa đăng nhập</p>
<?php } else { ?>
    <p><?php echo Auth::getUser('user')['email'] ?></p>
<?php } ?>