<?php $__env->startSection('content'); ?>
<div style="max-width: 600px;margin: auto;font-family: 'Roboto', sans-serif;">
    <div style="background-color: #0b2033;padding: 15px;text-align: center;">
        <img src="<?php echo e($logo); ?>" alt="" style="max-width: 120px;">
    </div>
    ​
    <div style="padding: 20px 20px 50px;min-height: 200px;">
        <h3 style="font-size: 25px;">Welcome to Let's Make Invoice</h3>
        <p style="margin-bottom: 20px;">Dear <?php echo e($user); ?>,</p>
        <?php if(empty($password)): ?>
        <p>Thank you for signing up with LetsMakeInvoice To complete your registration and ensure the security of your account, please click the link below to verify your email address:</p>
        <?php else: ?>
        <p> LetsMakeInvoice admin created your account. To complete your registration and ensure the security of your account, please click the link below to verify your email address:</p>
        <?php endif; ?>

        <div>
            <a href="<?php echo e(env('FRONTEND_URL')); ?>/account-verify/?token=<?php echo e($token); ?>&email=<?php echo e($email); ?>" style="background: #ff3e51;color: #fff;text-decoration: none;border-radius: 50px;padding: 15px 17px;min-width: 120px;display: inline-block;text-align: center;">Verification Link</a>
        </div>
        <?php if(isset($password)): ?>
        <p style="margin-top: 40px;">Your password is: <?php echo e($password); ?></p>
        <?php endif; ?>
        <p style="margin-top: 40px;">If you did not create an account with us, please ignore this email.

            Thank you, The LetsMakeInvoice Team</p>
    </div>
    <div style="background-color: #f5f5f5;">
        <p style="margin: 0;text-align: center;padding: 15px;color: #585f6b;">© 2023 <a class="link" href="/" style="color: #0b2033;text-decoration: none;">LetsMakeInvoice.com</a> | All Rights Reserved.</p>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('emails.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invoice/resources/views/emails/verify-email.blade.php ENDPATH**/ ?>