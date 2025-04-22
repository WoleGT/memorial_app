<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keyword" Content="Oluwole George-Taylor Snr. Memorial">
    <meta name="Keyword" Description="Oluwole George-Taylor Snr. Memorial">    
    <title><?php echo $__env->yieldContent('title', 'Memorial Admin Panel'); ?></title>
    
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
    img{
        border-radius: 15%;
        padding: 15px
    }
    
</style>
<body>
<img src="<?php echo e(asset('profile_pic2.jpeg')); ?>" width="200" height="200" class="img-fluid" image alt="Image"/>
 <marquee direction="down" scrollamount="2px" height="30px" style="text-align:center;">In Loving Memory of:</marquee>
 <a style="font-weight:bolder; font-size:30px;"><span style="font-size:25px">Elder Oluwole Akanni</span> George-Taylor</a>
 <h6> 13th February 1948 - 17th January 2025</h6>
 <a>77 YEARS OF FULFILLED LIFE</a>
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