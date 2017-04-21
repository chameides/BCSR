<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon's Rock Templates and Style Guide</title>

    <?php include '_inc/head-js-css-cec.php'; ?>
    
  </head>
  <body>
    <div class="content-wrapper">

  
<?php include '_inc/nav-cec.php'; ?>
    
<div class="container-fluid page-container">
  <div class="column-center">
    
    <h1 class="header-page text-center">Index</h1>
    
      <?php include 'contact-form-fields/contact-form-fields-5signs.php'; ?>

      <!--Begin CTCT Sign-Up Form-->
      <!-- EFD 1.0.0 [Mon Mar 13 13:33:35 EDT 2017] -->
      <link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>
      <div class="ctct-embed-signup">
         <div style="color:#5b5b5b">
            <span id="success_message" style="display:none;">
              <div style="text-align:center;">
                Thanks for signing up!
              </div>
            </span>
            <div class="row"><!-- row inside the col -->
              <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup" id="contactForm" style="border-radius: 0px;">
                <!-- The following code must be included to ensure your sign-up form works properly. -->
                <input data-id="ca:input" type="hidden" name="ca" value="89299ebe-d3ca-4fbe-b530-62cabff63284" />
                <input data-id="source:input" type="hidden" name="source" value="EFD" />
                <input data-id="required:input" type="hidden" name="required" value="list,email,first_name,last_name" />
                <input data-id="url:input" type="hidden" name="url" value="" />
                

                <p data-id="Email Address:p" class="form-group"><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" class="form-control" type="email" name="email" value="" maxlength="80" /></p>

                <p data-id="First Name:p" class="form-group"><label data-id="First Name:label" data-name="first_name" class="ctct-form-required">First Name</label> <input data-id="First Name:input" type="text" class="form-control" name="first_name" value="" maxlength="50" style="border-radius: 0px;" /></p>

                <p data-id="Last Name:p" class="form-group"><label data-id="Last Name:label" data-name="last_name" class="ctct-form-required">Last Name</label> <input data-id="Last Name:input" class="form-control" type="text" name="last_name" value="" maxlength="50" style="border-radius: 0px;" /></p>

                <p data-id="Lists:p" >
                  <label data-id="Lists:label" data-name="list" class="ctct-form-required">Email Lists</label>
                  <div class="checkbox">
                    <label> <input data-id="Lists:input" type="checkbox" name="list_0" value="1740995133" selected="selected" checked="checked"/><span data-id="Lists:span">Center for Early College General Interest</span></label>
                  </div>
                  <div class="checkbox">
                    <label> <input data-id="Lists:input" type="checkbox" name="list_1" value="1145545903" checked="checked"/><span data-id="Lists:span">Pedagogy News</span></label>
                  </div>
                  <div class="checkbox">
                    <label> <input data-id="Lists:input" type="checkbox" name="list_2" value="1644566795" checked="checked"/><span data-id="Lists:span">Policy News</span></label>
                  </div>
                </p>
                <button type="submit" class="btn btn-primary Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
                <div>
                <p>&nbsp;</p>
                <p class="caption-small">By submitting this form, you are granting: Bard High School Early College, 525 E Houston Street, New York, New York, 10002, United States, http://www.bhsec.bard.edu permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p>
                </div>
              </form>
            </div><!-- close row-->
          </div>
        </div>
        <script type='text/javascript'>
           var localizedErrMap = {};
           localizedErrMap['required'] =    'This field is required.';
           localizedErrMap['ca'] =      'An unexpected error occurred while attempting to send email.';
           localizedErrMap['email'] =       'Please enter your email address in name@email.com format.';
           localizedErrMap['birthday'] =    'Please enter birthday in MM/DD format.';
           localizedErrMap['anniversary'] =   'Please enter anniversary in MM/DD/YYYY format.';
           localizedErrMap['custom_date'] =   'Please enter this date in MM/DD/YYYY format.';
           localizedErrMap['list'] =      'Please select at least one email list.';
           localizedErrMap['generic'] =     'This field is invalid.';
           localizedErrMap['shared'] =    'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
           localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
          localizedErrMap['state_province'] = 'Select a state/province';
           localizedErrMap['selectcountry'] =   'Select a country';
           var postURL = 'https://visitor2.constantcontact.com/api/signup';
        </script>
        <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
        <!--End CTCT Sign-Up Form--> 
      </section>


    </div>
      </div><!-- /.container -->

      <?php include '_inc/footer-cec.php'; ?>   
      <?php include '_inc/bottom-js-cec.php' ?>
    </div>
  </body>
</html>