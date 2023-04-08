<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KONECTIVE FUNITURE</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer></script>
    <link rel="stylesheet" href="<?php echo e(asset('CSS/index.css')); ?>">
    <script type="text/javascript" href="<?php echo e(asset('JS/index.js')); ?>" defer></script>
</head>
<body>
    <!-- ========== -->
    <header>
        <section>
            <a href="/">
              <strong>KONECTIVE</strong>FUNITURE
            </a>
            
        </section>
        <section>
            <nav>
                <ul>
                    <li><a href="#" class="btn1">HOME</a></li>
                    <li><a href="##" class="btn1 active1">PRODUCT</a></li>
                    <li><a href="###" class="btn1 active1">FUNITURE SET</a></li>
                    <li><a href="####" class="btn1 active1">POLICY</a></li>
                    <li><a href="######" class="btn1 active1">CONTACT</a></li>
                </ul>
            </nav>
        </section>
        <nav>
          <a href="/login" target="_blank">           
            <div>
              <span><i class="fa-solid fa-user"></i></span>
              <p>Login</p>
            </div>
          </a>
        </nav>
    </header>

    <section>
        <div class="banner1">
            <div class="images">
              <img src="IMAGE/index/banner1.jpg">
              <img src="IMAGE/index/banner2.jpg">
              <img src="IMAGE/index/banner3.jpg">
              <img src="IMAGE/index/banner4.jpg">
              <img src="IMAGE/index/banner5.jpg">
            </div>
      <div class="btm-slides">
              <span onclick="btm_slide(1)"></span>
              <span onclick="btm_slide(2)"></span>
              <span onclick="btm_slide(3)"></span>
              <span onclick="btm_slide(4)"></span>
              <span onclick="btm_slide(5)"></span>
            </div>
      <div class="sliders left" onclick="side_slide(-1)">
              <span class="fas fa-angle-left"></span>
            </div>
      <div class="sliders right" onclick="side_slide(1)">
              <span class="fas fa-angle-right"></span>
            </div>
      </div>
      <!-- ====== -->
      <div class="banner2">
        <img src="IMAGE/index/sidebanner1.jpg">
      </div>
      <div class="banner3">
        <img src="IMAGE/index/sidebanner2.jpg">
      </div>
    </section>
</body>
</html><?php /**PATH /home/vagrant/KONECTIVE-FUNITURE/resources/views/index.blade.php ENDPATH**/ ?>