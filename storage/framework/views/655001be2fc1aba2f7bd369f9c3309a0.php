 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <style>
         img{
            border-radius: 50px;
            padding: 15px
         }
        
    </style>

 <body style="background-color: #E1E2E4">
    
 </body>
 </html>
 <img src="<?php echo e(url('profile_pic.jpeg')); ?>" width="200" height="200" class="img-fluid" image alt="Image"/>
 <marquee direction="down" scrollamount="2px" height="30px" style="text-align:center;">In Loving Memory of:</marquee>
 <a style="font-weight:bolder; font-size:35px;"><span style="font-size:25px">Elder Oluwole Akanni</span> <br>George-Taylor</a>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a>
 




<?php $__env->startSection('content'); ?>
    <h2>Submit a Tribute</h3>

    <form action="<?php echo e(route('comments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="guest_name" required placeholder="Your Name">
        <textarea name="content" required placeholder="Write a comment..." rows="3"></textarea>
        <input type="text" name="relationship" placeholder="Your Relationship (e.g., Son, Friend, Colleague)">
        <button type="submit">Submit</button>
    </form>

    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
        <strong><?php echo e($comment->guest_name); ?> (<?php echo e($comment->relationship ?? 'Unknown'); ?>):</strong> 
        <?php echo e($comment->content); ?>

        <br>
        <small>
            Posted on: 
            <?php echo e($comment->commented_at ? \Carbon\Carbon::parse($comment->commented_at)->format('F j, Y, g:i A') : 'No date available'); ?>

        </small>
        </p>
        <form action="<?php echo e(route('comments.destroy', $comment->id)); ?>" method="POST" onsubmit="return confirm('Are you sure?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/comments/index.blade.php ENDPATH**/ ?>