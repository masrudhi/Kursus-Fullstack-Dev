<?php

session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password']) )
{
?>
	<script>
	alert("SILAHKAN LOGIN DAHULU!!!");
	window.location='index.php';
	</script>
	<?php
}
?>