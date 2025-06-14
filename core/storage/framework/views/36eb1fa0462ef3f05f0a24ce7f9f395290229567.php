<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo e(@$general->sitename); ?></title>

    <link rel="shortcut icon" type="image/png" href="<?php echo e(getFile('icon', @$general->favicon)); ?>">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/font-awsome.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/izitoast.min.css')); ?>">

    <!-- Template CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/custom.css')); ?>">

    <style>
        .bg-login{
            background-image: url("<?php echo e(getFile('login', @$general->login_image)); ?>");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        .admin-login-wrapper {
            background: rgb(134 183 233 / 25%);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 12px );
            -webkit-backdrop-filter: blur( 12px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .form-group .control-label, .form-group>label {
            color: #ffffff;
        }
    </style>

</head>

<body>

    <div id="app">
        <div class="main-wrapper bg-login">


            <?php echo $__env->yieldContent('content'); ?>


        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="<?php echo e(asset('asset/admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/admin/modules/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/admin/js/proper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/admin/js/bootstrap.min.js')); ?>"></script>


    <script src="<?php echo e(asset('asset/admin/js/izitoast.min.js')); ?>"></script>

    <!-- Template JS File -->
    <script src="<?php echo e(asset('asset/admin/js/stisla.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/admin/js/scripts.js')); ?>"></script>


    <?php echo $__env->yieldPushContent('script'); ?>



    <?php if(Session::has('success')): ?>
        <script>
            "use strict";
            iziToast.success({
                message: "<?php echo e(session('success')); ?>",
                position: 'topRight'
            });
        </script>
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
        <script>
            "use strict";
            iziToast.error({
                message: "<?php echo e(session('error')); ?>",
                position: 'topRight'
            });
        </script>
    <?php endif; ?>
    <?php if(session()->has('notify')): ?>
        <?php $__currentLoopData = session('notify'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                "use strict";
                iziToast.<?php echo e($msg[0]); ?>({
                    message: "<?php echo e(trans($msg[1])); ?>",
                    position: "topRight"
                });
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(@$errors->any()): ?>
        <script>
            "use strict";
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                iziToast.error({
                message: '<?php echo e(__($error)); ?>',
                position: "topRight"
                });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>


</body>

</html>
<?php /**PATH C:\Users\Usuario\Documents\laravel\Auto tradin1g\core\resources\views/backend/auth/master.blade.php ENDPATH**/ ?>