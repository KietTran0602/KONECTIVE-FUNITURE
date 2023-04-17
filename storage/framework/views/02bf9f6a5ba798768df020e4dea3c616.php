<?php $__env->startSection('menu'); ?>
    <section>
        <a href="/"><strong>KONECTIVE</strong>FUNITURE</a>
    </section>
    <section>
        <nav>
            <ul>
                <li><a href="/home" class="btn1">HOME</a></li>
                <li><a href="/store" class="btn1 active1">PRODUCT</a></li>
                <li><a href="###" class="btn1 active1">FUNITURE SET</a></li>
                <li><a href="####" class="btn1 active1">POLICY</a></li>
                <li><a href="######" class="btn1 active1">CONTACT</a></li>
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
<?php echo $__env->make(session('cc'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/KONECTIVE-FUNITURE/resources/views/menu.blade.php ENDPATH**/ ?>