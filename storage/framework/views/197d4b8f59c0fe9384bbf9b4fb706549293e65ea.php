<?php if($paginator->hasPages()): ?>
    <ul class="flex justify-between ">

        <!-- Previous Page -->
        <?php if($paginator->onFirstPage()): ?>
            <li class=" w-16 py-1 px-2 text-center rounded border  bg-gray-100 " >Prev</li>
        <?php else: ?>
            <li class="w-16 py-1 px-2 text-center rounded border cursor-pointer shadow bg-white" wire:click="previousPage">Prev</li>
        <?php endif; ?>

        <!-- Start Page Numbers -->
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Three Dotes Operator -->
            <?php if(is_string($element)): ?>

            <?php endif; ?>
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="w-16 py-1 px-2 text-center rounded border  bg-blue-300" wire:click="gotoPage(<?php echo e($page); ?>)" ><?php echo e($page); ?></li>
                    <?php else: ?>
                        <li class="w-16 py-1 px-2 text-center rounded border cursor-pointer shadow bg-white" wire:click="gotoPage(<?php echo e($page); ?>)"><?php echo e($page); ?></li>
                    <?php endif; ?>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Next Page -->
        <?php if($paginator->hasMorePages()): ?>
            <li class="w-16 py-1 px-2 text-center rounded cursor-pointer border shadow bg-white" wire:click="nextPage">Next</li>
        <?php else: ?>
            <li class="w-16 py-1 px-2 text-center rounded border shadow bg-gray-100" >Next</li>
        <?php endif; ?>
    </ul>
<?php endif; ?><?php /**PATH /var/www/html/blog/resources/views/pagination-links.blade.php ENDPATH**/ ?>