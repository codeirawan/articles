<?php $__env->startSection('title'); ?>
    404 | <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset(mix('css/404.css'))); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<body class="kt-bg-error404-v3 kt-error404-v3--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-error404-v3">
            <div class="kt-error404-v3__content">
                <div class="kt-error404-v3__title"><?php echo e(__('Page Not Found')); ?></div>
                <a href="#" class="kt-error404-v3__button btn btn-pill btn-glow btn-lg btn-widest" onclick="window.history.back();"><?php echo e(__('Return Back')); ?></a>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/errors/404.blade.php ENDPATH**/ ?>