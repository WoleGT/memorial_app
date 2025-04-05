 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>

 <style>
         #image1{
            border-radius: 10%;
            padding: 15px
         }

         #image2{
            height: 200px;
            width: 250px;
            border-radius:10px

         }
        
    </style>
 <body style="background-color: #FAFAFA">
 <img src="<?php echo e(url('profile_pic.jpeg')); ?>" width="200" height="200" class="img-fluid"  id="image1"  image alt="Image"/>
 <p>In Loving Memory of</p>
 <h1><span style="font-size:25px">Elder Oluwole Akanni</span> <br>George-Taylor</h1>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a> 
 



<?php $__env->startSection('content'); ?>
    <h2>Upload a photo</h2>
    <form action="<?php echo e(route('images.upload')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="file" required>
        <input type="text" name="description" placeholder="Image Description">
        <button type="submit">Upload</button>
    </form>
    <br>
    <br>
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(Storage::url($image->path)); ?>" width="200" id="image2">
    <p><?php echo e($image->description); ?></p>
    <form action="<?php echo e(route('images.destroy', $image->id)); ?>" method="POST" onsubmit="return confirm('Are you sure?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

</body>
 </html>







<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/media/images.blade.php ENDPATH**/ ?>