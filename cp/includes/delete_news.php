<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysql_query("delete from tbl_news where id='$id'");
	if($query){
		echo "<script>window.location='index.php?page=manage_news&msg=success'</script>";
		}
	}
	else
		echo "<script>window.location='index.php?page=manage_news'</script>";

?>