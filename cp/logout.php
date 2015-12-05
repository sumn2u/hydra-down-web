<?php session_start();
session_destroy(); 
echo "<script>window.location='index.php'</script>";

?>
<meta http-equiv="refresh" content="0;index.php">