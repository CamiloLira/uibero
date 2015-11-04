
<!-- header -->
<?php include("header.php"); ?>
<body>


	<div class="bienvenidos">
		<p class="azul">Bienvenido a ser lo que quieres</p>
		
		<img class="admicionbarra" src="images/admicionbarra.png">
	</div>

	<!-- Container Slider -->

	<div class="container-slider">
		<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><a href="#"><img src="data1/images/sin_ttulo1.jpg" alt="wowslider.com" title="Comunidad Universitaria" id="wows1_0"/></a></li>
		<li><img src="data1/images/sin_ttulo12.jpg" alt="Nuevos docentes" title="Nuevos docentes" id="wows1_1"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Nuevo Laboratorio"><span><img src="data1/tooltips/sin_ttulo1.jpg" alt="Comunidad Universitaria"/>1</span></a>
		<a href="#" title="Nuevos docentes"><span><img src="data1/tooltips/sin_ttulo12.jpg" alt="Nuevos docentes"/>2</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	</div>

	<!-- cierre Container Slider -->
	<!-- barra facultadades -->
	<figure>
		<img class="barrafacultades" src="images/nuestras.png">
	</figure>
	<!-- facultades -->
	<div class="facultades">
		
		<!-- facultad educacion hexagono-->

		<div class="facultad-educacion">
			<img src="images/rojo.png">
			<a href=""><p class="rojo titulos-facultad">FACULTAD DE CIENCIAS 
				Y EDUCACIÓN</p><a/>
				<div class="mover-carreras">
					<p class="carreras-facultades">Pedagogía en Ingles</p>
					<p class="carreras-facultades">Pedagogía en Matemáticas y Fisica</p>
				</div>
			</div>

			<!-- facultad ingeneria hexagono-->
			<div class="facultad-ingeneria">
				<img src="images/morado.png">
				<a href=""><p class="MORADO titulos-facultad">FACULTAD DE CIENCIAS 
					DE LA INGENERIA Y ADMINISTRACIÓN</p><a/>
					<div class="mover-carreras">
						<p class="carreras-facultades">Administración Pública</p>
						<p class="carreras-facultades">Contador Auditor</p>
						<p class="carreras-facultades">Ingeniera Comercial</p>
						<p class="carreras-facultades">Ingenieria Civil Electronica</p>
						<p class="carreras-facultades">Ingeneria de Ejecución en Industria Alimentaria</p>
						<p class="carreras-facultades">Ingeneria de Ejecución Electrónica</p>

					</div>
				</div>

				<!-- facultad ingeneria hexagono-->
				<div class="facultad-juridica">
					<img src="images/amarillo.png">
					<a href=""><p class="amarillooscuro titulos-facultad">FACULTAD DE CIENCIAS 
						JURÍDICAS Y SOCIALES</p><a/>
						<div class="mover-carreras">
							<p class="carreras-facultades">Derecho</p>
							<p class="carreras-facultades">Trabajo Social</p>
						</div>
					</div>

					<!-- facultad salud hexagono-->
					<div class="facultad-salud">
						<img src="images/celeste.png">
						<a href=""><p class="celeste titulos-facultad">FACULTAD DE CIENCIAS 
							DE LA SALUD</p><a/>
							<div class="mover-carreras">
								<p class="carreras-facultades">Enfermeria</p>
								<p class="carreras-facultades">Fonoaudiología</p>
								<p class="carreras-facultades">Kinesiología</p>
								<p class="carreras-facultades">Nutrición y Dietética</p>
								<p class="carreras-facultades">Obstetricia y Puericultura</p>
								<p class="carreras-facultades">Tecnología Médica</p>
							</div>
						</div>

						<!-- facultad natural hexagono-->
						<div class="facultad-natural">
							<img src="images/verde.png">
							<a href=""><p class="verde titulos-facultad">FACULTAD DE CIENCIAS 
								RECURSOS NATURALES Y CIENCIAS SILVOAGROPECUARIAS</p><a/>
								<div class="mover-carreras">
									<p class="carreras-facultades">Biotecnología</p>
									<p class="carreras-facultades">Agronomia</p>
									<p class="carreras-facultades">Veterinaria</p>
									<p class="carreras-facultades">Ingeniería de Ejecución de Viticultura y Enología</p>
								</div>
							</div>	
						</div>

						<!-- redes sociales-->
						<div class="social-media">
							<figure>
								<img class="barra-estudio" src="images/yoestudio.png">
							</figure>

							<figure>
								<img class="redes" src="images/redes.png" width="550px">
							</figure>

							<div class="aqui-estamos">
								<p class="blanco">Aquí estamos</p>
							</div>

						</div>


						<!-- Mapa-->
						<div class="mapa">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.9905520013385!2d-70.66050934966383!3d-33.44955268067973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c507c923a539%3A0x918f2a283bee97fb!2sUniversidad+Iberoamericana+de+Ciencias+y+Tecnolog%C3%ADa!5e0!3m2!1ses-419!2scl!4v1446573728995" width="99%" height="363" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>


						<!-- formulario -->
						<div id="formulario">
							<?php
							$action=$_REQUEST['action'];
							if ($action=="")    /* display the contact form */
							{
								?>
								<form  action="" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="action" value="submit">
									Your name:<br>
									<input name="name" type="text" value="" size="30"/><br>
									Your email:<br>
									<input name="email" type="text" value="" size="30"/><br>
									Your message:<br>
									<textarea name="message" rows="7" cols="30"></textarea><br>
									<input type="submit" value="Send email"/>
								</form>
								<?php
							} 
							else                /* send the submitted data */
							{
								$name=$_REQUEST['name'];
								$email=$_REQUEST['email'];
								$message=$_REQUEST['message'];
								if (($name=="")||($email=="")||($message==""))
								{
									echo "All fields are required, please fill <a href=\"\">the form</a> again.";
								}
								else{        
									$from="From: $name<$email>\r\nReturn-path: $email";
									$subject="Message sent using your contact form";
									/*escribir email al que llegaran los formularios*/ mail("youremail@yoursite.com", $subject, $message, $from);
									echo "Email sent!";
								}
							}  
							?>
						</div><!-- formulario -->
						>>>>>>> origin/master
<!-- div para los bordes --></div>
					</body>
					<?php include("footer.php"); ?>