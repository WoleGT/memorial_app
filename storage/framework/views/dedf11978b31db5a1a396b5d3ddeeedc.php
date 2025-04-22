<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oluwole George-Taylor Snr.Memorial</title>
  <link rel="icon" href="<?php echo e(asset('profile_pic.jpeg')); ?>">
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    body {
      background-color: #E1E2E4;
    }
    .navbar {
      background-color:  gray;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .host-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
    }
    .card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: none;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container"> 
      <a class="navbar-brand" href="#"><i class="fas fa-glass-cheers"></i> Select your host</a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="tel:+2348023653151" id="rsvp"><i class="fas fa-calendar-check"></i> RSVP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking8.html"><i class="fas fa-chair"></i> Book a Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rsvp.html"><i class="fas fa-location"></i> Get Direction</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hosts Section -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <!-- Host 1 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 1" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 1 - Aunty B'</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px"  onclick="selectHost('Host 1', 'booking1.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 2 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 2" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 2 - Ay.</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 2', 'booking2.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 3 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 3" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 3 - Wale</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 3', 'booking3.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 4 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 4" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 4 - Aunty Shade</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 4', 'booking4.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 5 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 5" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 5 - Labo</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 5', 'booking5.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 6 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 6" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 6 - Junior</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 6', 'booking6.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 7 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 7" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 7 - Folabi</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 7', 'booking7.html')">Select</button>
          </div>
        </div>
      </div>
      <!-- Host 8 -->
      <div class="col-md-3 col-sm-6 mb-4 text-center">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo e(url('profile_pic.jpeg')); ?>" alt="Host 8" class="rounded-circle host-img mx-auto d-block">
            <h5 class="card-title mt-2">Host 8 - George-Taylors</h5>
            <button class="button" style="border:1px solid gray ; border-radius: 5px" onclick="selectHost('Host 8', 'booking8.html')">Select</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function selectHost(hostName, bookingPage) {
      // Optionally, save the selected host in localStorage if you need it in the booking page.
      localStorage.setItem("selectedHost", hostName);
      // Redirect to the specific booking page.
      window.location.href = bookingPage;
    }
  </script>

<footer>
  <a>&copy;<?php echo e(date('Y')); ?> Oluwole George-Taylor Snr. Memorial</a><br>
  <a>site developed by: <a href="https://wolegt.vercel.app/" id="a1">wolegtconsulting.dev</a></a>
  </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/rsvp/index.blade.php ENDPATH**/ ?>