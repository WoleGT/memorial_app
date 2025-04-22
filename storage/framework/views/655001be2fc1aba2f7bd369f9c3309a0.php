 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oluwole George-Taylor Snr Memorial</title>
    <meta name="Keyword" Content="Web App Development, Software Development">
    <meta name="Keyword" Description="Website Development, Custom Website Solutions">
    <meta name="Keyword" Author="wolegtconsulting.dev">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
    <link rel="icon" href="<?php echo e(asset('profile_pic.jpeg')); ?>">
 </head>
 <body style="background-color: #E1E2E4">
    


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

</body>
</html>
 

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/comments/index.blade.php ENDPATH**/ ?>