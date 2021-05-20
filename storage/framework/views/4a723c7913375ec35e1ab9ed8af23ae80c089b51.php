<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | Livewire</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
        <?php echo \Livewire\Livewire::styles(); ?>

        <!-- <script src="<?php echo e(url('vendor/livewire/livewire.js')); ?>"></script> -->
        <?php echo \Livewire\Livewire::scripts(); ?>

    </head>
    <body  class="flex justify-center">
        <div class="w-10/12 my-10 flex">
        
            <!-- <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('counter')->html();
} elseif ($_instance->childHasBeenRendered('RBVwBgA')) {
    $componentId = $_instance->getRenderedChildComponentId('RBVwBgA');
    $componentTag = $_instance->getRenderedChildComponentTagName('RBVwBgA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RBVwBgA');
} else {
    $response = \Livewire\Livewire::mount('counter');
    $html = $response->html();
    $_instance->logRenderedChild('RBVwBgA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> -->
            <div class="w-5/12 rounded border p-2">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tickets', [])->html();
} elseif ($_instance->childHasBeenRendered('VM3VNFA')) {
    $componentId = $_instance->getRenderedChildComponentId('VM3VNFA');
    $componentTag = $_instance->getRenderedChildComponentTagName('VM3VNFA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VM3VNFA');
} else {
    $response = \Livewire\Livewire::mount('tickets', []);
    $html = $response->html();
    $_instance->logRenderedChild('VM3VNFA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div class="w-7/12 rounded border p-2">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('comments', [])->html();
} elseif ($_instance->childHasBeenRendered('NTuEsVN')) {
    $componentId = $_instance->getRenderedChildComponentId('NTuEsVN');
    $componentTag = $_instance->getRenderedChildComponentTagName('NTuEsVN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NTuEsVN');
} else {
    $response = \Livewire\Livewire::mount('comments', []);
    $html = $response->html();
    $_instance->logRenderedChild('NTuEsVN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
        
    </body>
</html>
<?php /**PATH /var/www/html/blog/resources/views/livewire.blade.php ENDPATH**/ ?>