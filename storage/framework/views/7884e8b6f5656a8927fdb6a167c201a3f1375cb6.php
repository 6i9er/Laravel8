<div class=" rounded border p-2>
    <h1 class="text-3xl">Comments</h1>
    <?php $__errorArgs = ['newComment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <div>
        <?php if(session()->has('message')): ?>
            <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
    </div>

    <section>
        <img src='<?php echo e($image); ?>' width='200'>
        <input  type="file" id='image' wire:change='$emit("fileChoosen")' >
    </section>
    <form class="my-4 flex" wire:submit.prevent="addComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."
            wire:model="newComment">
            
            <!-- wire:model.debounce.500ms="newComment"> -->
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white" wire:model="newComment">Add</button>
        </div>
    </form>
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg"><?php if($comment->user_id): ?> <?php echo e($comment->user->name); ?>  <?php else: ?> <?php echo e($comment->creator); ?> <?php endif; ?></p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold"><?php echo e($comment->created_at->diffForHumans()); ?>

                </p>
                <?php if($comment->image): ?>
                    <img src="<?php echo e($comment->imagePath); ?>" width="200"  >
                <?php endif; ?>
            </div>
            <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
                 wire:click="removeComment(<?php echo e($comment->id); ?>)" ></i>
        </div>
        <p class="text-gray-800"><?php echo e($comment->body); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($comments->links()); ?>

    <?php /*{{ $comments->links('pagination-links')}} */ ?>
    

</div>


<script>
console.log(window);


    window.livewire.on('fileChoosen' , postId => {
        let inputField = document.getElementById('image');
        let file = image.files[0];
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload',reader.result)
            console.log(reader.result);
        }
        reader.readAsDataURL(file);


    });

</script><?php /**PATH /var/www/html/blog/resources/views/livewire/comments.blade.php ENDPATH**/ ?>