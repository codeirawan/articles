<div class="modal fade" id="modal-verify" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" role="form" id="modal-verify-action">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Verify Confirmation')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modal-verify-message"></p>
                    <textarea id="catatan" name="catatan" class="form-control" placeholder="<?php echo e(__('Note')); ?>"><?php echo e(old('catatan')); ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button type="button" class="btn btn-danger" id="btn-no"><?php echo e(__('No')); ?></button>
                    <button type="button" class="btn btn-success" id="btn-yes"><?php echo e(__('Yes')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var id = 0;

    $('#modal-verify').on('show.bs.modal', function(event){
        var key = $(event.relatedTarget).data('key');
        id = $(event.relatedTarget).data('id');

        $('#modal-verify-message').text("<?php echo e(__('Does this ' . $object)); ?> (" + key + ") <?php echo e(__('qualify')); ?> ?");
    });

    $('#btn-no').click(function() {
        $('#modal-verify-action').attr('action', "<?php echo e(url('recruitment')); ?>/" + id + "/verify/0").submit();
    });

    $('#btn-yes').click(function() {
        $('#modal-verify-action').attr('action', "<?php echo e(url('recruitment')); ?>/" + id + "/verify/1").submit();
    });
</script><?php /**PATH C:\xampp\htdocs\articles\resources\views/employee/recruitment/inc/modal/verify.blade.php ENDPATH**/ ?>