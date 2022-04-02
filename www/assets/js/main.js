
(function ($) {
    "use strict";

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }
        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
 /* login submit */
	   function LoginForm()
	   {

			var data = $(".validate-form").serialize();
			var url = document.getElementById("url").value;
			$.ajax({
				
			type : 'POST',
			url  : 'cek_login.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span>');
			},
			success :  function(response)
			   {						
					if(response=="no"){
						$("#btn-login").html('<img src="dist/img/loading.gif" />');
						setTimeout(' window.location.href = "redirect.php"; ',1000);
					}else if (response=='on'){
					$("#btn-login").html('<img src="dist/img/loading.gif" />');
						setTimeout(' window.location.href = "'+url+'"; ',1000);
					}else if (response=='ok'){
						$("#btn-login").html('<img src="dist/img/loading.gif" />');
						setTimeout(' window.location.href = "'+url+'"; ',1000);
					}
					else{
					$("#error").fadeIn(1000, function(){
					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
					$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Masuk');
					});
					}
			  }
			});
				return false;
		}

})(jQuery);