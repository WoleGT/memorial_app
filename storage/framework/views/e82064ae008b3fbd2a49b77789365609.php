<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keyword" Content="Oluwole George-Taylor Snr. Memorial">
    <meta name="Keyword" Description="Oluwole George-Taylor Snr. Memorial">
    <meta name="Keyword" Author="Wolegtconsulting">
    <link ref="icon" scr="<?php echo e(url('/img/Profile-Pic.jpg')); ?>">
    <title><?php echo $__env->yieldContent('title', 'Memorial Admin Panel'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<style>
    body{
        text-align: center;
    }
    #a1{
        text-decoration:none;
    }
    #a1:hover{
        text-decoration:underline;

    }
</style>
<body>
    <header style=padding-top:20px>
        <nav>
            <a href="<?php echo e(route('memorial.index')); ?>" id="a1">Biography</a> |
            <a href="<?php echo e(route('comments.index')); ?>" id="a1">Tributes</a>  |
            <a href="<?php echo e(route('images.index')); ?>" id="a1">Photos</a> |
            <a href="<?php echo e(route('videos.index')); ?>" id="a1">Videos</a> |
            <a href="<?php echo e(route('rsvp.index')); ?>" id="a1">RSVP</a>
           
        </nav>
        
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <br>
    <br>
    <footer>
        <a>&copy;<?php echo e(date('Y')); ?> Oluwole George-Taylor Snr. Memorial</a><br>
        <a>site developed by: <a href="https://wolegt.vercel.app/" id="a1">wolegtconsulting.dev</a></a>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/layouts/master.blade.php ENDPATH**/ ?>