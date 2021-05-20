<div>
    <h1 class="text-3xl"> Tickets </h1>
        <div class="rounded border shadow p-3 my-2 <?php echo e(($active == 0) ? 'bg-gray-200' : ''); ?>" wire:click='$emit("selectTicket" , 0)'>
            <p class="text-gray-800">get All Tickets </p>
        </div>
    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="rounded border shadow p-3 my-2 <?php echo e(($active == $ticket->id) ? 'bg-gray-200' : ''); ?>" wire:click='$emit("selectTicket" , <?php echo e($ticket->id); ?>)'>
            <p class="text-gray-800"> <?php echo e($ticket->question); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/blog/resources/views/livewire/tickets.blade.php ENDPATH**/ ?>