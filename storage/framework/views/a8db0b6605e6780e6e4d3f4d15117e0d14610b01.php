<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $__env->startSection('title'); ?> Skylab <?php echo $__env->yieldSection(); ?></title>
    <?php $__env->startSection('meta_keywords'); ?>
        <meta name="keywords" content=""/>
    <?php echo $__env->yieldSection(); ?> <?php $__env->startSection('meta_author'); ?>
        <meta name="author" content="Jon Doe"/>
    <?php echo $__env->yieldSection(); ?> <?php $__env->startSection('meta_description'); ?>
        <meta name="description"
              content=""/>
    <?php echo $__env->yieldSection(); ?>
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <?php echo $__env->yieldContent('styles'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    
</head>
<body>
<?php echo $__env->make('partials.user_navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
<?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('partials.user_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->yieldContent('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/exchange_language.js')); ?>"></script>s

</body>
</html>
