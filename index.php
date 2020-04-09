<?php 

// hier bij includ de header van de website
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/Header.php";
include($path);


// hier roep ik alle function die ik nodig heb in de website
$function = $_SERVER['DOCUMENT_ROOT'];
$function .= "/function/function_Html.php";
include($function);

// hier bij includ de home van de website allen op index page.
$header_page = $_SERVER['DOCUMENT_ROOT'];
$header_page .= "/includes/header_page.php";
include($header_page);



// hier bij includ de home van de website allen op index page.
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Home_page/home.php";
include($path);



// hier bij includ de footer van de website alle pagina.
$footer = $_SERVER['DOCUMENT_ROOT'];
$footer .= "/includes/footer.php";
include($footer);
?>

