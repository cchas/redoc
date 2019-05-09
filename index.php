<?php 
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	require_once 'inc/settings.php';
	require_once 'inc/functions.php';

	$spec     = filter_var($_GET['spec'], FILTER_SANITIZE_STRING);

	$json_spec_list = @file_get_contents('inc/spec_list.json');
	$arr_spec_list  = json_decode($json_spec_list, true);

	$spec_file  = BASE_URL . 'spec/' . $spec . '.yaml';
	
	$html_menu = html_menu( $arr_spec_list );
	$html_home = html_home( $arr_spec_list );
	
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>REDOC OPEN API - <?php echo str_replace('_','',$spec);?></title>
  	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/openapi.css">

  </head>

  <body>
  
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	  <a class="navbar-brand" href="#">
	  	<img id="logo" src="<?php echo LOGO_URL;?>" alt="<?php echo PROJECT_NAME;?>">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">

	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo BASE_URL;?>">Home</a>
	      </li>
	      
			<?php echo $html_menu;?>

	    </ul>

	  </div>

	</nav>

	<?php if( $spec == '' ){ ?>
		
		<div class="container home">
			<div class="col-lg-12">

				<h2><?php echo PROJECT_NAME;?></h2>

				<?php echo $html_home;?>
		
			</div>
		</div>
		
	<?php }else{ ?>
		
		<redoc spec-url="<?php echo $spec_file;?>"></redoc>

	<?php } ?>		
  	
  	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="js/redoc.standalone.js"> </script>

  	<script>
	   Redoc.init('<?php echo $spec_file;?>', {
	       scrollYOffset: 60,
	       hideDownloadButton: false
	   }, document.getElementById('redoc') )
	</script>

  </body>
</html>
