<div class="modal fade" id="modal-cancel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="kt_form_1" method="POST" role="form" class="modal-cancel-action">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Cancel Recruitment')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="alasan"><?php echo e(__('Reason')); ?></label>
                    <textarea id="alasan" name="alasan" class="form-control <?php $__errorArgs = ['alasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required><?php echo e(old('alasan')); ?></textarea>

                    <?php $__errorArgs = ['alasan'];
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-warning"><?php echo e(__('Cancel')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#modal-cancel').on('show.bs.modal', function(event) {
        $('.modal-cancel-action').attr('action', $(event.relatedTarget).data('href'));
    });
</script><?php /**PATH C:\xampp\htdocs\articles\resources\views/employee/recruitment/inc/modal/cancel.blade.php ENDPATH**/ ?>