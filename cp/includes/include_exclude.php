<?php
$id = $_GET['id'];
$clas="";
$clas1="";
if(isset($_POST['add_include'])){
	$incldname = $_POST['include_name'];
  $cat_id =$_POST['cat_id'];
	$include_exclude = $_POST['include_exclude'];

	if(empty($incldname )){
		$msg = "Include Name is Required!!!";
		$clas1 = "three";
		}
		else{

			$query = mysql_query("insert into tbl_include_exclude (cat_id,name, include_exclude) values('$cat_id','$incldname','$include_exclude')");

			if($query){
				$msg1 = "Successfully Include Added.";
				$clas1 = "four";
				}
			else{
				$msg1 = mysql_error();
				$clas1 = "three";
				}
			}
	}

  if(isset($_POST['add_exclude'])){
  	$incldname = $_POST['include_name'];
    $cat_id =$_POST['cat_id'];
  	$include_exclude = $_POST['include_exclude'];

  	if(empty($incldname )){
  		$msg = "Include Name is Required!!!";
  		$clas = "three";
  		}
  		else{

  			$query = mysql_query("insert into tbl_include_exclude (cat_id,name, include_exclude) values('$cat_id','$incldname','$include_exclude')");

  			if($query){
  				$msg = "Successfully Include Added.";
  				$clas = "four";
  				}
  			else{
  				$msg = mysql_error();
  				$clas = "three";
  				}
  			}
  	}

?>

<h1> Include/Exclude</h1>
<br/>
<h3>Include</h3>
<hr/>

<hr/>
<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'>
    <thead>
      <tr>
        <th class="first">ID</th>
        <th>Name</th>

                          <th>Action</th>
      </tr>
    </thead>
    <tbody>
                  <?php
      $query = mysql_query("select * from tbl_include_exclude where include_exclude='include'");
      while($result = mysql_fetch_array($query)){
    ?>
      <tr>
        <td><?php echo $result[0]; ?></td>
        <td><?php echo $result[2]; ?></td>
        <td><a href="index.php?page=delete_include_exclude&id=<?php echo $result[0]; ?>" class="">Delete</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
                  <?php } ?>
    </tbody>
</table>
<br/>
<div class="form-elements">
<form name="" action="" method="post">


                    <div class="notice-<?php echo $clas1; ?>">
                 <!-- <div class="notice-four"> -->
                    	<?php if(isset($msg1)){ echo $msg1; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
						<div class="col-240">
							<h4>Include</h4>


                            <h4>&nbsp;</h4>
						</div>
						<div class="col-400">
              <input type="hidden" name="cat_id" value="<?php echo $id ?>">
							<input type="text" name="include_name" value="" />
                <input type="hidden" name="include_exclude" value="include">
							<input class="sub button-grey arrow" name="add_include" type="submit" value="Submit">
						</div>
					</div>
</form>
</div>

<br/> </br/>
<h3>Exclude</h3>
<hr/>
<hr/>
<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'>
    <thead>
      <tr>
        <th class="first">ID</th>
        <th>Name</th>

                          <th>Action</th>
      </tr>
    </thead>
    <tbody>
                  <?php
      $query = mysql_query("select * from tbl_include_exclude where include_exclude='exclude'");
      while($result = mysql_fetch_array($query)){
    ?>
      <tr>
        <td><?php echo $result[0]; ?></td>
        <td><?php echo $result[2]; ?></td>
        <td><a href="index.php?page=delete_include_exclude&id=<?php echo $result[0]; ?>" class="">Delete</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
                  <?php } ?>
    </tbody>
</table>
<br/>
<div class="form-elements">
  <form name="" action="" method="post">


                      <div class="notice-<?php echo $clas; ?>">
                   <!-- <div class="notice-four"> -->
                      	<?php if(isset($msg)){ echo $msg; } ?>
  						<span></span>
  					</div>
  					<div class="fixed form-elements-inputs">
  						<div class="col-240">
  							<h4>Include</h4>


                              <h4>&nbsp;</h4>
  						</div>
  						<div class="col-400">
                <input type="hidden" name="cat_id" value="<?php echo $id ?>">
  							<input type="text" name="include_name" value="" />
                  <input type="hidden" name="include_exclude" value="exclude">
  							<input class="sub button-grey arrow" name="add_exclude" type="submit" value="Submit">
  						</div>
  					</div>
  </form>
</div>
