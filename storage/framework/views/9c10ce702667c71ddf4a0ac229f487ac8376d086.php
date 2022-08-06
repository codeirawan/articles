<?php $__env->startSection('title'); ?>
    <?php echo e(__('Role')); ?> | <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset(mix('css/datatable.css'))); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subheader'); ?>
    <?php echo e(__('Role')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="kt-subheader__breadcrumbs-separator"></span><a href="<?php echo e(route('role.index')); ?>" class="kt-subheader__breadcrumbs-link"><?php echo e(__('Role')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="kt-portlet">
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            <?php echo $__env->make('layouts.inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(Laratrust::isAbleTo('create-role')): ?>
                <a href="<?php echo e(route('role.create')); ?>" class="btn btn-primary mb-4">
                    <i class="fa fa-plus"></i> <?php echo e(__('New Role')); ?>

                </a>
            <?php endif; ?>

            <table class="table table-striped- table-bordered table-hover" id="kt_table_1"></table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset(mix('js/datatable.js'))); ?>"></script>
    <script src="<?php echo e(asset(mix('js/tooltip.js'))); ?>"></script>
    <script type="text/javascript">
        $('#kt_table_1').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            language: {
                emptyTable: "<?php echo e(__('No data available in table')); ?>",
                info: "<?php echo e(__('Showing _START_ to _END_ of _TOTAL_ entries')); ?>",
                infoEmpty: "<?php echo e(__('Showing 0 to 0 of 0 entries')); ?>",
                infoFiltered: "(<?php echo e(__('filtered from _MAX_ total entries')); ?>)",
                lengthMenu: "<?php echo e(__('Show _MENU_ entries')); ?>",
                loadingRecords: "<?php echo e(__('Loading')); ?>...",
                processing: "<?php echo e(__('Processing')); ?>...",
                search: "<?php echo e(__('Search')); ?>",
                zeroRecords: "<?php echo e(__('No matching records found')); ?>"
            },
            ajax: {
                method: 'POST',
                url: '<?php echo e(route('role.data')); ?>',
                headers: { 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' }
            },
            columns: [
                { title: "<?php echo e(__('Name')); ?>", data: 'display_name', name: 'display_name', defaultContent: '-', class: 'text-center' },
                { title: "<?php echo e(__('Action')); ?>", data: 'action', name: 'action', defaultContent: '-', class: 'text-center', searchable: false, orderable: false }
            ],
            drawCallback: function() {
                $('.btn-tooltip').tooltip();
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/user/role/index.blade.php ENDPATH**/ ?>