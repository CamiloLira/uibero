
	<!-- header -->
	<?php include("header.php"); ?>
<body>

	<div class="bienvenidos">
		<p class="azul">Bienvenido a ser lo que quieres</p>
		
			<img class="admicionbarra" src="images/admicionbarra.png">
	</div>

	<!-- Container Slider -->

	<div class="container-slider">
		
	</div>
    	<!-- formulario -->
    <div id="formulario"><form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Tu nombre:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Tu email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Tu mensaje:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Enviar email" />
</form>						
 </div><!-- formulario -->

</body>
	<?php include("footer.php"); ?>