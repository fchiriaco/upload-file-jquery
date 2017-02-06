<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<title>Esempio upload file con jquery</title>
	
	<!-- META -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- META -->
	<!-- CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	<!-- CSS -->
	
</head>
 <body>

<div class="container-fluid">
	<div class="alert alert-info text-center">
	<h1>ESEMPIO UPLOAD FILE MULTIPLO</h1>
	<h3> Strumenti utilizzati: HTML - CSS BOOTSTRAP - JQUERY - PHP </h3>
	<h4>Autore: Francesco Chiriaco</h4>
	</div>
	<div class="row">
		<div class="col-xs-12 text-center">
			<form class="form-inline" id="myform" role="form" >
				<input class="form-control" type="file" id="userfile" name="userfile[]" multiple="multiple">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-upload"></span> INVIA FILE AL SERVER</button>
			</form>
		</div> <!-- chiudi cols -->
	</div> <!-- chiudi row -->
</div>  <!-- chiudi container-fluid -->

<!-- caricamento script jquery e bootstrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

<!-- caricamento script jquery e bootstrap -->

 </body>
</html>