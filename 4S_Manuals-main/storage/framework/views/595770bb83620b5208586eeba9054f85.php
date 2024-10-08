<!-- resources/views/components/header.blade.php -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/manual" class="btn btn-download" title="<?php echo e(__('misc.download_manual_alt')); ?>">
            <h1 style="font-size: 3em; font-weight: 700;"><?php echo e(__('misc.homepage_title')); ?></h1>
        </a>
        <?php echo e($introduction_text ?? ''); ?>

    </div>
</div>
<div class="brand-selection">
    <?php $__currentLoopData = range('A', 'Z'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#<?php echo e($letter); ?>"><?php echo e($letter); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH C:\laragon\www\team-b-e-Celestia-investers\4S_Manuals-main\resources\views/components/header.blade.php ENDPATH**/ ?>