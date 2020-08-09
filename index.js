//Ajax call for the sihn up form
// once the form is submitted
$("#signform").submit(function (event) {
  //prevent default php processing
  event.preventDefault();
  //collect user inputs
  var datatopost = $(this).serializeArray();
  console.log(datatopost);
  //send them to signup.php using AJAX
  $.ajax({
    url: "signup.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#signupmessage").html(data);
      }
    },
    error: function () {
      $("#signupmessage").html(
        "<div class='alert alert-danger'>There was an error with ajax call, Please try again later!</div>"
      );
    },
  });
});
// $.post({}).done().fail();
