	<section class="col-xs-12">

	<?php
	/*
		On inclue le fichier php correspondant a la valeur pass� dans l'URL
	*/
	//si la cl� page existe dans le tableau $_GET
	if(isset($_GET['page'])){
		include './template/'.$_GET['page'].'.php';

	}else{
		include '../template/home.php';
	}


	?>
</section>
