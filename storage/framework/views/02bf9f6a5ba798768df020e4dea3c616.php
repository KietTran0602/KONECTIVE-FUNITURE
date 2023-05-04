<?php $__env->startSection('menu'); ?>
    <section>
        <a href="/"><strong>KONECTIVE</strong>FUNITURE</a>
    </section>
    <section>
        <nav>
            <ul>
                <li><a href="home" class="<?php echo e((request()->is('/') || request()->is('home')) ? '' : 'active1'); ?>">HOME</a></li>
                <li><a href="product" class="<?php echo e(request()->is('product') ? '' : 'active1'); ?>">PRODUCT</a></li>
                <li><a href="funiture-set" class="<?php echo e(request()->is('funiture-set') ? '' : 'active1'); ?>">FUNITURE SET</a></li>
                <li><a href="policy" class="<?php echo e(request()->is('policy') ? '' : 'active1'); ?>">POLICY</a></li>
                <li><a href="contact" class="<?php echo e(request()->is('contact') ? '' : 'active1'); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </section>
    <nav>
        <a href="/login">           
        <div>
            <span><i class="fa-solid fa-user"></i></span>
            <p>Login</p>
        </div>
        </a>
    </nav>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($cc, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/KONECTIVE-FUNITURE/resources/views/menu.blade.php ENDPATH**/ ?>