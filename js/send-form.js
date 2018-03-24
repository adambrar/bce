$(document).ready(function() {

    // process the form
    $('#myproject-form').submit(function(event) {

        $('input').removeClass('is-invalid'); // remove the error class
        $('.help-block').remove(); // remove the error text
        $('.alert').remove(); // remove success text
        
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'ContactName'              : $('input[id=ContactName]').val(),
            'ContactEmail'             : $('input[id=ContactEmail]').val(),
            'ContactPhone'             : $('input[id=ContactPhone]').val(),
            'ProjectLocation'          : $('input[id=ProjectLocation]').val(),
            'ProjectDescription'       : $('input[id=ProjectDescription]').val()
        };
        $('form').append('<div class="alert mt-3 mb-3"><i class="fa fa-spinner fa-spin fa-3x"></i></div>');
        
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'submit-form.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {
                $('.alert').remove();
                
                // here we will handle errors and validation messages
                if ( ! data.success) {

                    // handle errors for name ---------------
                    if (data.errors.ContactName) {
                        $('#ContactName').addClass('is-invalid'); // add the error class to show red input
                        $('#NameGroup').append('<div class="help-block invalid-feedback">' + data.errors.ContactName + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.ContactEmail) {
                        $('#ContactEmail').addClass('is-invalid'); // add the error class to show red input
                        $('#EmailGroup').append('<div class="help-block invalid-feedback">' + data.errors.ContactEmail + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for superhero alias ---------------
                    if (data.errors.ContactPhone) {
                        $('#ContactPhone').addClass('is-invalid'); // add the error class to show red input
                        $('#PhoneGroup').append('<div class="help-block invalid-feedback">' + data.errors.ContactPhone + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for superhero alias ---------------
                    if (data.errors.ProjectLocation) {
                        $('#ProjectLocation').addClass('is-invalid'); // add the error class to show red input
                        $('#LocationGroup').append('<div class="help-block invalid-feedback">' + data.errors.ProjectLocation + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for superhero alias ---------------
                    if (data.errors.ProjectDescription) {
                        $('#ProjectDescrition').addClass('is-invalid'); // add the error class to show red input
                        $('#DescriptionGroup').append('<div class="help-block invalid-feedback">' + data.errors.ProjectDescription + '</div>'); // add the actual error message under our input
                    }

                } else {

                    // ALL GOOD! just show the success message!
                    $('form').append('<div class="alert alert-success mt-3 mb-3">' + data.message + '</div>');

                    // usually after form submission, you'll want to redirect
                    // window.location = '/thank-you'; // redirect a user to another page

                }
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});