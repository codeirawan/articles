<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset(mix('css/auth.css'))); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">
            <div class="kt-grid__item kt-grid--hor">
                <div class="kt-login-v2__head">
                    <div class="kt-login-v2__logo">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('media/logos/kis-logo-auth.png')); ?>" alt="" />
                        </a>
                    </div>
                    <?php echo $__env->yieldContent('navbar'); ?>
                </div>
            </div>

            <div class="kt-grid__item kt-grid kt-grid--ver kt-grid__item--fluid">
                <div class="kt-login-v2__body">
                    <div class="kt-login-v2__wrapper">
                        <div class="kt-login-v2__container">
                            <div class="kt-login-v2__title">
                                <h3><?php echo $__env->yieldContent('header'); ?></h3>
                            </div>

                            <form method="POST" class="kt-login-v2__form kt-form" autocomplete="off" id="kt_login_form">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </form>

                            <?php echo $__env->yieldContent('footer'); ?>
                        </div>
                    </div>

                    <div class="kt-login-v2__image">
                        <img src="<?php echo e(asset('media/misc/bg_icon.svg')); ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="kt-grid__item">
                <div class="kt-login-v2__footer">
                    <div class="kt-login-v2__info">
                        &copy; 2022 <a href="https://github.com/codeirawan" target="_blank" class="kt-link">codeirawan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.inc.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset(mix('js/auth.js'))); ?>"></script>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/layouts/auth.blade.php ENDPATH**/ ?>