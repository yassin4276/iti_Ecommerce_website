<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <div class="header">
        <h1 class="logo">ROBINSON</h1>
        <button class="register"><a href="<?php echo e(route('register')); ?>">Register</a></button>
    </div>
    <div class="apply">
        <form action="<?php echo e(route('login')); ?>" method="GET" enctype="multipart/form-data">
            <input type="text" class="text" name="email" placeholder="enter your email">
            <br>
            <input type="text" class="text" name="password" placeholder="enter tour password">
            <br>
            <input type="submit" class="submit" value="Log in">
            <br>
            <br>
            <?php if(session('messege')): ?>
                <p class="error">error:<?php echo e(session('messege')); ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html><?php /**PATH D:\project\ShoeStore-app\resources\views/auth/login.blade.php ENDPATH**/ ?>