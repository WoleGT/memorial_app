 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body style="background-color: #E1E2E4">
    <style>
         img{
            border-radius: 50px;
            padding: 15px
         }
         .carousel img {
        cursor: pointer;
        }
        .modal-img {
       max-width: 50%;
       height: 50%;
        }
        
    </style>

 <img src="<?php echo e(url('profile_pic.jpeg')); ?>" width="200" height="200" class="img-fluid" image alt="Image"/>
 <marquee direction="down" scrollamount="2px" height="30px" style="text-align:center;">In Loving Memory of:</marquee>
 <a style="font-weight:bolder; font-size:30px;"><span style="font-size:25px">Elder Oluwole Akanni</span> George-Taylor</a>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a>


<?php $__env->startSection('content'); ?>
    

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a>Biography</a>
      <img src="<?php echo e(asset('img/Biography.jpeg')); ?>" class="d-block w-100" alt="Slide 1" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="<?php echo e(asset('img/Biography.jpeg')); ?>">
    </div>
    <div class="carousel-item">
      <a>Funeral Details</a>
      <img src="<?php echo e(url('Burial_Details.jpeg')); ?>" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <a>Order of Funeral Service</a>
      <img src="<?php echo e(url('Order_Funeral_Service.jpeg')); ?>" class="d-block w-100" alt="Slide 3">
      <button href="" style="color:black; border-radius:5px;border:1px white solid">Download PDF</button>
    </div>
    <div class="carousel-item">
      <a>Live Streaming</a>
      <img src="<?php echo e(asset('img/Live_Streaming.jpg')); ?>" class="d-block w-100" alt="Slide 4">
      <button href="" style="color:black; border-radius:5px;border:1px white solid">Watch now</button>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"></button>
  </div>
</div>

<!-- Modal for Zoomed Image -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0">
        <img id="modalImage" src="<?php echo e(asset('img/Biography.jpeg')); ?>" class="modal-img w-100" alt="Zoomed Slide">
      </div>
    </div>
  </div>
</div>



<!-- <h5>Carousal
   <Biography>
      <Funeral Details>
         <Order of program downloan>
            <Watch live streaming <button style="background-color:green; color:white;" onclick="window.location.href='www.instagram.com/wolegt_?upcoming_event_id=18036329114273157';"> Watch Live</button>> -->
</h5>
<h3>Survived by:</h3>
    <a> Wife, Children and Grandchildren </a>

<?php $__env->stopSection(); ?>


<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Update modal image on click
  document.querySelectorAll('[data-bs-toggle="modal"]').forEach(img => {
    img.addEventListener('click', function () {
      const zoomImg = this.getAttribute('data-img');
      document.getElementById('modalImage').src = zoomImg;
    });
  });
</script>


</body>
</html>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/memorial/index.blade.php ENDPATH**/ ?>