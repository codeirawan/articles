<?php $__env->startSection('title'); ?>
    <?php echo e(__('Create')); ?> <?php echo e(__('Role')); ?> | <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('subheader'); ?>
    <?php echo e(__('Create')); ?> <?php echo e(__('Role')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="<?php echo e(route('role.index')); ?>" class="kt-subheader__breadcrumbs-link"><?php echo e(__('Role')); ?></a>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="<?php echo e(route('role.create')); ?>" class="kt-subheader__breadcrumbs-link"><?php echo e(__('Create')); ?> <?php echo e(__('Role')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row" data-sticky-container>
    <div class="col-lg-9">
        <form class="kt-form" id="kt_form_1" action="<?php echo e(route('role.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="kt-portlet" id="kt_page_portlet">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title"><?php echo e(__('Create')); ?> <?php echo e(__('Role')); ?></h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="<?php echo e(route('role.index')); ?>" class="btn btn-secondary kt-margin-r-10">
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

                            <div class="form-group form-group-last">
                                <label for="nama"><?php echo e(__('Name')); ?></label>
                                <input id="nama" name="nama" type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required placeholder="<?php echo e(__('role_name')); ?>" value="<?php echo e(old('nama')); ?>">

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

                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                    <div class="kt-section">
                        <div class="kt-section__body">
                            <h3 class="kt-section__title kt-section__title-lg"><?php echo e(__('Permissions')); ?></h3>

                            <?php $__currentLoopData = $permissionGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h5>
                                    <?php echo e(__($group)); ?>

                                    <div class="pull-right" style="padding-right: 9px;">
                                        <span class="kt-switch kt-switch--sm kt-switch--icon kt-switch--primary kt-switch--outline">
                                            <label>
                                                <input type="checkbox" class="check-all" data-group="<?php echo e($group); ?>">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </h5>
                                <table class="table">
                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="w-100 align-middle"><?php echo e(__($permission->display_name)); ?></td>
                                            <td class="align-middle">
                                                <span class="kt-switch kt-switch--sm kt-switch--icon kt-switch--primary kt-switch--outline">
                                                    <label class="mb-0">
                                                        <input type="checkbox" value="<?php echo e($permission->id); ?>" data-group="<?php echo e($group); ?>" name="hak_akses[<?php echo e($group); ?>][<?php echo e($i); ?>]" <?php echo e(old('hak_akses.' . $group . '.' . $i) == $permission->id ? 'checked' : ''); ?>>
                                                        <span class="m-0"></span>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-3">
        <div class="kt-portlet sticky" data-sticky="true" data-margin-top="130" data-sticky-for="1023" data-sticky-class="kt-sticky">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div data-scroll="true" class="kt-scroll" style="height: calc(100vh - 130px); overflow: hidden;">
                    <div class="kt-portlet__content">
                        <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-nav--v3 kt-margin-t-20 kt-margin-b-20 nav nav-tabs" role="tablist">
                            <?php $__currentLoopData = $permissionGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link active index" href="#<?php echo e(str_replace(' ' , '-', $group)); ?>" data-index="<?php echo e($group); ?>">
                                        <span class="kt-nav__link-text"><?php echo e(__($group)); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset(mix('js/form/validation.js'))); ?>"></script>
    <script type="text/javascript">
        $('.check-all').change(function() {
            var group = $(this).data('group');

            if ($(this).is(':checked'))
                $('[data-group="' + group + '"]').attr('checked', '');
            else
                $('[data-group="' + group + '"]').removeAttr('checked');
        });
        $('.index').click(function() {
            index = $(this).data('index');
            jQuery("html, body").animate({
                scrollTop: $('[data-group="' + index + '"]').offset().top - 210
            }, "slow");
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/user/role/create.blade.php ENDPATH**/ ?>