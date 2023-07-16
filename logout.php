<?php
	session_start();
	session_destroy();
	echo '<script>alert("Anda telah keluar dari aplikasi. Terimakasih");window.location="login.php"</script>';
?>
