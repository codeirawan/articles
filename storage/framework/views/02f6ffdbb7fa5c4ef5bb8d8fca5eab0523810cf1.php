<div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title"><?php echo $__env->yieldContent('subheader'); ?></h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="<?php echo e(route('home')); ?>" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <?php echo $__env->yieldContent('breadcrumb'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\articles\resources\views/layouts/inc/content.blade.php ENDPATH**/ ?>