<?php
 $clas="";
if(isset($_POST['upd_category'])){
	$id = $_POST['id'];
	$catname = $_POST['catname'];
	$publish = $_POST['publish'];
  if(!empty($_FILES["image"]["name"])){
	//this delete the previous image
	$query = mysql_query("select * from tbl_package where id='$id'");
	$query2 = mysql_fetch_array($query);
	$image = $query2['cat_image'];
	$image2 = '/adlisting/uploads/'.$image;
	unlink($_SERVER['DOCUMENT_ROOT'].$image2);

	$ad_image = $_FILES["image"]["name"];
	$tmp_name = $_FILES["image"]["tmp_name"];

	move_uploaded_file($_FILES["image"]["tmp_name"],
      "../uploads/" . $_FILES["image"]["name"]);
	$query3 = mysql_query("update tbl_package set
	  cat_image = '$ad_image'
	  where id='$id'");
	}

	$query = mysql_query("update tbl_package set cat_name='$catname', publish= '$publish' where id='$id'");

	if($query){
		$msg = "Successfully Package Updated.";
		$clas = "four";
		}
	else{
		$msg = mysql_error();
		$clas = "three";
		}
	}

?>
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$qcategory = mysql_query("select * from tbl_package where id='$id'");
	$qcategory1 = mysql_fetch_array($qcategory);
	}
?>
<div class="form-elements">
<form name="" action="" method="post" enctype="multipart/form-data">
					<h1>UPDATE PACKAGE</h1>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Enter Package Name</h4>
              <h4>Upload Image</h4>
							<h4>Publish</h4>
                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
							<input type="hidden" name="id" value="<?php echo $qcategory1['id']; ?>" />
                            <input type="text" name="catname" value="<?php echo $qcategory1['cat_name']; ?>" />
                            <input type="file" name="image" value="<?php echo $qcategory1['cat_image']; ?>">
							<div class="rad-el">YES<input class="rad" type="radio" name="publish" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="publish" value="0" /> </div>
							<div style="clear:both"></div>
							<input class="sub button-grey arrow" name="upd_category" type="submit" value="Submit">
              <br/> <br/>
              <img style="padding:10px; border:1px dotted #ddd" src="../uploads/<?php echo $qcategory1['cat_image']; ?>" width="400" /><br/>
              <p>Current Banner</p>
						</div>
					</div>
</form>
</div>
