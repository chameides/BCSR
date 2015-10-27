// Display the appropriate link based on how the form is complted

$( document ).ready(function() {
    
    //1. set variables 
    var englishValue = $("input[name='english']:checked").val();
    var startDateValue = $("input[name='startDate']:checked").val();


    //2. Create Function
    function setLink() {
        
        //2a. set variables
        var startDateValue = $("input[name='startDate']:checked").val();
        var englishValue = $("input[name='english']:checked").val();
        
        //2b. Display link based on variables

        //January and fluent
        if ( (startDateValue == 'January') && (englishValue == 'fluent')) {
            $('#januaryApplication').fadeIn();
        }
        else {
            $('#januaryApplication').fadeOut();
        }

        //January and PACE
        if ((startDateValue == 'January') && (englishValue == 'pace')) {
            $('#januaryApplicationPACE').fadeIn();
        }
        else {
            $('#januaryApplicationPACE').fadeOut();
        }

        
        //August and fluent
        if (startDateValue == 'August' && englishValue == 'fluent') {
            $('#augustApplication').fadeIn();
        }
        else {
            $('#augustApplication').fadeOut();
        }
        
        //August and PACE
        if (startDateValue == 'August' && englishValue == 'pace') {
            $('#augustApplicationPACE').fadeIn();
        }
        else {
            $('#augustApplicationPACE').fadeOut();
        }

    };

    //3. hide defaults 
    $('#januaryApplication, #augustApplicationPACE, #januaryApplicationPACE').hide();  
    
    //4. Run function on form change
    $('input:radio[name="startDate"]').change(setLink);
    $('input:radio[name="english"]').change(setLink);

});