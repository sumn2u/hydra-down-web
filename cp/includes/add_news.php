<?php
$clas="";
if(isset($_POST['add_news'])){
	$newstitle = $_POST['newstitle'];
	$news_desc = $_POST['editor1'];
	$publish = $_POST['publish'];
	$news_created = date("Y-m-d");
	if(empty($newstitle) || empty($news_desc)){
	 $msg = "All fileds are Required!!!";
	 $clas = "three";
	    }
		else{
			$query = mysql_query("insert into tbl_news(newstitle,newsdesc,status, newsdate)values('$newstitle','$news_desc','$publish', '$news_created')");


			if($query){
				$msg = "Successfully News Added.";
				$clas = "four";
				}
			else{
				$msg = mysql_error();
				$clas = "three";
				}
			}
	}

?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="form-elements">
<form name="" action="" method="post">
					<ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Add News</a></li>
					</ul>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>News Title</h4>
							
                            <h4>Publish</h4>
                            <h4>News Description</h4>
                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
							<input type="text" name="newstitle" value="" />
							<div class="rad-el">YES<input class="rad" type="radio" name="publish" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="publish" value="0" /> </div>
							<div style="clear:both"></div>
                            <div class="wysiwyg-editor-wrapper">
                            	
							<textarea  name="editor1" id="sample-textarea" class="ckeditor" rows="20" cols="25" placeholder="Input Goes Here ! ! ">
								 
							</textarea>
							</div>
							
							<div style="clear:both"></div>
							<input class="sub button-grey arrow" name="add_news" type="submit" value="Submit">
						</div>
					</div>					
</form>
</div>
