<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php if(session('userid')): ?>
        <header>
        <a href="<?php echo e(route('adminindex')); ?>" class="logo">ROBINSON</a>
        <form action="<?php echo e(route('search')); ?>" method="GET" enctype="multipart/form-data">
            <label for="search">Search:</label>
            <input type="text" name="name">
            <input type="submit" value="Search">
        </form>
        <nav class="navigation">
            <a href="<?php echo e(route('menproducts')); ?>">Men</a>
            <a href="<?php echo e(route('womenproducts')); ?>">Women</a>
            <a href="<?php echo e(route('adminprofile',session('userid'))); ?>">profile</a>
            <a href="<?php echo e(route('logout')); ?>">Sign out</a>
        </nav>
    </header>
    <div class="info">
       <img src="<?php echo e(URL('photos/'.$profile->image)); ?>" width="100px">
       <p>FirstName:<?php echo e($profile->firstname); ?></p>
       <p>LastName:<?php echo e($profile->lastname); ?></p>
       <p>Email:<?php echo e($profile->email); ?></p>
       <p>Password:<?php echo e($profile->password); ?></p>
       <button><a href="<?php echo e(route('adminupdateprofile',$profile->id)); ?>">Edit</a></button>

        <?php if(session('wmessege')): ?>
                <p class="success"><?php echo e(session('wmessege')); ?></p>
        <?php endif; ?>
    </div>
    <?php else: ?>
    <h1>Error:must log in first</h1>
    <a href="<?php echo e(route('loginform')); ?>">login</a>
    <?php endif; ?>
    

</body>
</html><?php /**PATH D:\project\ShoeStore-app\resources\views/admin/profile.blade.php ENDPATH**/ ?>