<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
     <title><?php echo e(env('APP_NAME')); ?></title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   </head>
   <body style="margin: 0;">
      <?php echo $__env->yieldContent('content'); ?>
   </body>
</html>
<?php /**PATH /var/www/invoice/resources/views/emails/layouts/default.blade.php ENDPATH**/ ?>