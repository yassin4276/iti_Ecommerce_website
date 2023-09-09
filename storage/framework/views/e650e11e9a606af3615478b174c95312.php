<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/cart.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php if(session('userid')): ?>
        <header>
        <a href="<?php echo e(route('userindex')); ?>" class="logo">ROBINSON</a>
        <form action="<?php echo e(route('usersearch')); ?>" method="GET" enctype="multipart/form-data">
            <label for="search">Search:</label>
            <input type="text" name="name">
            <input type="submit" value="Search">
        </form>
        <nav class="navigation">
            <a href="<?php echo e(route('usermenproducts')); ?>">Men</a>
            <a href="<?php echo e(route('userwomenproducts')); ?>">Women</a>
            <a href="<?php echo e(route('userprofile',session('userid'))); ?>">Profile</a>
            <a href="<?php echo e(route('viewcart',session('userid'))); ?>">Cart</a>
            <a href="<?php echo e(route('logout')); ?>">Sign out</a>
        </nav>
    </header>
    <h1>My orders:</h1>
    <br>
    <br>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($order->profile_id==session('userid')): ?>
        <div class="orders">
            <h1>Order number:<?php echo e($order->id); ?></h1>
            
            <nav class="navigationn">
                <img src="<?php echo e(URL('photos/' . $order->product->image)); ?>" width="100px">
                <br>
                <form action="<?php echo e(route('deleteorder',$order->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button type="submit" class="delete">
                    <i class="fa-solid fa-trash"></i>
                    delete
                </button>
            </form>
                <?php echo e($order->product->name); ?>

                <br>
                <?php echo e($order->product->information); ?>

                <br>
                <?php echo e($order->product->price); ?>

            </nav>
            
                        
        </div>
        <br>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <footer class="footer">
        <pre class="footer1"><span>ROBINSON</span>     @All rights reserved</pre>
        <div class="social-icons">
            <p>contact us:</p>
            <a href="https://www.facebook.com/profile.php?id=100005050236304"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            
        </div>
    </footer>
    <?php else: ?>
    <h1>Error:must log in first</h1>
    <a href="<?php echo e(route('loginform')); ?>">login</a>
    <?php endif; ?>
    
</body>
</html><?php /**PATH D:\project\ShoeStore-app\resources\views/user/cart.blade.php ENDPATH**/ ?>