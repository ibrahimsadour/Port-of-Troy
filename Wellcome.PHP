<?php 

// hier bij includ de header van de website

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/Header.php";
include($path);

session_start(); 



// hier bij includ de home van de website allen op wellcome page.
$header_page = $_SERVER['DOCUMENT_ROOT'];
$header_page .= "/webstieFramwork/header_page_login.php";
include($header_page);

?>

<!-- Einde CSS code van de inlogen form  -->
	<!-- header ================================================== -->
    <!-- header-start -->

	

<!-- header-end ==========================================================-->


<?php // hier bij includ de footer van de website alle pagina.
$footer = $_SERVER['DOCUMENT_ROOT'];
$footer .= "/includes/footer.php";
include($footer);?>