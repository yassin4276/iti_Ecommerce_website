<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/createproduct.css')); ?>">
</head>
<body>
    <?php if(session('userid')): ?>
        <div class="header">
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
        
    </div>
    <div class="apply">
        <form action="<?php echo e((route('editproduct',$products->id))); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <input type="text" class="text" name="name" value="<?php echo e($products->name); ?>" placeholder="Enter product name">
            <br>
            <input type="text" class="text" name="information" value=<?php echo e($products->information); ?> placeholder="Enter product information">
            <br>
            <select name="gender" class="text">
                <option value="men">men</option>
                <option value="women">women</option>
                <option value="unisex">unisex</option>
            </select>
            <br>
            <input type="number" class="text" name="price" value="<?php echo e($products->price); ?>" placeholder="Enter product price">
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image">
            <br>
            <input type="submit" value="Update" class="submit">
            <?php if(session('messege')): ?>
                <p class="error">error:<?php echo e(session('messege')); ?></p>
            <?php endif; ?>
        </form>
    </div>
    <?php else: ?>
    <h1>Error:must log in first</h1>
    <a href="<?php echo e(route('loginform')); ?>">login</a>
    <?php endif; ?>
    
</body>
</html><?php /**PATH D:\project\ShoeStore-app\resources\views/admin/update.blade.php ENDPATH**/ ?>