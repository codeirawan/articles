<div class="modal fade" id="modal-schedule" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="kt_form_1" method="POST" role="form" class="modal-schedule-action">
                <?php echo csrf_field(); ?>

                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Create Interview Schedule')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="tanggal"><?php echo e(__('Date')); ?></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggal" id="tanggal" placeholder="<?php echo e(__('Select')); ?> <?php echo e(__('Date')); ?>" readonly value="<?php echo e(old('tanggal')); ?>" required>

                            <?php $__errorArgs = ['tanggal'];
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

                        <div class="form-group col-sm-6">
                            <label for="waktu"><?php echo e(__('Time')); ?></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="waktu" id="waktu" placeholder="<?php echo e(__('Select')); ?> <?php echo e(__('Time')); ?>" readonly value="<?php echo e(old('waktu')); ?>" required>

                            <?php $__errorArgs = ['waktu'];
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

                        <div class="form-group col-sm-12">
                            <label for="catatan"><?php echo e(__('Note')); ?></label>
                            <textarea id="catatan" name="catatan" class="form-control"><?php echo e(old('catatan')); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#tanggal').datepicker({
        autoclose: true,
        clearBtn: true,
        disableTouchKeyboard: true,
        format: "dd-mm-yyyy",
        language: "<?php echo e(config('app.locale')); ?>",
        startDate: "0d",
        templates: {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        },
        todayBtn: "linked",
        todayHighlight: true
    });

    $('#waktu').timepicker({
        disableFocus: true,
        disableMousewheel: true,
        minuteStep: 1,
        showMeridian: false
    });

    $('#modal-schedule').on('show.bs.modal', function(event){
        $('.modal-schedule-action').attr('action', $(event.relatedTarget).data('href'));
    });
</script>
<?php /**PATH C:\xampp\htdocs\articles\resources\views/employee/recruitment/inc/modal/schedule.blade.php ENDPATH**/ ?>