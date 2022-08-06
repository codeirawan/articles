<div class="modal fade" id="modal-validate" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form method="POST" role="form" id="modal-validate-action" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Validate Confirmation')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modal-validate-message"></p>

                    <?php echo $__env->make('employee.recruitment.inc.form.multiple-file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <textarea id="catatan" name="catatan" class="form-control" placeholder="<?php echo e(__('Note')); ?>"><?php echo e(old('catatan')); ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button type="button" class="btn btn-danger" id="btn-gagal"><?php echo e(__('No')); ?></button>
                    <button type="button" class="btn btn-success" id="btn-lolos"><?php echo e(__('Yes')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var id = 0;

    $('#modal-validate').on('show.bs.modal', function(event){
        var key = $(event.relatedTarget).data('key');
        id = $(event.relatedTarget).data('id');

        $('#modal-validate-message').text("<?php echo e(__('Does this ' . $object)); ?> (" + key + ") <?php echo e(__('pass')); ?> ?");
    });

    $('#btn-gagal').click(function() {
        $('#modal-validate-action').attr('action', "<?php echo e(url('recruitment')); ?>/" + id + "/validate/0").submit();
    });

    $('#btn-lolos').click(function() {
        $('#modal-validate-action').attr('action', "<?php echo e(url('recruitment')); ?>/" + id + "/validate/1").submit();
    });
</script><?php /**PATH C:\xampp\htdocs\articles\resources\views/employee/recruitment/inc/modal/validate.blade.php ENDPATH**/ ?>