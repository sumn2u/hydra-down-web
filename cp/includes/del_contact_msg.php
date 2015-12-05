<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysql_query("delete from tbl_contact where id='$id'");
	if($query){
		echo "<script>window.location='index.php?page=mange_contactmsg&msg=success'</script>";
		}
	}
	else
		echo "<script>window.location='index.php?page=mange_contactmsg'</script>";

?>