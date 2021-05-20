<div class="w-10/12 my-10 flex">
    <div class="w-5/12 rounded border p-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tickets', [])->html();
} elseif ($_instance->childHasBeenRendered('J6LEuWO')) {
    $componentId = $_instance->getRenderedChildComponentId('J6LEuWO');
    $componentTag = $_instance->getRenderedChildComponentTagName('J6LEuWO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('J6LEuWO');
} else {
    $response = \Livewire\Livewire::mount('tickets', []);
    $html = $response->html();
    $_instance->logRenderedChild('J6LEuWO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <div class="w-7/12 mx-2 rounded border p-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('comments', [])->html();
} elseif ($_instance->childHasBeenRendered('Lio8wCB')) {
    $componentId = $_instance->getRenderedChildComponentId('Lio8wCB');
    $componentTag = $_instance->getRenderedChildComponentTagName('Lio8wCB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Lio8wCB');
} else {
    $response = \Livewire\Livewire::mount('comments', []);
    $html = $response->html();
    $_instance->logRenderedChild('Lio8wCB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div><?php /**PATH /var/www/html/blog/resources/views/livewire/home.blade.php ENDPATH**/ ?>