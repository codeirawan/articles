<div class="form-group form-group-last kt-hidden">
    <div class="alert alert-danger" role="alert" id="kt_form_1_msg">
        <div class="alert-text">
            <?php echo e(__('There are some invalid data, please correct it and try again.')); ?>

        </div>
    </div>
</div>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger" role="alert">
        <div class="alert-text"><?php echo e($error); ?></div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(session('status') || session('resent')): ?>
    <div class="alert alert-success" role="alert">
        <div class="alert-text">
            <?php echo e(session('status') ?: __('A fresh verification link has been sent to your email address.')); ?>

        </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/layouts/inc/alert.blade.php ENDPATH**/ ?>