//turn parameter into variable
if ($('#hobson-form-submit').length > 0) {
  var formName = document.getElementById("hobson-form-submit").getAttribute("data-name");  
}
/*
1. Dummy Data
2. Submit
3. Validate
4. Conditional Display
*/

$( document ).ready(function() {

    // 1. Dummy data   
    /*
        $('#txtFirstName').val('firstName');
        $('#txtLastName').val('delete_lastName');
        $('#txtEmail').val('test@test.com');
        $('#birth_month').val('07');
        $('#birth_day').val('18');
        $('#birth_year').val('1995');
        $('#txtPhone').val('1231231234');
        $('#drpCountry').val('United States');
        $('#txtAddress1').val('1234 Maple Ave');
        $('#txtAddress2').val('Apt #105');
        $('#txtZipOrPostal').val('60532');
    */ 
     
    //2. Submit
    // Variable to hold request
    var request;


    $.validator.setDefaults({
        submitHandler: function(event) {
            // Abort any pending request
            if (request) {
                request.abort();
            }
        
            // setup some local variables
            var $form = $('#contactForm');
        
            // Let's select and cache all the fields
            var $inputs = $form.find("input, select, button, textarea");
        
            // Serialize the data in the form
            var serializedData = $form.serialize();
            //console.log(serializedData);
        
            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            $inputs.prop("disabled", true);
        
            // Fire off the request to /form.php
            request = $.ajax({
                url: "/_resources/forms/hobson/form-submit.php",
                type: "post",
                data: serializedData
            });
        
            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR){
                // Log a message to the console
                if (formName == 'discovery') {
                    var nextPage = 'discovery-day-thank-you.php'; 
                    var gtmLabel = 'formInquiryDiscoveryDayRequest';
                }
                else if (formName == '5signs') {
                    var nextPage = '5-signs-checklist.php'; 
                    var gtmLabel = 'formInquiry5signs';
                }
                else if (formName == 'cty') {
                    var nextPage = 'cty-form-thanks.php'; 
                    var gtmLabel = 'formInquiryCTY';
                }
                else if (formName == 'referralAlumni') {
                    var nextPage = 'referral-form-thanks.php'; 
                    var gtmLabel = 'formInquiryReferralAlumni';
                }
                else if (formName == 'referralCounselor') {
                    var nextPage = 'referral-form-thanks.php'; 
                    var gtmLabel = 'formInquiryReferralCounselor';
                }
                else {
                    var nextPage = 'contact-form-thanks.php';
                    var gtmLabel = 'Request Info';
                }
                //console.log("Hooray, it worked!");
                window.location.replace(nextPage);
                //add event for gta
                dataLayer.push({'event': gtmLabel });
            });
        
            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown){
                // Log the error to the console
                console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                );
            });
        
            // Callback handler that will be called regardless
            // if the request failed or succeeded
            request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            });
        
            // Prevent default posting of form
            //event.preventDefault();
        }
    });
    
    //3. Validate
    $("#contactForm").validate({
        rules: {
            attendanceDate: {
                required: true
            },
            txtFirstName: {
                required: true
            },
            txtLastName: {
                required: true
            },
            txtEmail: {
                required: true,
                email: true
            },
            txtPhoneRequired: {
                required: true
            }, 
            txtPhone: {
                required: '#chxInfoByPhone:checked'
            },
            drpCountry: {
                required: '#chxInfoByMail:checked'
            },
            txtAddress1: {
                required: '#chxInfoByMail:checked'
            },
            city: {
                required: '#chxInfoByMail:checked'
            },
            txtZipOrPostal: {
                required: '#chxInfoByMail:checked'
            },
            chxInfoBy: {
                required: true,
                minlength: 1
            },
            parentEmail: {
                email: true
            },
            
        },
        messages: {
            chxInfoBy: 'Please select a preferred contact method'
        },
        errorPlacement: function(error, element) {
            //Custom position: contact method checkboxes
            if (element.attr("name") == "chxInfoByEmail" || element.attr("name") == "chxInfoByPhone" || element.attr("name") == "chxInfoByMail" ) {
                //$("#chxInfoByErr").text('Please select a preferred contact method');
                error.appendTo( '#chxInfoByErr' );
            }
            else {
                error.insertAfter(element); // default error placement.
            }
        }
        
    });
    
    //4. Conditional Display


    $('.checkbox-sub, #lblPostalCode, #parentName, #childFirst, #childLast, #childDOB, #note-container, #dateHeadlineParent, #interviewParent').hide();  
    $('input:radio[name="userRole"]').change(
        function(){
            //reveal Parent contact if Student is selected
            if ($(this).is(':checked') && $(this).val() == 'Student') {
                $('#contactParent').fadeIn();
            } else {
                $('#contactParent').fadeOut();
            }
            //reveal and hide fields if Parent is selected
            if ($(this).is(':checked') && $(this).val() == 'Parent') {
                $('#parentName, #childFirst, #childLast, #childDOB, #dateHeadlineParent, #interviewParent').fadeIn();
                $('#emailAddress, #dateHeadlineDefault, #interviewDefault').fadeOut();
            } else {
                $('#parentName, #childFirst, #childLast, #childDOB, #dateHeadlineParent, #interviewParent').fadeOut();
                $('#emailAddress, #dateHeadlineDefault, #interviewDefault').fadeIn();
            }
            //reveal and hide fields if Other is selected
            if ($(this).is(':checked') && $(this).val() == 'Other') {
                $('#DOB').fadeOut();
                $('#note-container').fadeIn();
               
            } else {
                $('#DOB').fadeIn();
                $('#note-container').fadeOut();
                
            }

        }
    );
    $('#chxInfoByPhone').click(function(){
        if ( $(this).is(':checked') ) {
            $('#grpPhone').fadeIn();
            $('#grpPhoneType').fadeIn();
        } else {
            $('#grpPhone').fadeOut();
            $('#grpPhoneType').fadeOut();
        }
    });
    $('#chxInfoByMail').click(function(){
        if ( $(this).is(':checked') ) {
            $('#grpCountry, #grpAddress1, #grpAddress2, #grpZip, #grpState, #cityContainer').fadeIn();
        } else {
            $('#grpCountry, #grpAddress1, #grpAddress2, #grpZip, #grpState, #cityContainer').fadeOut();
        }
    });
    $('#drpCountry').change(function(){
        var countryval = $(this).val();
        if ( countryval == 'United States' ) {
            $('#lblZipCode').fadeIn();
            $('#lblPostalCode').hide();
        } else {
            $('#lblZipCode').hide();
            $('#lblPostalCode').fadeIn();
        }
        if ( countryval == 'United States' | countryval == 'Canada' ) {
            $('#grpState').fadeIn();
            //style postal code for split column
            $('#grpZip').addClass('col-sub-trailing-sm').addClass('col-sm-6');
            $('#grpZip').removeClass('col-sm-12');
        } else {
            $('#grpState').hide();
            ////style postal code for full column
            $('#grpZip').removeClass('col-sub-trailing-sm').removeClass('col-sm-6');
            $('#grpZip').addClass('col-sm-12');
        }
    }); 
    //reveal parent contact email if contact my parent is checked
    $('#contactParentInput').click(function(){
        if ( $(this).is(':checked') ) {
            $('#parentEmailContainer').fadeIn();
        } else {
            $('#parentEmailContainer').fadeOut();
        }
    }); 
});