<?php
 $clas="";
if(isset($_POST['add_category'])){
	$catname = $_POST['catname'];
	$publish = $_POST['publish'];
	if(empty($catname )){
		$msg = "Category Name is Required!!!";
		$clas = "three";
		}
		else{
			$query = mysql_query("insert into tbl_package (cat_name, publish) values('$catname','$publish')");
			if($query){
				$msg = "Successfully Category Added.";
				$clas = "four";
				}
			else{
				$msg = mysql_error();
				$clas = "three";
				}
			}
	}

?>

<div class="form-elements">
<form name="" action="" method="post">
					<h1>ADD A NEW CATEGORY</h1>
					<div class="hr"></div>

                    <div class="notice-<?php echo $clas; ?>">
                 <!-- <div class="notice-four"> -->
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Category Name</h4>
							<h4>Publish</h4>
                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
							<input type="text" name="catname" value="" />
							<div class="rad-el">YES<input class="rad" type="radio" name="publish" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="publish" value="0" /> </div>
							<div style="clear:both"></div>
							<input class="sub button-grey arrow" name="add_category" type="submit" value="Submit">
						</div>
					</div>
</form>
</div>
