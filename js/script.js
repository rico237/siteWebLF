function onSubmit(token) {
}

	$('#form_contact').submit(function(e){
		e.preventDefault();
   		sendEnquiryform();
	});

function sendEnquiryform(){
    var name    = $('#inputName').val();
    var email   = $('#inputMail').val();
    var tel     = $("#inputPhone").val();
    var message = $('#descriptionTextarea').val();
	
    $.post("send_mail.php",'name='+ name +'&email='+email+'&tel='+tel+'&message='+message, function(result,status,xhr) {
        if( status.toLowerCase() == "error".toLowerCase() ){ 
			$('#alertMessage').addClass("show"); 
        } else { 
            $('#sucessMessage').addClass("show");
        }
    }).fail(function(){ 
		$('#alertMessage').addClass("show");
    });
}