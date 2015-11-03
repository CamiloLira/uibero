
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

</body>
	<?php include("footer.php"); ?>