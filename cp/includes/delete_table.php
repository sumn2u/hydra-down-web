<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysql_query("delete from tbl_table where pid='$id'");
	if($query){
		echo "<script>window.location='index.php?page=add_table&msg=success'</script>";
		}
	}
	else
		echo "<script>window.location='index.php?page=add_table'</script>";

?>
