<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KONECTIVE FURNITURE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer></script>
    <link rel="icon" href="IMAGE/icon.png">
    @vite(['resources/js/index.js','resources/css/index.css','resources/css/app.css'])
</head>
<body>
    <!-- ========== -->
    <header>
      @yield("menu")
    </header>
    @yield('footer')
</body>
</html>