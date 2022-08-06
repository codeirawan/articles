<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <?php echo $__env->yieldContent('style'); ?>
    <!-- Styles -->
    <link href="<?php echo e(asset(mix('css/app.css'))); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('media/logos/kis-favicon.png')); ?>" />
</head>
<?php echo $__env->yieldContent('body'); ?>
</html>
<?php /**PATH C:\xampp\htdocs\articles\resources\views/layouts/master.blade.php ENDPATH**/ ?>