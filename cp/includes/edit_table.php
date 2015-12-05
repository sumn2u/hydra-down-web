<?php
 $clas="";
if(isset($_POST['upd_page'])){
	$id = $_POST['id'];
	$pagetitle = $_POST['pagetitle'];
	$publish = $_POST['publish'];
	$pagedesc = $_POST['editor1'];
	$pagename = $_POST['pagename'];
	$query = mysql_query("update tbl_table set name='$pagetitle',  status= '$publish' where id='$id'");
	if($query){
		$msg = "Successfully Page Updated.";
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
	$qpage = mysql_query("select * from tbl_table where id='$id'");
	$qpage1 = mysql_fetch_array($qpage);
	}
?>
<!-- <script type="text/javascript" src="ckeditor/ckeditor.js"></script> -->
<div class="form-elements">

<!-- This is used to view the image that are uploaded to the ckeditor
header("Content-type: image/jpeg");
echo '<img src="data:image/jpeg;base64,' . $qpage1[2] . '" />'; -->

<form name="" action="" method="post">
					<h1>UPDATE TABLE</h1>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Name</h4>
							<h4>Publish</h4>

                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
							<input type="hidden" name="id" value="<?php echo $qpage1['id']; ?>" />
							 <input type="text" name="pagetitle" value="<?php echo $qpage1['name']; ?>" />

							<div class="rad-el">YES<input class="rad" type="radio" name="publish" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="publish" value="0" /> </div>
							<div style="clear:both"></div>


							<div style="clear:both"></div>

							<input class="sub button-grey arrow" name="upd_page" type="submit" value="Submit">
						</div>
					</div>
</form>
</div>
