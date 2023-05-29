<?php if($paginator->hasPages()): ?>
    <!-- Pagination -->
    <div class="col-lg-12">
        <ul class="pagination justify-content-center">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item">
                    <span class="page-link"><i class="fa fa-angle-double-left"></i></span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a href="<?php echo e($paginator->Url(1)); ?>">
                        <span class="page-link"><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item"><span class="page-link"><?php echo e($page); ?></span></li>
                        <?php elseif(($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage()): ?>
                            <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php elseif($page == $paginator->lastPage() - 1): ?>
                            <li class="page-item"><span class="page-link"><i class="fa fa-ellipsis-h"></i></span></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a  href="<?php echo e($paginator->Url($paginator->lastPage())); ?>">
                        <span class="page-link"><i class="fa fa-angle-double-right"></i></span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <span class="page-link"><i class="fa fa-angle-double-right"></i></span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- Pagination -->
<?php endif; ?>
<?php /**PATH /home/vagrant/KONECTIVE-FUNITURE/KONECTIVE-FUNITURE/resources/views/list.blade.php ENDPATH**/ ?>