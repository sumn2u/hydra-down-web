<?php
if(isset($_POST['upd_admin'])){
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$active = $_POST['active'];
	
	$query = mysql_query("update tbl_admin set username='$username', password='$password', active= '$active' where id='$id'");
	if($query){
		$msg = "Successfully Admin Updated.";
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
	$qcategory = mysql_query("select * from tbl_admin where id='$id'");
	$qcategory1 = mysql_fetch_array($qcategory);
	}
?>
<div class="form-elements">
<form name="" action="" method="post">
					<h1>UPDATE AN ADMIN</h1>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>User Name</h4>
							<h4>Password</h4>
                            <h4>Active</h4>
                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
							<input type="hidden" name="id" value="<?php echo $qcategory1['id']; ?>" />
                            <input type="text" name="username" value="<?php echo $qcategory1['username']; ?>" />
                            <input type="password" name="password" value="<?php echo $qcategory1['password']; ?>" />
							<div class="rad-el">YES<input class="rad" type="radio" name="active" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="active" value="0" /> </div>
							<div style="clear:both"></div>
							<input class="sub button-grey arrow" name="upd_admin" type="submit" value="Submit">
						</div>
					</div>					
</form>
</div>