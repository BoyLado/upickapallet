@extends('template-guest.layout')

@section('page_title',$pageTitle)



@section('custom_styles')
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/select2/css/select2.min.css">

<style type="text/css">
  /*INTERNAL STYLES*/
  
</style>

@endsection



@section('page_content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container">
         <center>
            <h2 class="text-danger mb-3 d-none d-lg-block"><b>Sign Up for Season Pass</b></h2>
            <h4 class="text-danger mb-3 d-block d-lg-none"><b>Sign Up for Season Pass</b></h4>
         </center>
         <form id="form_seasonPassRegistration">
            <div class="row mb-2">
               <div class="col-lg-6">

                  <div class="card card-outline card-primary">
                     <div class="card-body">
                        <div class="form-group">
                           <label for="txt_companyName">Company Name (Optional)</label>
                           <input type="text" class="form-control" id="txt_companyName" name="txt_companyName" placeholder="Company Name">
                        </div>

                        <div class="row">
                           <div class="col-lg-6 form-group">
                              <label for="txt_firstName">First Name <span class="text-red">*</span></label>
                              <input type="text" class="form-control" id="txt_firstName" name="txt_firstName" placeholder="First name" required>
                           </div>
                           <div class="col-lg-6 form-group">
                              <label for="txt_lastName">Last Name <span class="text-red">*</span></label>
                              <input type="text" class="form-control" id="txt_lastName" name="txt_lastName" placeholder="Last name" required>
                           </div>
                        </div>

                        <div class="form-group">
                           <label for="txt_completeAddress">Complete Address <span class="text-red">*</span></label>
                           <textarea class="form-control" rows="5" id="txt_completeAddress" name="txt_completeAddress" required></textarea>
                        </div>

                        <div class="row">
                           <div class="col-lg-6 form-group">
                              <label for="txt_emailAddress">Email Address <span class="text-red">*</span></label>
                              <input type="email" class="form-control" id="txt_emailAddress" name="txt_emailAddress" placeholder="Email Address" required>
                           </div>
                           <div class="col-lg-6 form-group">
                              <label for="txt_phoneNumber">Phone Number <span class="text-red">*</span></label>
                              <input type="text" class="form-control" id="txt_phoneNumber" name="txt_phoneNumber" placeholder="Phone Number" required>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-lg-6">
                              
                           </div>
                           <div class="col-lg-6 form-group">
                              <label for="txt_driverLicenseNumber">Driver’s License Number 
                                 <span class="text-red">*</span></label>
                                 <input type="text" class="form-control" id="txt_driverLicenseNumber" name="txt_driverLicenseNumber" placeholder="Driver’s License Number" required>
                           </div>
                        </div>

                        <hr>

                        <div class="row">
                           <div class="col-lg-6 form-group">
                              <label for="txt_userName">User Name 
                                 <span class="text-red">*</span></label>
                                 <input type="text" class="form-control" id="txt_userName" name="txt_userName" placeholder="User Name" required>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-lg-6 form-group">
                              <label for="txt_password">Password <span class="text-red">*</span></label>
                              <input type="password" class="form-control" id="txt_password" name="txt_password" placeholder="Password" required>
                           </div>
                           <div class="col-lg-6 form-group">
                              <label for="txt_confirmPassword">Confirm Password <span class="text-red">*</span></label>
                              <input type="password" class="form-control" id="txt_confirmPassword" name="txt_confirmPassword" placeholder="Confirm Password" required>
                           </div>
                        </div>

                     </div>
                  </div>



               </div>
               <div class="col-lg-6">
                  <div class="card card-outline card-primary">
                     <div class="card-body">
                        <div class="form-group">
                           <label for="txt_referredBy">Referred By (Optional)</label>
                           <input type="text" class="form-control" id="txt_referredBy" name="txt_referredBy" placeholder="Referred By">
                        </div>

                        <div class="form-group">
                           <label for="txt_orderNotes">Order Notes</label>
                           <textarea class="form-control" rows="3" id="txt_orderNotes" name="txt_orderNotes"></textarea>
                        </div>

                        <label lass="gfield_label gform-field-label gfield_label_before_complex">
                           I AGREE TO THE BUYERS CONTRACT
                           <span class="gfield_required">
                              <span class="gfield_required gfield_required_asterisk text-red"> *</span>
                           </span>
                        </label>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="chk_agree" name="chk_agree" value="agree" required>
                           <label class="form-check-label" for="chk_agree">
                              <h5>BY CONSENTING AND BIDDING YOU ARE ACKNOWLEDGING AGREEMENT WITH THE TERMS BELOW.</h5>
                           </label>
                        </div>

                        <div class="mb-3 p-2" style="height: 38.5vh; overflow-y:scroll; width: 100%; border: 1px solid black;">
                           <center><h5>Auction Terms and conditions</h5></center>
                           <p style="text-align: justify;">
                              All items sold in U Pick A Pallet auctions are sold “as is” and we do not accept refunds or exchanges on any auction items. It is your responsibility to fullfill your purchase obligation before exiting the auction. U Pick A Pallet will not be held responsible for any accidents that may occur physical or emotional. All attendees are required to be present with a season pass holder. I consent to U Pick A Pallet season pass holder terms and conditions as well as the terms and conditions applied to U Pick A Pallet LLC. I understand that all items are sold “as is” and I will not attempt to perform any form of chargeback from the use of debit or credit card. I understand and consent to the fee of 4.35 on all debit card purchases. Terms and conditions listed above may included but not limited to any other rules or regulations implied by U Pick A Pallet LLC. Contact customer service at 618-270-4207 for any questions relating to these terms and conditions.
                           </p>
                        </div>

                        <br>

                        <div id="card-container"></div>
                        <input type="hidden" id="txt_productCode" name="txt_productCode" value="asd123">
                        <input type="hidden" id="txt_amount" name="txt_amount" value="19.99">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn_submitPayment">Pay $19.99</button>

                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

@endsection



@section('custom_scripts')

<!-- Plugins -->
<!-- Select2 -->
<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- square payment -->
<script src="https://sandbox.web.squarecdn.com/v1/square.js"></script>

<script src="<?php echo base_url(); ?>/public/assets/js/index.js"></script>

<script type="text/javascript">
// const appId = 'sandbox-sq0idb-os8hvBheMABtzl3HhNLdXA';
// const locationId = 'L9K4W3J739S2N';

// my square account
   const appId = 'sandbox-sq0idb-FLjCK6tr1hOWRUdfSHlGpw';
   const locationId = 'L4Z4BWM9K96AR';

   async function initializeCard(payments) {
      const card = await payments.card();
      await card.attach('#card-container');

      return card;
   }

   async function tokenize(paymentMethod) 
   {
      const tokenResult = await paymentMethod.tokenize();
      if (tokenResult.status === 'OK') 
      {
         return tokenResult.token;
      } 
      else 
      {
         let errorMessage = `Tokenization failed with status: ${tokenResult.status}`;
         if (tokenResult.errors) 
         {
            errorMessage += ` and errors: ${JSON.stringify(
               tokenResult.errors
               )}`;
         }
         throw new Error(errorMessage);
      }
   }

// status is either SUCCESS or FAILURE;
   function displayPaymentResults(status) 
   {
      const statusContainer = document.getElementById('payment-status-container');
      if (status === 'SUCCESS') 
      {
         statusContainer.classList.remove('is-failure');
         statusContainer.classList.add('is-success');
      } 
      else 
      {
         statusContainer.classList.remove('is-success');
         statusContainer.classList.add('is-failure');
      }

      statusContainer.style.visibility = 'visible';
   }

   $(document).ready(async function(){
      if (!window.Square) 
      {
         throw new Error('Square.js failed to load properly');
      }

      let payments;
      try 
      {
         payments = window.Square.payments(appId, locationId);
      } 
      catch 
      {
         const statusContainer = document.getElementById('payment-status-container');
         statusContainer.className = 'missing-credentials';
         statusContainer.style.visibility = 'visible';
         return;
      }

      let card;
      try 
      {
         card = await initializeCard(payments);
      } 
      catch (e) 
      {
         alert('Initializing Card failed', e);
         return;
      }

// Checkpoint 2.
      async function handlePaymentMethodSubmission(event, paymentMethod, thisForm) 
      {
         event.preventDefault();

         if($('#txt_amount').val() == 0)
         {
            alert('Zero');
         }
         else
         {
            try 
            {
// disable the submit button as we await tokenization and make a payment request.
               $('#btn_submitPayment').prop('disabled',true);
               const token = await tokenize(paymentMethod);
               INDEX.signUp(token, thisForm);
            }
            catch (e) 
            {
// cardButton.disabled = false;
               $('#btn_submitPayment').prop('disabled',false);
               alert(e.message);
            }
         }
      }


      $('#form_seasonPassRegistration').on('submit',async function(e){
// e.preventDefault();
         if($('#txt_firstName').val() == "" || $('#txt_lastName').val() == "" || $('#txt_completeAddress').val() == "" || $('#txt_emailAddress').val() == "" || $('#txt_phoneNumber').val() == "" || $('#txt_driverLicenseNumber').val() == "" || $('#txt_password').val() == "" || $('txt_confirmPassword').val() == "" || $('#txt_userName').val() == "")
         {
            if($('#txt_firstName').val() == "")
            {
               $('#txt_firstName').removeClass('is-valid');
               $('#txt_firstName').addClass('is-invalid');
            }
            else
            {
               $('#txt_firstName').removeClass('is-invalid');
               $('#txt_firstName').addClass('is-valid');
            }

            if($('#txt_lastName').val() == "")
            {
               $('#txt_lastName').removeClass('is-valid');
               $('#txt_lastName').addClass('is-invalid');
            }
            else
            {
               $('#txt_lastName').removeClass('is-invalid');
               $('#txt_lastName').addClass('is-valid');
            }

            if($('#txt_completeAddress').val() == "")
            {
               $('#txt_completeAddress').removeClass('is-valid');
               $('#txt_completeAddress').addClass('is-invalid');
            }
            else
            {
               $('#txt_completeAddress').removeClass('is-invalid');
               $('#txt_completeAddress').addClass('is-valid');
            }

            if($('#txt_emailAddress').val() == "")
            {
               $('#txt_emailAddress').removeClass('is-valid');
               $('#txt_emailAddress').addClass('is-invalid');
            }
            else
            {
               $('#txt_emailAddress').removeClass('is-invalid');
               $('#txt_emailAddress').addClass('is-valid');
            }

            if($('#txt_phoneNumber').val() == "")
            {
               $('#txt_phoneNumber').removeClass('is-valid');
               $('#txt_phoneNumber').addClass('is-invalid');
            }
            else
            {
               $('#txt_phoneNumber').removeClass('is-invalid');
               $('#txt_phoneNumber').addClass('is-valid');
            }

            if($('#txt_driverLicenseNumber').val() == "")
            {
               $('#txt_driverLicenseNumber').removeClass('is-valid');
               $('#txt_driverLicenseNumber').addClass('is-invalid');
            }
            else
            {
               $('#txt_driverLicenseNumber').removeClass('is-invalid');
               $('#txt_driverLicenseNumber').addClass('is-valid');
            }

            if($('#txt_userName').val() == "")
            {
               $('#txt_userName').removeClass('is-valid');
               $('#txt_userName').addClass('is-invalid');
            }
            else
            {
               $('#txt_userName').removeClass('is-invalid');
               $('#txt_userName').addClass('is-valid');
            }

            if($('#txt_password').val() == "")
            {
               $('#txt_password').removeClass('is-valid');
               $('#txt_password').addClass('is-invalid');
            }
            else
            {
               $('#txt_password').removeClass('is-invalid');
               $('#txt_password').addClass('is-valid');
            }

            if($('#txt_confirmPassword').val() == "")
            {
               $('#txt_confirmPassword').removeClass('is-valid');
               $('#txt_confirmPassword').addClass('is-invalid');
            }
            else
            {
               $('#txt_confirmPassword').removeClass('is-invalid');
               $('#txt_confirmPassword').addClass('is-valid');
            }
         }
         else
         {
            await handlePaymentMethodSubmission(e, card, this);
         }
      });
   });


   $(document).ready(function(){

      $('#txt_firstName').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_lastName').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_completeAddress').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_emailAddress').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_phoneNumber').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_driverLicenseNumber').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_userName').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_password').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

      $('#txt_confirmPassword').on('keyup',function(){
         if($(this).val() == "")
         {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
         }
         else
         {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
         }
      });

   });
</script>

@endsection

