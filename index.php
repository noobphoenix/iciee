<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Intenational Conference of Industrial Electrical and Electronics">
    <meta name="keywords" content="untirta, iciee, conference international, electrical, electronics">
    <meta http-equiv="Copyright" content="UNTIRTA">
    <meta name="author" content="ELEKTRO UNTIRTA">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ICIEE 2018</title>
    <link rel="icon"  type="image/png"  href="asset/image/favicon.ico">

<?php include('extend/bootstrap.php') ?>

  </head>
  <body>
<?php
include('extend/navbar.php');
include('extend/banner.php');
?>


<div class="col-lg-9 col-md-9 col-sm-12 font-bigger">
<?php
if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "pages/home.php";
				break;
			case 'keynote':
				include "pages/keynote.php";
				break;
			case 'cfp':
				include "pages/cfp.php";
				break;
          case 'venue':
    				include "pages/venue.php";
    				break;
            case 'fee':
      				include "pages/fee.php";
      				break;
              case 'visa':
        				include "pages/visa.php";
        				break;
                case 'template':
                  include "pages/template.php";
                  break;
			default:
				echo "<center><h3>Sorry, Page not found!</h3></center>";
				break;
		}
	}else{
		include "pages/home.php";
	}
 ?>
</div>

<?php include('extend/sidebar.php') ?>

 </section>

 <?php include('extend/footer.php') ?>

  </body>
</html>
