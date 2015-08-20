$(window).load(function () {
    
    $("input:text").on('input', function () {
        $(this).next('.label-important:first').remove();
        return false;
    });
    
    $("textarea").on('input', function () {
        $(this).next('.label-important:first').remove();
        return false;
    });
    
       
    $("[type='submit']").off('click').on('click', function () {
        var f_element = $(this);
        var bid = f_element.attr("id");
        var toRemove = 'btn_';
        var skid = bid.replace(toRemove, '');
        var form_data = $("#forms_" + skid).serialize();
        //set variable for google analytics event.
        var gaEvent = $("#id_gaevent1").attr('placeholder'); 
        $("#form_" + skid).off('submit').on('submit', function (e) {
            e.preventDefault();
            $("#btn_"+skid).hide(); 
           
        $("#form_" + skid).append("<span id='spin'> <img src='/_resources/forms/loading.gif' height='50px' width='50px' style='max-width:50px; max-height:50px;' /> Submitting, Please Wait .. </span>"); 
        
        // disable submit while waiting for server response, to prevent multiple submissions
         $("#btn_"+skid).hide();
          $("#clr_"+skid).hide();
        
            $("#form_" + skid + ".label-important").remove();
            
            if ($("#form_" + skid + " #hp"+ skid ).val().length > 0) {
                
            } else {
                
                $.ajax({
                    type: "POST",
                    cache: false,
                    url: "/_resources/forms/forms.php", //form_submit.aspx
                    data: $(this).serialize(),
                    success: function (data) {
                        var resultObj = jQuery.parseJSON(data);
                        var errC = /[faultcode]+\s:/;
                        var faultCode = errC.exec(resultObj.message);
                        if (resultObj.active == false) {
                            if (! this.faultCode) {
                                $("#status_" + skid).addClass("alert alert-danger");
                                var dataSet = resultObj.message + "<br/>";
                                $.each(resultObj.data, function (i, data) {
                                    var d = data.message;
                                    highlightID = "#id_" + data.name;
                                    errorHTML = '<label style="margin-left:8px;" class="error" id="' + data.name + 'Error">' + data.message + '<br/></label>';
                                    if ($('#' + data.name + 'Error').length == 0) {
                                        $(highlightID).after(errorHTML);
                                    }
                                });
                                $("#status_" + skid).html(dataSet);
                               
                                // re-enable submit button, so that user may fix errors and try again
                                
                                  $("#btn_"+skid).show();
                                  $("#clr_"+skid).show();
                                   $("#spin").remove(); 
                            } else {
                                var dataSet = resultObj.message + " " + resultObj.data[0].message;
                                $("#status_" + skid).addClass("alert alert-danger");
                                $("#status_" + skid).html(dataSet);
                                $(document).scrollTop($("#status_" + skid).offset().top);
                                
                            }
                        } else {
                            $("#status_" + skid).removeClass("alert alert-danger");

                            $("#form_" + skid).remove();
                            $("#status_" + skid).html('<h1 id="form_elements" class="sg-heading">Thank You</h1><p>' + resultObj.message + "</p>");
                            if (gaEvent) {
                                dataLayer.push({
                                    'event':'formInquiryName'
                                });
                            }
                            else {
                                dataLayer.push({'event':'Form Submit'});//generic analytics form event
                            }
                            
                            $(document).scrollTop($("#status_" + skid).offset().top);
                        }
                    },
                    error: function (data) {
                    }
                });
                return false;
            }
        });
    });
});
