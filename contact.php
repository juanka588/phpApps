<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Contactenos</title>   
		<script src="https://static.hsstatic.net/jquery-libs/static-1.1/jquery/jquery-1.7.1.js"></script>
		<link rel="stylesheet" href="css/materialize.min.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="js/materialize.min.js"></script>
	</head>
	<body>
		<div class="row center">
			<hgroup><h1>Formulario de Datos</h1></hgroup>
			<form class="col s12" name="contact_form" action="validate_data.php" method="post" >
			 <div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input placeholder="Placeholder" name="contact_name" id="contact_name" type="text" class="validate"/>
					<label for="contact_name">First Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">email</i>
					<input name="email" id="email" type="email" class="validate"/>
					<label for="email">Email</label>
				</div>
				<div class="input-field col s6">
					<input name="send_btn" type="submit"/>
				</div>
			</div>
			</form>
		</div>
		<script type="text/javascript">
		 $(document).ready(function() {
			$('input#contact_name').characterCounter();
		});
		</script>
	</body>
</html>
