<?php
$clas="";
if(isset($_POST['add_ads'])){
	$ad_cat = $_POST['category'];
	$ad_title = $_POST['ad_title'];
	$ad_link = $_POST['ad_link'];
	$ad_desc = $_POST['editor1'];
	$publish = $_POST['publish'];
	$ad_created = date("Y-m-d");

	$ad_image = $_FILES["image"]["name"];
	$tmp_name = $_FILES["image"]["tmp_name"];

	move_uploaded_file($_FILES["image"]["tmp_name"],
      "../uploads/" . $_FILES["image"]["name"]);


	$query = mysql_query("insert into tbl_item(ad_cat, ad_title, ad_desc, ad_image, ad_created, publish) values('$ad_cat','$ad_title','$ad_desc','$ad_image','$ad_created','$publish')");
	if($query){
		$msg = "Successfully Item Added.";
		$clas = "four";
		}
	else{
		$msg = mysql_error();
		$clas = "three";
		}
	}

?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="form-elements">
<form name="ads" action="" method="post" enctype="multipart/form-data">
					<h1>ADD A NEW ITEM</h1>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Select Package</h4>
                            <h4>Item Name</h4>
                            <h4>Upload Image</h4>
                            <h4>Publish</h4>
                            <h4>Description</h4>
                            <h4></h4>
						</div>
						<div class="col-400">
							<select name="category">
								
                            <?php
								$query1 = mysql_query("select * from tbl_package");
								while($query2 = mysql_fetch_array($query1)){ ?>
                                <option value="<?php echo $query2['cat_name']; ?>"><?php echo $query2['cat_name']; ?></option>
                            <?php } ?>
                            </select>
                            <input type="text" name="ad_title" value="" />
                            <input type="file" name="image">
                            <div class="rad-el">YES<input class="rad" type="radio" name="publish" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="publish" value="0" /> </div>
							<div style="clear:both"></div>
                            <div class="wysiwyg-editor-wrapper">
							<textarea  name="editor1" id="sample-textarea" class="ckeditor" rows="20" cols="25" placeholder="Input Goes Here ! ! ">

							</textarea>
							</div>
							<input class="sub button-grey arrow" name="add_ads" type="submit" value="Submit">
						</div>
					</div>
</form>

</div>
<!--


<form method="POST" action="">

 <textarea  class="ckeditor" name="editor1" id="" cols="30" rows="10"></textarea>

  <input type="submit" value="Submit"/>
	</form>
<textarea name="ad_desc" id="sample-textarea" class="wysiwyg-editor m-top-30" rows="20" cols="25">
								Le text input
							</textarea>



	-->
