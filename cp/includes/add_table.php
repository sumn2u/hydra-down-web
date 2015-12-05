<?php
$clas="";
if(isset($_POST['add_page'])){
	$pagetitle = $_POST['pagetitle']; //meta tags
	$page_desc = $_POST['editor1']; // meta description
	$publish = $_POST['publish'];
	$category = $_POST['category']; //keywords
	if(empty($pagetitle)){
	 $msg = "All fileds are Required!!!";
	 $clas = "three";
	    }
		else{
			$query = mysql_query("insert into tbl_table(id,name,status)values(NULL,'$pagetitle','$publish')");
			if($query){
				$msg = "Successfully Page Added.";
				$clas = "four";
				}
			else{
				$msg = mysql_error();
				$clas = "three";
				}
			}
	}

?>
<!-- <script type="text/javascript" src="ckeditor/ckeditor.js"></script> -->
<div class="form-elements">
<form name="" action="" method="post">
					<ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Add Table</a></li>
					</ul>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Table Name</h4>
							<h4>Publish</h4>
														<h4>&nbsp;</h4>
						</div>
						<div class="col-400">

					    <input type="text" name="pagetitle"  />
							<div class="rad-el">YES<input class="rad" type="radio" name="publish" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="publish" value="0" /> </div>
							<div style="clear:both"></div>


							<div style="clear:both"></div>
							<input class="sub button-grey arrow" name="add_page" type="submit" value="Submit">
						</div>
					</div>
</form>
</div>
