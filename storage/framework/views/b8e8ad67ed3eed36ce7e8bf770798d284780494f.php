<?php $__env->startSection('title'); ?>
    <?php echo e(__('Verify Email Address')); ?> | <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('subheader'); ?>
    <?php echo e(__('Verify Email Address')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="<?php echo e(route('verification.notice')); ?>" class="kt-subheader__breadcrumbs-link"><?php echo e(__('Verify Email Address')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="kt-portlet">
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            <?php echo $__env->make('layouts.inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

            <?php echo e(__('If you did not receive the email, click')); ?>


            <a href="#" onclick="$('#resend').submit();"><strong><?php echo e(__('here')); ?></strong></a> <?php echo e(__('to request another.')); ?>


            <form id="resend" class="d-none" method="POST" action="<?php echo e(route('verification.resend')); ?>"><?php echo csrf_field(); ?></form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/auth/verify.blade.php ENDPATH**/ ?>