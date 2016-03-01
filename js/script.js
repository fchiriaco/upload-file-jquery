$(document).ready(function()
 {
	
	
	
	$('#myform').submit(
		function(e){
						e.preventDefault();
						var formData = new FormData($(this)[0]);
						$.ajax({
								url: 'formproc.php',
								type: 'POST',
								data: formData,
								async: true,
								cache: false,
								contentType: false,
								processData: false,
								success: function (returndata) {
										$('#userfile').val('');
										alert(returndata);
								}
							});
						return false;
					});
 });

