<?php $__env->startSection('menu'); ?>
    <section>
        <a href="/"><img src="IMAGE/logo-long.png" alt="#"></a>
    </section>
    <section>
        <nav>
            <ul>
                <li><a href="home" class="<?php echo e((request()->is('/') || request()->is('home')) ? '' : 'active1'); ?>">HOME</a></li>
                <li><a href="product" class="<?php echo e(request()->is('product') ? '' : 'active1'); ?>">PRODUCT</a></li>
                <li><a href="furniture-set" class="<?php echo e(request()->is('furniture-set') ? '' : 'active1'); ?>">FURNITURE SET</a></li>
                <li><a href="policy" class="<?php echo e(request()->is('policy') ? '' : 'active1'); ?>">POLICY</a></li>
                <li><a href="contact" class="<?php echo e(request()->is('contact') ? '' : 'active1'); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </section>
    <?php if(session()->has('username1')): ?>
        <?php echo $__env->make('signout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('signin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($cc, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/KONECTIVE-FUNITURE/resources/views/menu.blade.php ENDPATH**/ ?>