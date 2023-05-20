<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KONECTIVE FURNITURE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer></script>
    <link rel="icon" href="IMAGE/icon.png">
    @vite(['resources/js/index.js','resources/css/index.css'])
</head>
<body>
    <!-- ========== -->
    <header>
      @yield("menu")
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
</html>