<?php $__env->startSection('content'); ?>
<div style="max-width: 600px;margin: auto;font-family: 'Roboto', sans-serif;">
            <div style="background-color: #0b2033;padding: 15px;text-align: center;">
                <img src="<?php echo e($logo); ?>" alt="" style="max-width: 120px;">
            </div>
​
            <div style="padding: 20px 20px 50px;min-height: 200px;">
                <h3 style="font-size: 25px;">Welcome to Let's Make Invoice</h3>
               <p style="margin-bottom: 20px;"></p>
                <p><?php echo $msg; ?>

    </p>
                
                <p style="margin-top: 40px;">
Best regards, The LetsMakeInvoice Team</p>
            </div>
            <div style="background-color: #f5f5f5;">
                <p style="margin: 0;text-align: center;padding: 15px;color: #585f6b;">© 2023 <a class="link" href="/" style="color: #0b2033;text-decoration: none;">LetsMakeInvoice.com</a> | All Rights Reserved.</p>
            </div>
        </div>
   
    

    

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invoice/resources/views/emails/send-invoice.blade.php ENDPATH**/ ?>