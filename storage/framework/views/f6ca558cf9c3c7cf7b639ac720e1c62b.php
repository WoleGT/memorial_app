 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body style="background-color: #FAFAFA">
    <style>
         img{
            border-radius: 10%;
            padding: 15px
         }
        
    </style>

 <img src="<?php echo e(url('profile_pic.jpeg')); ?>" width="200" height="200" class="img-fluid" image alt="Image"/>
 <p>In Loving Memory of</p>
 <h1><span style="font-size:25px">Elder Oluwole Akanni</span> <br>George-Taylor</h1>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a>


<?php $__env->startSection('content'); ?>
    
<!-- <h3>Early Life</h3>
<p>Oluwole Akanni George Taylor was born on the 13th February 1948.<br>
 He started his primary school at Baptist School Apapa Road Ebute Metta Lagos, Nigeria in January 1953. <br>
 He later moved to Ibadan in 1958 to continue his primary school at Methodist School, Akintola Road Ibadan.<br> He got
 admission to Mayflower School Ikene in 1961 and passed out of Mayflower school with flying colors.
 <h3>Transition to Adulthood</h3>
 <p>The young and vibrant Oluwole started work at a company in Badagry in which the then Western Nigeria Government had an interest.<br>
 Diligent and intelligent staff he was, this earn him a transfer to the company's headquarters outside the shores of Nigeria and started life in Italy.<br> While in Italy he continued his diligent work ethic and developed enterprenueral skills so much that by the time he would return to Nigeria he was full of business ideas.
 <br>Upon returning to the Country he worked in this company for a little while, joined another company that deals in Paper products as Sales Manager.<br> Shortly afterwards he started his own company -Wole George-Taylor & Co. where he thrived and build a successful brand. He is fondly called 007.</p>
</p> -->
<h3>Survived by:</h3>
    <a> Wife, Children and Grandchildren </a>
  <h3>Funeral</h3>
  <a>Funeral has been schedule to take place on the 24th and 25th April 2025.</a>
  <button style="background-color:green; color:white;" onclick="window.location.href='www.instagram.com/wolegt_?upcoming_event_id=18036329114273157';"> Watch Live</button>



<?php $__env->stopSection(); ?>

</body>
</html>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/memorial/index.blade.php ENDPATH**/ ?>