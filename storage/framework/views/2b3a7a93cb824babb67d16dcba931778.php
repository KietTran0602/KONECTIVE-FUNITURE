<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KONECTIVE FURNITURE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer></script>
    <link rel="icon" href="IMAGE/icon.png">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/index.js','resources/css/index.css','resources/css/contact.css','resources/css/app.css']); ?>
</head>
<body>
    <!-- ========== -->
    <header>
      <?php echo $__env->yieldContent("menu"); ?>
    </header>
    <main>
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <h1 class="text-center">Contact With Us</h1>
        <div class="container-ct">
                 <div class="pic-ct">
                    <img src="IMAGE/Contact-pic.webp">
                </div>
                <div class="form-ct">
                    <form method="get" action="/">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder=" Your Email">
                        </div>
                        <div class="form-group">
                            <label for="title">Your Problem</label>
                            <input type="text" class="form-control" id="problem" name="problem"
                                placeholder="Your Problem">
                        </div>
                        <div class="form-group">
                            <label for="message">Your message</label>
                            <textarea name="message" class="form-control message"></textarea>
                        </div>
                        <button class="bt" name="btnGoiLoiNhan">Send</button>
                    </form>
                </div>
            </div>
        </div> 
        <!-- End block content -->
    </main>
    <section id="map"></section>
    <?php echo $__env->yieldContent('footer'); ?>
</body>
</html><?php /**PATH /home/vagrant/code/KONECTIVE-FUNITURE/resources/views/layouts/contact.blade.php ENDPATH**/ ?>