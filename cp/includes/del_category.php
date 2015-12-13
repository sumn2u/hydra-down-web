<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query3 = mysql_query("select * from tbl_package where ad_id='$id'");
	$query2 = mysql_fetch_array($query3);
	$image = $query2['cat_image'];
	$image2 = '/adlisting/uploads/'.$image;
	unlink($_SERVER['DOCUMENT_ROOT'].$image2);
	$query = mysql_query("delete from tbl_package where id='$id'");
	if($query){
		echo "<script>window.location='index.php?page=category&msg=success'</script>";
		}
	}
	else
		echo "<script>window.location='index.php?page=category'</script>";

?>
