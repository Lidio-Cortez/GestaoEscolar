<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Styles -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="bg-dark text-light d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <?php echo e($slot); ?>

        </div>
    </body>
</html>
<?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/layouts/guest.blade.php ENDPATH**/ ?>