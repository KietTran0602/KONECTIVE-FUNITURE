<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KONECTIVE FURNITURE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer></script>
    <link rel="icon" href="IMAGE/icon.png">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/index.js','resources/css/index.css','resources/css/rechange.css','resources/css/app.css']); ?>
</head>
<body>
    <!-- ========== -->
    <header>
      <?php echo $__env->yieldContent("menu"); ?>
    </header>
    <main>
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
            <h1 class="text-center">Warranty policy - Product return</h1>
            <div class="prm-ct">
                <p>Enjoy quality products and superior service from Konective Furniture. You will no longer worry, Konective Furniture is always willing to solve product problems during use.</p>
            </div>
            <div class="content">
                <div class="rules-rc">
                    <h2>EXCHANGE POLICY</h2>
                    <p>""With the desire to ensure the interests of customers and improve service quality, customer can return or exchange goods for the most comfort and satisfaction at Konective Furniture."
                    </p>
                    <p>
                        <b>
                            1. CASES OF RETURNED OR EXCHANGE GOODS:
                        </b>
                        <ul>
                            <li>The product cannot be brought into the house (narrow stairs, narrow doors, ...)</li>
                            <li>Not enough quantity, not enough set as in the order.</li>
                            <li>Item is defective, not good quality.</li>
                            <li>Products that are not on the list of products are not covered by the warranty.</li>
                            <li>The customer provides confirmation of the purchase at TAV (VAT invoice, delivery note, delivery note)</li>
        
                        </ul>
                    </p>
                    <p>
                        <b>
                            2.CASE OF NOT REFUND OR PAYMENT:
                        </b>
                            <ul>
                                <li>Product is used, dirty, old or damaged.</li>
                                <li>Insufficient invoices.</li>
                                <li>Promotional sales</li>
                            </ul>
                    </p>
                    <p>
                        <b>
                            3.TIME AND PROCEDURES FOR EXCHANGE AND REFUND.
                        </b>
                    </p>
                    <p>
                        "Time allowed to exchange, return goods: Within 3 days from the date of delivery, before the invoice is issued."
                    </p>
                    <p>
                        Procedure for exchange and return:
                    </p>
                    <ul>
                        <li>When you have a request for an exchange or return, please contact the transactional KONECTIVE FURNITURE store or via hotline: 1800 6868</li>
                        <li>KONECTIVE FURNITURE bears the cost of exchange and return services.</li>
                    </ul>
                </div>
                <div class="img-rc">
                    <img src="IMAGE/pic-rc.jpg" width="533px" height="800px">
                </div>
            </div>
                         
        <!-- End block content -->
    </main>
    <?php echo $__env->yieldContent('footer'); ?>
</body>
</html><?php /**PATH /home/vagrant/code/KONECTIVE-FUNITURE/resources/views/layouts/policy.blade.php ENDPATH**/ ?>