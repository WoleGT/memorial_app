 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>

 <style>
         img{
            border-radius: 10%;
            padding: 15px
         }
        
    </style>
 <body style="background-color: #FAFAFA">
 <img src="<?php echo e(url('profile_pic.jpeg')); ?>" width="200" height="200" class="img-fluid" image alt="Image"/>  
 <p>In Loving Memory of</p>
 <h1><span style="font-size:25px">Elder Oluwole Akanni</span> <br>George-Taylor</h1>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a>

    

    <?php $__env->startSection('content'); ?>
    <h2>Upload a video</h2>

    <form id="uploadForm" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="file" id="videoFile" required>
        <input type="text" name="description" id="description" placeholder="Video Description">
        <button type="submit">Upload</button>
    </form>

    <!-- Progress Bar -->
    <div id="progressContainer" style="display: none; margin-top: 20px;">
        <progress id="progressBar" value="0" max="100" style="width: 100%;"></progress>
        <p id="progressText">Uploading... 0%</p>
    </div>

    <div id="uploadStatus"></div>

    <!-- <h2>Uploaded Videos</h2> -->
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <video width="320" height="240" controls>
            <source src="<?php echo e(asset('storage/' . $video->path)); ?>" type="video/mp4">
        </video>
        <p><?php echo e($video->description); ?></p>
        <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->is_admin): ?>
                <form action="<?php echo e(route('videos.delete', $video->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(auth()->guard()->guest()): ?>
        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
    <?php else: ?>
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin Panel</a></li>
        <li>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit">Logout</button>
            </form>
        </li>
    <?php endif; ?>
    

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData();
            formData.append('file', document.getElementById('videoFile').files[0]);
            formData.append('description', document.getElementById('description').value);
            formData.append('_token', '<?php echo e(csrf_token()); ?>');

            let progressBar = document.getElementById('progressBar');
            let progressContainer = document.getElementById('progressContainer');
            let progressText = document.getElementById('progressText');
            let uploadStatus = document.getElementById('uploadStatus');

            progressContainer.style.display = 'block';

            axios.post('<?php echo e(route("videos.upload")); ?>', formData, {
    headers: {
        'Content-Type': 'multipart/form-data'
    },
    onUploadProgress: function(progressEvent) {
        let percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);
        progressBar.value = percentCompleted;
        progressText.innerText = `Uploading... ${percentCompleted}%`;
    }
})
.then(function(response) {
    uploadStatus.innerHTML = `<p style="color: green;">${response.data.message}</p>`;
    progressText.innerText = "Upload Complete!";
    
    // Reload the page after 2 seconds
    setTimeout(() => {
        location.reload();
    }, 2000);
})
.catch(function(error) {
    uploadStatus.innerHTML = `<p style="color: red;">Upload failed. Please try again.</p>`;
    console.error(error);
});

        });
    </script>
<?php $__env->stopSection(); ?>

</body>
 </html>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\memorial-app\resources\views/media/videos.blade.php ENDPATH**/ ?>