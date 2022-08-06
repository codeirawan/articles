<?php $__env->startSection('title'); ?>
    <?php echo e(__('Create')); ?> <?php echo e(__('Resume Source')); ?> | <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('subheader'); ?>
    <?php echo e(__('Create')); ?> <?php echo e(__('Resume Source')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="<?php echo e(route('master.resume-source.index')); ?>" class="kt-subheader__breadcrumbs-link"><?php echo e(__('Resume Source')); ?></a>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="<?php echo e(route('master.resume-source.create')); ?>" class="kt-subheader__breadcrumbs-link"><?php echo e(__('Create')); ?> <?php echo e(__('Resume Source')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="kt-form" id="kt_form_1" action="<?php echo e(route('master.resume-source.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="kt-portlet" id="kt_page_portlet">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title"><?php echo e(__('Create')); ?> <?php echo e(__('Resume Source')); ?></h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="<?php echo e(route('master.resume-source.index')); ?>" class="btn btn-secondary kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile"><?php echo e(__('Back')); ?></span>
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile"><?php echo e(__('Save')); ?></span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                    <?php echo $__env->make('layouts.inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="form-group">
                        <label for="nama"><?php echo e(__('Name')); ?></label>
                        <input id="nama" name="nama" type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('nama')); ?>">

                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset(mix('js/form/validation.js'))); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/master/resume-source/create.blade.php ENDPATH**/ ?>