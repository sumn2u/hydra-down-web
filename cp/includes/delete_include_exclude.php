<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysql_query("delete from tbl_include_exclude where id='$id'");
	if($query){
		echo "<script>window.location='index.php?page=include_exclude&msg=success'</script>";
		}
	}
	else
		echo "<script>window.location='index.php?page=include_exclude'</script>";

?>
