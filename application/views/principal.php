<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>IO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
  
   
</head>
<body>
	<header id="menuPrincipal">
		<?php if (isset($menu)) { $this->load->view($menu); } ?>
	</header>

	<?php if (isset($mensaje)) { ?>
		<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" date-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>¡Aviso!</strong> <?php echo $mensaje; ?>
		</div>
	<?php } ?>

	<section class="container-fluid vista" id="container-fluid-vista">
		<?php if (isset($vista)) { $this->load->view($vista); } ?>
	</section>

	<footer>
		<?php if (isset($pie)) { $this->load->view($pie); } ?>
	</footer>

	<?php 
		if (isset($scripts)) {
			foreach ($scripts as $src) {
				if (is_object($src)) {
					echo link_script($src->ruta, $src->print);
				} else {
					echo link_script($src);
				}
			}
		}

	?>
</body>

</html>
