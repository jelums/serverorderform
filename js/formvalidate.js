$(document).ready(function(){
  $("#form").validate({

    rules: {
      fname: {
        required: true,
        minlength: 2,
        maxlength: 16,
      },
      sname: {
        required: true,
        minlength: 2,
        maxlength: 32,
      },
      account: {
        required: true,
        pattern:/^[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{4}[0-9]{2}$/,
        maxlenght: 8,
      },
      group: {
        required: true,
        pattern:/^[a-zA-Z]{3}[0-9]{1}[a-zA-Z]{2}$/,
      },
      agree: {
        required: true
      },

    },
    messages: {

    }
  });
});
