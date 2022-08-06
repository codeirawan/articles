<div class="row">
    <div class="form-group col-sm-5">
        <input type="file" class="form-control" name="file[]" accept="application/pdf,image/*" required>
    </div>
    <div class="form-group col-sm-5">
        <select name="jenis_file[]" class="form-control" required>
            <?php $__currentLoopData = $fileTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fileType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($fileType->id); ?>"><?php echo e($fileType->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group col-sm-2">
        <button type="button" class="btn btn-primary btn-block btn-tooltip" id="btn-add" title="<?php echo e(__('Add')); ?> File">
            <i class="fa fa-plus p-0"></i>
        </button>
    </div>
</div>

<div class="files d-none" id="files">
    <div class="row">
        <div class="form-group col-sm-5">
            <input type="file" class="form-control input-file" accept="application/pdf,image/*">
        </div>
        <div class="form-group col-sm-5">
            <select class="form-control input-file-type">
                <?php $__currentLoopData = $fileTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fileType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($fileType->id); ?>"><?php echo e($fileType->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group col-sm-2">
            <button type="button" class="btn btn-danger btn-block btn-tooltip btn-remove" title="<?php echo e(__('Remove')); ?> File">
                <i class="fa fa-trash p-0"></i>
            </button>
        </div>
    </div>
</div>

<script>
    $('#btn-add').click(function() {
        var template = $('#files');
        var clone = template.clone().removeAttr('id').removeClass('d-none');
        $('.input-file', clone).attr('name', 'file[]');
        $('.input-file-type', clone).attr('name', 'jenis_file[]');
        $('.btn-remove', clone).click(function() {
            $(this).closest('div.files').remove();
        });
        template.before(clone);
    });
</script><?php /**PATH C:\xampp\htdocs\articles\resources\views/employee/recruitment/inc/form/multiple-file.blade.php ENDPATH**/ ?>