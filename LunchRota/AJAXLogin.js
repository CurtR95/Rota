$(document).ready(function(){
   $("#login-form").validate({
       rules: {
           password: {
               required: true
           },
           username: {
               required: true
           }
       },
       messages: {
           password: {
               required: "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please Enter Password</div>"
           },
           username: {
               required: "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please Enter Username</div>"
           }
       },
       submitHandler: submitForm
    });
    function submitForm()
    {  
        var data = $("#login-form").serialize();
        $.ajax({
        type : 'POST',
        url  : 'Login.php',
        data : data,
        beforeSend: function()
        { 
        $("#error").fadeOut();
        },
        success :  function(response)
            {      
                if(response==="ok"){
                    setTimeout(' window.location.href = "'+window.location.href+'"; ',0);
                }
                else{
                    $("#error").fadeIn(0, function(){      
                        $("#error").html('<div class="alert alert-danger"> '+response+' </div>');
                    });
                }
            }
        });
        return false;
    }
});