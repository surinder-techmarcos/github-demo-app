<!DOCTYPE html>
<html>
   <head>
      <title><?php echo e($data['data']['businessName']); ?> Invoice</title>
      <meta name="robots" content="noindex">
      <style>
         @page { margin-left: 0px;margin-right: 0; }
         body { margin: 0px; }
         @font-face {
            font-family: 'Avenir';
            src: url("<?php echo e(storage_path('fonts/Avenir-Roman.eot')); ?>");
            src: url("<?php echo e(storage_path('fonts/Avenir-Roman.eot?#iefix") format("embedded-opentype')); ?>"), url("<?php echo e(storage_path('fonts/Avenir-Roman.woff2')); ?>") format("woff2"), url("<?php echo e(storage_path('fonts/Avenir-Roman.woff')); ?>") format("woff"), url("<?php echo e(storage_path('fonts/Avenir-Roman.ttf')); ?>") format("truetype"), url("<?php echo e(storage_path('fonts/Avenir-Roman.svg#Avenir-Roman')); ?>") format("svg");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
         }
         @font-face {
            font-family: 'AvenirHeavy';
            src: url("<?php echo e(storage_path('fonts/AvenirHeavy.eot')); ?>");
            src: url("<?php echo e(storage_path('fonts/AvenirHeavy.eot')); ?>") format("embedded-opentype"), url("<?php echo e(storage_path('fonts/AvenirHeavy.woff2')); ?>") format("woff2"), url("<?php echo e(storage_path('fonts/AvenirHeavy.woff')); ?>") format("woff"), url("<?php echo e(storage_path('fonts/AvenirHeavy.ttf')); ?>") format("truetype"), url("<?php echo e(storage_path('fonts/AvenirHeavy.svg#AvenirHeavy')); ?>") format("svg");
            font-display: swap;
         }
         @font-face {
            font-family: 'AvenirBlack';
            src: url("<?php echo e(storage_path('fonts/AvenirBlack.eot')); ?>");
            src: url("<?php echo e(storage_path('fonts/AvenirBlack.eot')); ?>") format("embedded-opentype"), url("<?php echo e(storage_path('fonts/AvenirBlack.woff2')); ?>") format("woff2"), url("<?php echo e(storage_path('fonts/AvenirBlack.woff')); ?>") format("woff"), url("<?php echo e(storage_path('fonts/AvenirBlack.ttf')); ?>") format("truetype"), url("<?php echo e(storage_path('fonts/AvenirBlack.svg#AvenirBlack')); ?>") format("svg");
            font-display: swap;
         }
         @font-face {
            font-family: 'Helvetica';src: url('<?php echo e(storage_path("fonts/custom/Helvetica-Bold.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/Helvetica-Bold.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/Helvetica-Bold.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/Helvetica-Bold.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/Helvetica-Bold.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/Helvetica-Bold.svg#Helvetica-Bold")); ?>') format('svg');
            font-weight: bold;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Helvetica';src: url('<?php echo e(storage_path("fonts/custom/HelveticaMedium.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/HelveticaMedium.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/HelveticaMedium.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/HelveticaMedium.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/HelveticaMedium.ttf")); ?>') format('truetype") }}'), url('<?php echo e(storage_path("fonts/custom/HelveticaMedium.svg#HelveticaMedium")); ?>') format('svg');
            font-weight: 500;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Helvetica';src: url('<?php echo e(storage_path("fonts/custom/Helvetica.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/Helvetica.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/Helvetica.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/Helvetica.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/Helvetica.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/Helvetica.svg#Helvetica")); ?>') format('svg');
            font-weight: normal;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Times New Roman Cyr';src: url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT-Bold.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT-Bold.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT-Bold.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT-Bold.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT-Bold.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT-Bold.svg#TimesNRCyrMT-Bold")); ?>') format('svg');
            font-weight: bold;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Times New Roman Cyr';src: url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/TimesNRCyrMT.svg#TimesNRCyrMT")); ?>') format('svg');
            font-weight: normal;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Arial';src: url('<?php echo e(storage_path("fonts/custom/ArialMT.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/ArialMT.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/ArialMT.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/ArialMT.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/ArialMT.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/ArialMT.svg#ArialMT")); ?>') format('svg');
            font-weight: normal;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Arial';src: url('<?php echo e(storage_path("fonts/custom/Arial-Mdm.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/Arial-Mdm.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/Arial-Mdm.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/Arial-Mdm.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/Arial-Mdm.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/Arial-Mdm.svg#Arial-Mdm")); ?>') format('svg');
            font-weight: 500;font-style: normal;font-display: swap;
         }
         @font-face {
            font-family: 'Arial';src: url('<?php echo e(storage_path("fonts/custom/Arial-BoldMT.eot")); ?>');
            src: url('<?php echo e(storage_path("fonts/custom/Arial-BoldMT.eot")); ?>') format('embedded-opentype'), url('<?php echo e(storage_path("fonts/custom/Arial-BoldMT.woff2")); ?>') format('woff2'), url('<?php echo e(storage_path("fonts/custom/Arial-BoldMT.woff")); ?>') format('woff'), url('<?php echo e(storage_path("fonts/custom/Arial-BoldMT.ttf")); ?>') format('truetype'), url('<?php echo e(storage_path("fonts/custom/Arial-BoldMT.svg#Arial-BoldMT")); ?>') format('svg');
            font-weight: bold;font-style: normal;font-display: swap;
         }
         .avenir, .avenir .normal-txt {font-family: 'Avenir';font-weight: normal;}
         .avenir .med-txt {font-family: 'AvenirHeavy';font-weight: normal;}
         .avenir .bold-txt {font-family: 'AvenirBlack';font-weight: normal;}

         .helvetica, .helvetica .normal-txt {font-family: 'Helvetica';font-weight: normal;}
         .helvetica .med-txt {font-family: 'Helvetica';font-weight: 500;}
         .helvetica .bold-txt {font-family: 'Helvetica';font-weight: bold;}

         .arial, .arial .normal-txt {font-family: 'Arial';font-weight: normal;}
         .arial .med-txt {font-family: 'Arial';font-weight: 500;}
         .arial .bold-txt {font-family: 'Arial';font-weight: bold;}

         .times, .times .normal-txt {font-family: 'Times New Roman Cyr';font-weight: normal;}
         .times .med-txt {font-family: 'Times New Roman Cyr';font-weight: bold;}
         .times .bold-txt {font-family: 'Times New Roman Cyr';font-weight: bold;}
         .text-note p {margin: 0;}
      </style>
   </head>
   <body style="margin: 0;padding: 0;">
      <div style="max-width: 736px;margin: 0 auto;color: #444444;" class="<?= $data['hiddenFromData']['font'] ?>">
         <div style="padding: 20px; background-color: rgba(<?= $data['hiddenFromData']['bg_color']['red'] ?>, <?= $data['hiddenFromData']['bg_color']['green'] ?>, <?= $data['hiddenFromData']['bg_color']['blue'] ?>, 0.1);">
            <p style="font-size: 30px;line-height: 1.4;margin: 0;text-align: center;color: <?= $data['hiddenFromData']['hexColor'] ?>;" class="bold-txt"><?php echo e($data['data']['invoiceLabel']); ?></p>
            <!-- top sec -->
            <div class="top-info">
               <div style="display: table;width: 100%;margin-bottom: 15px;">
                  <?php if(isset($data['images']['logo'])): ?>
                  <div style="display: table-cell; text-align:left;width: 50%;vertical-align: bottom;">
                     <img src="<?php echo e($data['images']['logo']); ?>" alt="" style="height: auto;width: auto;max-width: 300px;max-height: 65px;">
                  </div>
                   <?php endif; ?>
                  <div style="display: table-cell;width: 50%;font-size: 13px;vertical-align: bottom;">
                     <table style="margin-left: auto;">
                        <tr>
                           <td><label style="padding-right: 10px;width: 120px;" class="med-txt"><?php echo e($data['data']['invoiceNoLabel']); ?></label></td>
                           <td><span><?php echo e($data['data']['invoiceNo']); ?></span></td>
                        </tr>
                        <tr>
                           <td><label style="padding-right: 10px;width: 120px;" class="med-txt"><?php echo e($data['data']['invoiceDateLabel']); ?></label></td>
                           <td><span><?php echo e($data['hiddenFromData']['invoiceDate']); ?></span></td>
                        </tr>
                        <tr>
                           <td><label style="padding-right: 10px;width: 120px;" class="med-txt"><?php echo e($data['data']['invoiceDueDateLabel']); ?></label></td>
                           <td><span><?php echo e($data['hiddenFromData']['invoiceDueDate']); ?></span></td>
                        </tr>
                     </table>
                  </div>
               </div>
               <div style="display: table;">
                  <div style="display: table-cell;width: 184px;">
                     <p style="font-size: 13px;margin: 8px 0;" class="med-txt"><?php echo e($data['data']['businessName']); ?></p>
                     <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['businessNumber']); ?></p>
                  </div>
                  <div style="display: table-cell;width: 184px;">
                     <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['businessStreetAddress']); ?></p>
                     <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['businessCityStateZipCode']); ?></p>
                  </div>
                  <div style="display: table-cell;width: 184px;">
                     <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['businessEmail']); ?></p>
                     <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['website']); ?></p>
                  </div>
               </div>
               <div style="margin-bottom: 15px;margin-top: 15px;margin-left: 0;margin-right: 0;">
                  <div style="display: table;width: 100%;">
                     <div style="display: table-cell;width: 50%;padding-right: 10px;">
                        <div style="padding: 25px;background-color: rgba(60, 83, 243, 0.07);border-radius: 5px;">
                           <h2 style="font-size: 14px;margin: 0 0 10px;color: <?= $data['hiddenFromData']['hexColor'] ?>;" class="bold-txt"><?php echo e($data['data']['billToLabel']); ?></h2>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['billToClientName']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['billToMobileNumber']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['billToEmail']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['billToStreetAddress']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['billToCityStateZipCode']); ?></p>
                        </div>
                     </div>
                      <?php if($data['hiddenFromData']['shipToStatus'] == 'true'): ?>  
                     <div style="display: table-cell;width: 50%;padding-left: 10px;">
                        <div style="padding: 25px;background-color: rgba(60, 83, 243, 0.07);border-radius: 5px;">
                           <h2 style="font-size: 14px;margin: 0 0 10px;color: <?= $data['hiddenFromData']['hexColor'] ?>;" class="bold-txt"><?php echo e($data['data']['shipToLabel']); ?></h2>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['shipToClientName']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['shipToNumber']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['shipToEmail']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['shipToStreetAddress']); ?></p>
                           <p style="font-size: 13px;margin: 8px 0;"><?php echo e($data['data']['shipToCityStateZipCode']); ?></p>
                        </div>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <!-- top sec -->
            <div class="table-sec">
               <div class="iv-table">
                  <div class="table-responsive">
                     <table style="font-size:13px;width: 100%;border-collapse: collapse;border-bottom-left-radius: 8px;overflow: hidden;border-bottom-right-radius: 8px;">
                        <thead>
                           <tr>
                              <th style="color: #fff;background: <?= $data['hiddenFromData']['hexColor'] ?>;text-align: left;padding: 0.75rem;border-top-left-radius: 8px;"><?php echo e($data['data']['descriptionLabel']); ?></th>
                              <th style="color: #fff;background: <?= $data['hiddenFromData']['hexColor'] ?>;text-align: left;padding: 0.75rem;"><?php echo e($data['data']['qtyLabel']); ?></th>
                              <th style="color: #fff;background: <?= $data['hiddenFromData']['hexColor'] ?>;text-align: left;padding: 0.75rem;"><?php echo e($data['data']['priceLabel']); ?></th>
                              <th style="color: #fff;background: <?= $data['hiddenFromData']['hexColor'] ?>;text-align: left;padding: 0.75rem;border-top-right-radius: 8px;padding-right: 25px;"><?php echo e($data['data']['amountLabel']); ?></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $data['data']['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataResult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> :
                           <tr>   
                              <td style="border-bottom: none;padding: .75rem;background: rgba(60, 83, 243, 0.07);">
                                 <p style="margin: 0;"><?php echo e($dataResult['itemDescription']); ?></p>
                              </td>
                              <td style="border-bottom: none;padding: .75rem;background: rgba(60, 83, 243, 0.07);">
                                 <p style="margin: 0;"><?php echo e($dataResult['quantity']); ?></p>
                              </td>
                              <td style="border-bottom: none;padding: .75rem;background: rgba(60, 83, 243, 0.07);">
                                 <p style="margin: 0;"><?php echo e($dataResult['price']); ?></p>
                              </td>
                              <td style="border-bottom: none;padding: .75rem;background: rgba(60, 83, 243, 0.07);padding-right: 25px;">
                                 <p style="margin: 0;"><?php echo e($dataResult['amount']); ?></p>
                              </td>
                           </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                         
                        </tbody>
                     </table>
                  </div>
               </div>
               <div style="display: table;width: 100%;margin-top: 20px;">
                  <div style="display: table-cell;">
                  <?php if(isset($data['data']['note'])): ?>
                     <h2 style="font-size: 14px;margin: 0 0 10px;color: <?= $data['hiddenFromData']['hexColor'] ?>;" class="bold-txt"><?php echo e($data['data']['noteLabel']); ?></h2>
                     <div class="text-note" style="max-width: 320px;margin:0;font-size: 13px;"><?php echo $data['data']['note']; ?></div>
                     <?php endif; ?> 
                  </div>
                  <div style="display: table-cell;width: 280px;">
                     <table class="total-sec" style="width: 100%;margin-left: auto;border-collapse: collapse;">
                        <tbody>
                            <?php if(isset($data['hiddenFromData']['subTotal'])): ?>
                           <tr>
                              <td style="padding: 5px 0;font-size: 14px;"><?php echo e($data['data']['subTotalLabel']); ?></td>
                              <td style="text-align: right;font-size: 13px;"><?php if( $data['hiddenFromData']['subTotal'] == 0){ echo '0.0'; } else { echo $data['hiddenFromData']['subTotal'];  } ?></td>
                           </tr>
                           <?php endif; ?>
                           <?php if($data['hiddenFromData']['GSTFiled']): ?>
                           <tr>
                              <td style="padding: 5px 0;font-size: 14px;"><?php echo e($data['data']['salesLabel']); ?></td>
                              <td style="text-align: right;font-size: 13px;"><?php echo e($data['data']['salesTax']); ?></td>
                           </tr>
                           <?php endif; ?>
                           <?php if($data['hiddenFromData']['othersTaxField']): ?>
                           <tr>
                              <td style="padding: 5px 0;font-size: 14px;"><?php echo e($data['data']['othersTaxLabel']); ?></td>
                              <td style="text-align: right;font-size: 13px;"><?php echo e($data['data']['othersTax']); ?></td>
                           </tr>
                           <?php endif; ?>
                           <?php if($data['hiddenFromData']['shippingField']): ?>
                           <tr>
                              <td style="padding: 5px 0;font-size: 14px;"><?php echo e($data['data']['shippingLabel']); ?></td>
                              <td style="text-align: right;font-size: 13px;"><?php echo e($data['data']['shipping']); ?></td>
                           </tr>
                           <?php endif; ?>

                           <?php if($data['hiddenFromData']['discountField']): ?>
                           <tr>
                              <td style="padding: 5px 0;font-size: 14px;"><?php echo e($data['data']['discountLabel']); ?></td>
                              <td style="text-align: right;font-size: 13px;"><?php echo e($data['data']['discount']); ?></td>
                           </tr>
                           <?php endif; ?>

                           <tr style="border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                              <td style="padding: 10px 18px;padding-left: 0;font-size: 22px;"><?php echo e($data['data']['totalLabel']); ?></td>
                              <td style="padding: 10px 18px;padding-right: 0;text-align: right;font-size: 22px;color: <?= $data['hiddenFromData']['hexColor'] ?>;" class="bold-txt"><?php echo e($data['data']['currencySymbol']); ?> <?php echo e($data['hiddenFromData']['totalAmount']); ?></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div style="position: fixed;bottom: 20px;left: 30px;right: 30px;" class="avenir">
        <table style="width: 100%;">
          <tbody>
            <tr>
              <td style="font-size: 12px;vertical-align: middle;" class="normal-txt">This is an electronically generated document, no signature is required.</td>
              <td style="font-size: 16px;vertical-align: middle;text-align: right;" class="normal-txt">Powered by <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQcAAABJCAYAAAAwjuMPAAAAAXNSR0IB2cksfwAAAAlwSFlzAAALEwAACxMBAJqcGAAAE6tJREFUeJztXWmMHMUV9t+djYT/JGGjSAzhsA0EFso2ay4PR2wCAS93wrXDtVwKXlAwJGB2EEyQIog3YLDhR3bAJtxaJ0YiCoJZkh8J5IcNRCGndpAggSTSLpD8yJ9UqmZqxjXVVa/eq+7eOdxP+mTYqffq1at6X1d1V1cvWZJJJpl0RBhjJQHeRKf9Qctgnn1ZoCjwoMDLArN9gpdVm2TbDlyMWIqOzwusbWIx6uxVEfEZ1mI1nIL9gmY/n7R9oi+9RQ6D+ZWCFFY+JfA/Ad7nkG18UuALaca0FwaBSsqqhsQTE+nHrB4rgaUJ2i4atktJ2Q70p+vHRUsGD155gsC/BPh+hn8KnJRWXHthEKgrqp44hQ75YZJDqRdsB/rT9eOiLoMHr7pM4L8CfD+FbPuVacS2FwZBF5PDfBKzB0v7MnLAyODBqw8X+ESA7+dYEFiWdHx7YRB0MTlITKRkt5SAy3F86vpxsWTwK8dXBXiGOl5POr69MAi6nBzmYtrMW2xm5OATkQynd0FCdhtOTzLGaQ0CdYNtWmCPMejlDcUtmJuKyrdJZUe3Ma3+rqOI8GdGJrOe2OpvY8g22ciB++r22KzEJQdRdtQSa2fbtLhOuoiWMi7k0srSH94ZleZ31TJGpsGLwOAhI9sFeIY2bPcFnSJJk4Pq8DlmH/AmqhBJIG00MRvTnz0+wgLIIWj2wNyzBhQ5sMaMCtM2WWZU0/PWgx0XihjMC8CCp1+xfrv7ZfCQNe8K8AxteNc3aCiSJDkw91UQgrypV3TYi0UOLPp4sFVWoObwBRrUOjmY+oWAeJUAeyWP7kRArIuWuFrrIZCD2ec+YpgK8Lvle0tEIix0QTJ2GxagQUOVpMjBMkjmle1hrYy8ysgredXS+QWLzYKCmQgT2m9NDFt0dR2ZfKNGGXnl3mWU2wO0USeHWUO3SozXUhWj1uDHkoODGOZU4ukxGbX0y2hS5BBADCWj/Lzy2ew71xgptgoNHnoCzxAFPOxokgQ5WAacnAqCj/gsA9z5WNCS6AWET3riLkD+WAhi1FHOJAfTL/TmLKP9NfU3TNIOW5Jm2tO+YbZv6j+XBDlYyAyzlDDHSN4TI7OO+ZbO4KEn8gxRQAGlSlxyYNEr4JyPGDTdSeRADSEHvfyUp6y59reWN8nB8reKzy/NVs1sNzIW5n2PSWR9tnsDQeTAohcDJ6E62rsvyf1+mwRRqf8weNhJPEMUmKBiJQFyMDuP9H6GcSWbd5SJSw4lRPlZDRRyMH3LI+rSY9aa1fh8ZtFZA3UpY5t1ROpRZa3jQtmYN2wUPfWaZLKR6Hc1EuNOJ2G3ghJYRODjkoOeMOS79nKg+BI/kBwWQpMIsBkhB/V3/apYQdjRy09pf/eRg3kzj/yiHIs+Fo7Uo8pFxgWLzhK9xKD09HsT5F2lovyGSJ2Dh53MM0RBCSwi8HHJQe+06QD9tYikCCEH82bZDHVQWmy6yEGfCYCD39KWvPabLw6xiFjZMBMtUo8qZ948tC1Lisg6dTIkE7WqW693asng4afwfsGaDVfzt3//Z96U+x/+cbAtanA9gQ8mBxZdq08z7fVvJMyZQ8lSTwg5SN8WDL2mj2Ms4JVoFzmo3yL3EBA2KsZvvjjovwfPhgLJoRpCDJb6ZgLGiHkBmRXksJb3A7608mxe++Dv3JRN5UeC7IUOCswgIOqaSZsESoh6Ckj/5Pp4L1DXvBqsGzFk4SGHCcNuZPbAomv+vPF7N5ND+5U7vL4k0D/kcOblGyPEIOVXb+7NyCFFctD0ZVJOeYhCYostqTU7EDnIqa8+Uyla9CsuffV7r5AD6WWzFMZIZUluWYH3A9ZfMWElh1++tTfIXuigwAwCoq65rKiw6OYkKvKWemKRg8XnovLVRhboTVCW3/VYzhm/mbGKtKHLycGMVTGwvmTGSG7ZqbwfMLTqHP7+hx9FlxXf3xpkL3RQYAZBgL53oMWVJMnBYdsc+CVHWR85mARQ1H7TZw17HfZ95KDXb33si2jv2kBysN3DKdp0Lbb0+zG7QvyOSG75abxfMDI63kYQ5a1PBttKJLhKEiAHPbGcV92YPqZGDsr+UmMAW58E+MhBldFJoKrZb9sq7dD1kYP5KHNDQFu3hJCD+ttwCEEYMYn1intLOp3Q3YpEgqskAXIwt0EXiPoF5jm0NYQcVCJXFTCvD3vjgCSHyPLBsF0DfPCRg3lDk0TGovxBLLpPIVKPKmuNh6UvvP3BohvlwN2UFv3oGMktP51niIISWETg45KDeSMOvRa2EIs1iQPJQffJm0RJkYMq1/ZCFvPcqNT0qEsbCdT2aaVbtSS2qx5nPCzJDr7NqnTaZmYMv8Xe3F1Zqf+QW3EGD8XQ6lG+7srbgvVdWHHGZXWE6o+cd33dtzg+oEYCUuKSg80GQ2yGsgywGlDW3ASDmQlUDJ2Cp/xeny8EcrBdXTnzvwCGSVrbFmiQIMTvB7DGI9umD7HIQf1ue3EOevHKTPKqjyBYdKv2vviFJs+mBx5rre3l/gKZkHFJQSb0G2/ubdmV/01JcumDvtfhkSdf6htyUHbMK5q8OthOIZIdPm1JGt+VRx/UcsCMsfZNMuZrv+b0ft7hT15LHMpVe5YYD6ddTQdV1kKsrXhLItDKHcQaL7fpCZbmK9s+gjDLN31eapTLW8ZI3fdWodyKr3EqRs67IfJUoPbBR2Q7JnbO/CJit7z1KZTu0Orz6j6Ysn7sO0G+OEdXgJiDAImSxY68urv2Eexh9iltkxi8a1DmP9xk1qJjS6J5tu9ehO0tReuTBGWPQg7m7AGcNSgdCpGEHJoyha0HQw6qnI0goNmRWV4niiqL3hNpothmKHfEOk5F+dEd1j0FI+ffSLbVxNDx51tt1kkHof/2e3+x6ktfQ/yBBg1VkiKHQHsy2ShnIEAJMevQKTL7Nmpr8ngGNpocVHl9nV1BlEeTgyo/imzbAmt/rJoYOaiy5kUBPM+DNYge2yd7rWMkd8R6ToWLHNaP3U621cSmB7ZbbTZI5yZQd4dlxtFODnR/fIOGIip5Zokoemzm1QCwzSRkwsirRyHQ32E1cCuGT84tvawxqykB/khSyCPqnsLUp5Uf1cpj7KNjbLSt2Ye2xCqZiYqpxxwXCB92YftD05lw+L2g7LlnlLkjRTIQ4SSH4u1kW03YlgRN2bpjxqk3fteDTr0WOQT4AwU9k0z2C8kdeSanovzoTgc5bCLbkrjklnvBBK8vLSx6IxfcBOo1yGFnkE+d7pdMMum45I78OqfCTQ53kG1J7H7t194kH7ng5jadFeuKfOHTfyPJge5Tp/slk0w6LrmjzuJUlB972k4OV91BtrVi3VXeBJeydceuls7Qmov42+/9FaUnfQ1pY6f7JZNMOi6dJgeZ9BipLy2Uzo5dr6J0MnLIJJMYkjvqbE6FmxzuJNvCLA2aMnLht511w+RAb2On+yWTTDouua9+g1NRfuwndnK4+rskO+N3b7Ha+eQzO2FASwmXjvQ1pI2d7pdMMum4dJIcXMnuIg2IGEYuvCUjh0wSkcE8GxWYEagKbBGIdWhuz0ru6HM4FeVtLnL4HtrGyEX2Y93e//Dj+u+7X/8NmhzGN0/VdazkIHwNaWOn+yWTzsjgIWumLJ9HnBfY/wgid/S5nIrytmcAcsDZ2PnT1xzJ/Ez99/HNP0IRw9adP2vZhOxRkXSc1a7DtTYkXVcmYTK4rDAswB2odNq/RZfc0Rs4FW5yuAulP3Tipc5kl7/5yjRFzi50u25yoLcx6Tg7trB699RnsniSO2L9BLClPpUTuLpacseIZCDCSQ7X3BVLX84m9HK7q+6lxTt/nONDJ13aVt5JDgFtTDrOGTl0v4gZ4wQwm3S+Sdq3kjtmlFNR3vasgxzuRunXPvwYpT+++WFruU8++w8fufjWiF07OTxLbp9E0nHOyKH7JXfsRXkB7kCp0/4tuuSGz+NUlLc7yOHazV7dS259wKorZwJm2aGTL68TAbYeKzkIX0PamHScM3LoDRlYdXlRgBuY7bRfHZHc8PmcivL25wBygHXf+O3vrLrj9zxiLS//3iQI+a+rnISdHJ4jt08i6Thn5NA7MrDmmrxASaHYaX86JotJDivOip4g1Ux6SG/o5CvqtuW/ULmMHDLJJEHJHXsBp8JJDtfdA+ptffplq578e4gfJpzkEGAr6TiHkgPlEag63EN+4XlSYUb9i/pOJaZO81ATgs1CEo9yVRvXam2cZo3vRDTbGevRMOAn+jQth82mv1s0fyfTeJRtGQdVFadmjHBtyR17IaeivP15BzlMOnWGThlzvkex4uwbyT7YYCeH54NspdBhoeTg1VODQXa+62zAJuQgKSB8dZ1BKEH6wKuyZx642naSEtJGgdkPRLVhXiVgPsBXl81Zop288sHXJ01MY/rGU6eMkXmQrwtziizcZA/cnXXCTQ4lp8745KNWnd3Vt8j1u+AmB7qtOJ3k6LhUyEENCOwAbGKLp84CNKgC2g6RDXgEviI+7IC3Af3NCVVfbHJgjWPjqH2ikwRpdhYzRtLPjVbDueNEMhBRfhwgB4fO23+Ys+pcctsPyPW7YCUH4WuILUrnIDswcXJg0W8OkAahp94aVC+x7dBBp3lAL077dICHsRp1BpNDzCRtI2BsjFWM5hKocyYSo9xxF3Mqyo+/AJBDtLz8u03e/9s/yHVDsJPDC0G2MB1DkZTIwXbsOwXOqzaDT7hGLy0YvKRwfvCV2T8skzpBxCQHqK9CCIL6QZrYMWqrIMcu4VQ4yWH8Xmv5nbtnreU3PfQkuW4ITnIIsOUbCFRJiRziwvn9Axb9YE3bwCW0G1pSFIG6kxz09sFvrzuIHFjYNy58AD97yNzfMImDfcSfJDlQZahwVUYOyZDDgkpCeZUuKLiOUjdRAuqGBh922utaUizEaPMcaxy5XlDll6o2Q0Tkba+yRSYHhpvlTDHthiPbd/y/79sSRUed0MxOj9GwFqNRZIwafubYNzkV5cdfjE0MO3e/Qa7XBzs5vBhkCxpAIZIiOcgEzgP6vo+yOGcBzP41q+gVBq7bpV8JqFNimsEfc5FJ51tuQfEKIQeoj8DPECp/Sf2jEh2aWUXvH0TrhPQbM5bcym9xKspPxCeHkUvvJNfrg5UchK8htlyBDZWUyMH7+Tdlw/eZO9fSwvy4LopUNH3oKlVw6EA3Qmd8dWp+Q4Mf+jgPiRwYvPxyttOwAT0d4ia5ePoT9fYogiCGBTlcyqkYL7m/ToWRd/5UI9eJge09jE0PPRVkCxNgiqREDiVC/VDSFQA9KMEpH+bVUXOUh6bnciDnCe0dCyG2AHKApvcVgr8TypYNJjlAyz30pirW2OfgJtABkQghkAkeKuuvvy+oTh9M0pI+HnjqtUG2sAEmdEQa5JAn1A8N4gKgBy0NoCswpFdy6EBXRPDRq8PeHJXYAsgB6h/vx4sD2gTN5khnTjB41rNnycCqy3gIDjztOn77D3fw+594iYTl504E1YfF+hvur9cjfZM+htpJoVMTJwdi/dDUteTRdc0AoCswNOPIO3R2ATobKO1V9rYA9ooOHSo5uMqn8s6Mpx/lvYa1RLj9t7yemkEghU7tZXKAHtO5rsAuQnFul4baKnAApb3K3hi1zQmSg7V8XPH0Y6JYMrD6Cp4hihQ6tZfJAboXENlIxeAlRTHttmr2oCujtc0ZOWTkkJEDgRyUvusmWGSdy+CZBvSILSMHf5sWkxyu5BmiSKFTe50coJuFeaOs68lIJbStLFtWNOtbRHI4foxniCKFTu11coDubE9o5aAlCHj3nmU3JDFtgvqxwvbtkI2LYUEORZ4hihQ6tafJQdlwJe8erYxrSeHcLq3pZo8yce0i+RgsIhFqnU7ELkQt0SAv6RtyKAI28qqMa0mB2W7t2wSFXloweElRA/So5FACdCoEfyUxTjpA2QSVx9bplYGRq14R4Bna8EpiAVbSD+Sg7LgeUU54khv7ohY08LHbpw9i8NZgZ3sDyAFabkkUEP767iNQtk9jYwTZaGzLHxi5ekKAZ2jDDZgAU6SPyKHisCFfdnItKdAfhGG4F6+cMwjx2zEMXk6A76NQyUHpQEuLeTO5DV3fOw6RelljlyT0spbvIB9fjCv1ggNrrv6iwKcCPEMdnwl8HgpuiPQROUB2XEkJHgVHabNWjzwo9RhV/gDWeGw57dHztjWQHHxX/uaZlsOajiSFSQ8xSBQcdULLmWaMxpi2zGCN/Se+GC3oOvKc/lsFeIY6bsYNYZr0CzkoW677Ci7kifbzzH/OQQhmEXUH6bJ0DnupeOpM47CXKJEPrLn2WQG+n+N53+AJlT4jB99VS4fzKLgY/oZAJlLax8Qlmaxef1nyJFqxVjRwwnU5gZ8L8P0Ur8oY+AZAqPQZOfhuwukoUmwb9fgOQsFiFkMMqs445LAU6q8kicGIEXUmhycGXUSCPNAFibrYuA/TEXGkn8hB2cNcJb17GxD15GMk3EIA8QWTg2aDMrMyEfJdEElK0AYyX4zw+zEGThxfLrBNoCbA+xQ11cbl1M4IkT4kB98db9zViOY/NgEWVILmA+qJTQ7KjiS1CsPNfJpngJL9NeqkxKimYhT0BbO6DJx4/VKBYYFCn2ClwOfidEKIsMb0r2BDGnoWO0tddgKTCLIXbBdZ76ga2FOKPCvq/1sHqsaw72pL3M/h6f7Oqv8uUfsRWZ8eo4qqbxc1Rv8HVCXBBBpVOD8AAAAASUVORK5CYII=" style="margin-left: 7px;max-width: 90px;height: auto;vertical-align: middle;" ></td>
            </tr>
          </tbody>
        </table>
    </div>
   </body>
</html><?php /**PATH /var/www/invoice/resources/views/pdf-templates/template-2.blade.php ENDPATH**/ ?>