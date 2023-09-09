<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
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
    <section class="cards" id="shoes">
        
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($product->gender=="men" || $product->gender=="unisex"): ?>
                <div class="content">
            <a href=""><div class="card">
                <div class="image">
                    <img src="<?php echo e(URL('photos/' . $product->image)); ?>" width="100%">
                </div>
                <div class="information">
                    <h1><?php echo e($product->name); ?></h1>
                    <p><?php echo e($product->information); ?></p>
                    <p><?php echo e($product->price); ?>$</p>
                    <br>
                    <button class="edit">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <a href="<?php echo e(route('updateform',$product->id)); ?>">edit</a>
                    </button>
                    <br>
                    <br>
                    <form action="<?php echo e(route('delete',$product->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="delete">
                            <i class="fa-solid fa-trash"></i>
                            delete
                        </button>
                    </form>
                </div>
            </div></a>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        


        
    </section>
    <br>

    <button class="create">
        <i class="fa-solid fa-plus"></i>
        <a href="<?php echo e(route('createproduct')); ?>">create</a>
    </button>
    <br>
    <br>
    
    
    

    

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
</html><?php /**PATH D:\project\ShoeStore-app\resources\views/admin/men.blade.php ENDPATH**/ ?>