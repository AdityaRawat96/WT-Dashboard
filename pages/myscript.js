$(document).ready(function(){
   $('#username').keypress(function(e){
      $('#incorrectCredentials').css('visibilty','hidden');
       if((e.which && e.which==13) || (e.keyCode && e.keycode==13))
           {
               loginFunction();
           }
   });
});

$(document).ready(function(){
   $('#pwd').keypress(function(e){
       $('#incorrectCredentials').css('visibilty','hidden');
       if((e.which && e.which==13) || (e.keyCode && e.keycode==13))
           {
               loginFunction();
           }
   });
});

$(document).ready(function(){
    $('#show_hide').on('click',function(){
                var password=$('#pwd');
                var btn=$('#show_hide'); 
                var passwordtype=password.attr('type');
                if(passwordtype=='password')
                {
                    password.attr('type','text');
//                    btn.removeClass('fa-eye');
//                    btn.attr('class','fa-eye-slash');
                    btn.find("i").removeClass("fa-eye").addClass("fa-eye-slash");
                }
                else
                {
                    password.attr('type','password');
//                    btn.removeClass('fa-eye-slash');
//                    btn.attr('class','fa-eye');
                    btn.find("i").removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });    
        });


 
  function loginFunction(e)
            {
                    $.ajax({
                    type: 'POST',
                    url: 'php/check.php',
                    data: { Username:$('#username').val(),Password:$('#pwd').val()},

                        beforeSend: function() {

                    },
                success: function(response) {
                        if ( response.match(/aConfirmed/) )
                        {
                            window.location.href='dashboard/dashboard.php';
                        }
                        else if ( response.match(/aUnconfirmed/) )
                        {
                            window.location.href='php/change_password.php';
                        }
                        else if ( response.match(/Confirmed/) )
                        {
                            window.location.href='dashboard/employee_dashboard.php';
                        }
                        else if ( response.match(/Unconfirmed/) )
                        {
                            window.location.href='php/change_password_employee.php';
                        }
                       else if ( response.match(/username_problem/) )
                        {
                            $('#pwd').focus();
                            $('#incorrectCredentials').css('visibility','visible');
                        }
                        else if ( response.match(/password_problem/) )
                        {
                            $('#pwd').focus();
                            $('#incorrectCredentials').css('visibility','visible');
                        }
                }
                });
            }