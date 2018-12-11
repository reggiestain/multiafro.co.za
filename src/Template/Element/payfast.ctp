<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<?php echo $this->Form->create(null,array('id'=>'py-form','url'=>'https://sandbox.payfast.co.za/eng/process'));?>
<!--<form id="pay-form" method="post" action="https://sandbox.payfast.co.za/eng/process">-->
<input type="hidden" name="merchant_id" value="10002820">
<input type="hidden" name="merchant_key" value="q4uwh2sfqc6ap">
<input type="hidden" name="return_url" value="https://8a827893.ngrok.io/users/success">
<input type="hidden" name="cancel_url" value="https://8a827893.ngrok.io/users/cancel">
<input type="hidden" name="notify_url" value="https://8a827893.ngrok.io/users/notify">
<input type="hidden" name="name_first" value="John">
<input type="hidden" name="name_last" value="Doe">
<input type="hidden" name="email_address" value="john@doe.com">
<input type="hidden" name="cell_number" value="0823456789">
<input type="hidden" name="m_payment_id" value="01AB">
<input type="hidden" name="amount">
<input type="hidden" name="item_name" >

<input type="hidden" name="signature" value="">

<br>
<div class="col-md-4 text-center"> 
<button class="btn btn-primary  btn-lg" type="submit">Pay Now</button>
</div>
<!--</form>-->
<?php echo $this->Form->end();?>