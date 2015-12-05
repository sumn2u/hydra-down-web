<?php include('includes/db.php'); ?>	 

<?php
	$id = $_GET['id'];
	$query = mysql_query("select * from tbl_image where img_id='$id'");
	$query2 = mysql_fetch_array($query);
	$image = $query2['img_name'];
	$image2 = '/adlisting/uploads/backend'.$image;
	unlink($_SERVER['DOCUMENT_ROOT'].$image2);
	
	$query = mysql_query("delete from tbl_image where img_id='$id'");
	if($query){
		echo "<script>window.location='index.php?page=manage_image&msg=success'</script>";
		}
	else
		echo "<script>window.location='index.php?page=manage_image'</script>";
?>