<?php
 $clas="";
if(isset($_POST['upd_page'])){
	$id = $_POST['id'];
  $ord_name = $_POST['ordername'];
  $ord_cat = $_POST['category'];
  $ord_table = $_POST['table'];
  $ord_item = $_POST['item'];
  $ord_qty = $_POST['quantity'];

  $Sql = "update tbl_order set order_name='$ord_name',  cat_id='$ord_cat',  table_id='$ord_table', item_id='$ord_item', quantity='$ord_qty' where id='$id'";
	$query = mysql_query($Sql);
  if($query){
		$msg = "Successfully Order Updated.";
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
	$qpage = mysql_query("select * from tbl_order where id='$id'");
	$qpage1 = mysql_fetch_array($qpage);
	}
?>
<!-- <script type="text/javascript" src="ckeditor/ckeditor.js"></script> -->
<div class="form-elements">

<!-- This is used to view the image that are uploaded to the ckeditor
header("Content-type: image/jpeg");
echo '<img src="data:image/jpeg;base64,' . $qpage1[2] . '" />'; -->

<form name="" action="" method="post">
					<h1>UPDATE ORDER</h1>
					<div class="hr"></div>
                    <div class="notice-<?php echo $clas; ?>">
                    	<?php if(isset($msg)){ echo $msg; } ?>
						<span></span>
					</div>
					<div class="fixed form-elements-inputs">
            <div class="col-240">
							              <h4>Order Name</h4>
                            <h4>Select Table</h4>
                            <h4>Select Category</h4>
                            <h4>Select Item </h4>
														<h4>Select Quantity</h4>
                            <h4></h4>
						</div>
						<div class="col-400">
              	<input type="hidden" name="id" value="<?php echo $qpage1['id']; ?>" />
							        <input type="text" name="ordername" value="<?php echo $qpage1['order_name']; ?>" />
							<select name="table">
                            <?php
								$querytable = mysql_query("select * from tbl_table where status='1'");
								while($querytablelist = mysql_fetch_array($querytable)){ ?>
                                <option value="<?php echo $querytablelist['id']; ?>"><?php echo $querytablelist['name']; ?></option>
                            <?php } ?>
                  </select>
							<select name="category">
                            <?php
								$query1 = mysql_query("select * from tbl_package  where publish='1'");
								while($query2 = mysql_fetch_array($query1)){ ?>
                                <option value="<?php echo $query2['id']; ?>"><?php echo $query2['cat_name']; ?></option>
                            <?php } ?>
                  </select>
									<select name="item">
																<?php
										$queryitem = mysql_query("select * from tbl_item  where publish='1'");
										while($queryitemlist = mysql_fetch_array($queryitem)){ ?>
																		<option value="<?php echo $queryitemlist['ad_id']; ?>"><?php echo $queryitemlist['ad_title']; ?></option>
																<?php } ?>
								</select>
                            <input type="text" name="quantity" value="<?php echo $qpage1['quantity']; ?>" />

							      <div style="clear:both"></div>


							<input class="sub button-grey arrow" name="upd_page" type="submit" value="Submit">
						</div>
					</div>
</form>
</div>
