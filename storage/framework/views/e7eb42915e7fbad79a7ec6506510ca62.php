<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/updateprofileform.css')); ?>">
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
    <br>
    <div class="apply">
        <form action="<?php echo e(route('admineditprofile',$profile->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            
            <input type="text" name="firstname" class="text" value="<?php echo e($profile->firstname); ?>" placeholder="enter your firstname">
            <br>
            
            <input type="text" name="lastname" class="text" value="<?php echo e($profile->lastname); ?>" placeholder="enter your last name">
            <br>
            
            <input type="number" name="age" class="text" value="<?php echo e($profile->age); ?>" placeholder="enter your age">
            <br>
            
            <input type="text" name="email" class="text" value="<?php echo e($profile->email); ?>" placeholder="enter your email">
            <br>
            
            <input type="text" name="password" class="text" value="<?php echo e($profile->password); ?>" placeholder="enter your password">
            <br>
            <label for="">Image:</label>
            <input type="file" name="image">
            <br>
            <input type="submit" value="Edit" class="submit">
            <?php if(session('wmessege')): ?>
                <p class="error">error:<?php echo e(session('wmessege')); ?></p>
            <?php endif; ?>
        </form>
    </div>
    <?php else: ?>
    <h1>Error:must log in first</h1>
    <a href="<?php echo e(route('loginform')); ?>">login</a>
    <?php endif; ?>
    
    
</body>
</html><?php /**PATH D:\project\ShoeStore-app\resources\views/admin/editprofile.blade.php ENDPATH**/ ?>