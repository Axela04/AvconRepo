var $j = jQuery.noConflict();

$j(function(){

$j(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $j("form[name='contact']").validate({



    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      phone:  {
      required: true,
      number: true
    },
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      // email: "Please enter your Email",
      email: {
        required: "Please enter your Email",
        email: "Please enter a valid email address"
      },
      phone:{
        required: "Please enter your phone number",
        number: "Please enter a valid phone number"


      } 
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
});