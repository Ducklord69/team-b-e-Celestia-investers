<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('head', null, []); ?> 
        <meta name="robots" content="index, nofollow">
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('breadcrumb', null, []); ?> 
        <li>
            <a href="/<?php echo e($brand->id); ?>/<?php echo e(urlencode($brand->name)); ?>/" 
                alt="Manuals for '<?php echo e($brand->name); ?>'" 
                title="Manuals for '<?php echo e($brand->name); ?>'">
                <?php echo e($brand->name); ?>

            </a>
        </li>
        <li>
            <a href="/<?php echo e($brand->id); ?>/<?php echo e(urlencode($brand->name)); ?>/" 
                alt="Manuals for '<?php echo e($brand->name); ?> <?php echo e($manual->type); ?>'" 
                title="Manuals for '<?php echo e($brand->name); ?> <?php echo e($manual->type); ?>'">
                <?php echo e($manual->type); ?>

            </a>
        </li>
        <li>
            <a href="/<?php echo e($brand->id); ?>/<?php echo e(urlencode($brand->name)); ?>/<?php echo e($manual->id); ?>/" 
                alt="View manual for '<?php echo e($brand->name); ?>'" 
                title="View manual for '<?php echo e($brand->name); ?> <?php echo e($manual->type); ?>'">
                View
            </a>
        </li>
     <?php $__env->endSlot(); ?>

    <h1><?php echo e($brand->name); ?> - <?php echo e($manual->type); ?></h1>

    <p>Views: <?php echo e($manual->views); ?></p> <!-- Display the views count -->

    <?php if($manual->locally_available): ?>
        <iframe src="<?php echo e($manual->url); ?>" width="780" height="600" frameborder="0" marginheight="0" marginwidth="0">
            Iframes are not supported<br />
            <a href="<?php echo e($manual->url); ?>" target="new" alt="Download your manual here" title="Download your manual here">
                Click here to download the manual
            </a>
        </iframe>
    <?php else: ?>
        <a href="<?php echo e($manual->url); ?>" target="new" alt="Download your manual here" title="Download your manual here">
            Click here to download the manual
        </a>
    <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\team-b-e-Celestia-investers\4S_Manuals-main\resources\views/pages/manual_view.blade.php ENDPATH**/ ?>