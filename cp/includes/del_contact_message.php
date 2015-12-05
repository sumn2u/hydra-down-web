<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysql_query("delete from tbl_suscribe where contact_id='$id'");
	if($query){
		echo "<script>window.location='index.php?page=manage_contact&msg=success'</script>";
		}
	}
	else
		echo "<script>window.location='index.php?page=manage_contact'</script>";

?>