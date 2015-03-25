$(document).ready(function() {
  $('#signinForm').formValidation({
    // I am validating Bootstrap form
    framework: 'bootstrap',

    // Feedback icons
    icon: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },

    // List of fields and their validation rules
    fields: {
      firstname: {
        validators: {
          notEmpty: {
            message: 'First name is required and cannot be empty'
          },
          stringLength: {
            min: 2,
            max: 30,
            message: 'The username must be more than 6 and less than 30 characters long'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9]+$/,
            message: 'The username can only consist of alphabetical and numbers'
          }
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: 'The password is required and cannot be empty'
          }
        }
      }
    }
  });
});
