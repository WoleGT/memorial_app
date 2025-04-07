

<?php $__env->startSection('content'); ?>
    <h1>Admin Panel</h1>

    <h2>Comments</h2>
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><strong><?php echo e($comment->guest_name); ?>:</strong> <?php echo e($comment->content); ?></p>
        <form action="<?php echo e(route('admin.comment.delete', $comment->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h2>Images</h2>
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(asset('storage/' . $image->path)); ?>" width="200">
        <p><?php echo e($image->description); ?></p>
        <form action="<?php echo e(route('admin.image.delete', $image->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h2>Videos</h2>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <video width="320" height="240" controls>
            <source src="<?php echo e(asset('storage/' . $video->path)); ?>" type="video/mp4">
        </video>
        <p><?php echo e($video->description); ?></p>
        <form action="<?php echo e(route('admin.video.delete', $video->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/admin/index.blade.php ENDPATH**/ ?>