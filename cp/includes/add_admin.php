<?php
$clas="";
if(isset($_POST['add_admin'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$active = $_POST['active'];
	if(empty($username) || empty($password)){
		$msg = "Username and Passwords are Required!!!";
		$clas = "three";
		}
		else{
			$query = mysql_query("insert into tbl_admin (username, password, active) values('$username','$password','$active')");
				if($query){
					$msg = "Successfully Admin Added.";
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
					<h1>ADD A NEW ADMIN</h1>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Enter User Name</h4>
							<h4>Password</h4>
                            <h4>Publish</h4>
                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
							<input type="text" name="username" value="" />
                            <input type="password" name="password" value="" />
							<div class="rad-el">YES<input class="rad" type="radio" name="active" checked="checked" value="1" /></div> <br/>
                            <div class="rad-el">NO<input class="rad" type="radio" name="active" value="0" /> </div>
							<div style="clear:both"></div>
							<input class="sub button-grey arrow" name="add_admin" type="submit" value="Submit">
						</div>
					</div>					
</form>
</div>
