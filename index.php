<?php
session_start();
if($_SESSION['user'] != ''){
	$isLogged = true;
} else {
	$isLogged = false;
}


include 'markup/header.php';
?>


<?php
include 'markup/footer.php';
?>