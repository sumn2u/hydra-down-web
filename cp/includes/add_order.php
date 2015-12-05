<?php
$clas="";
if(isset($_POST['add_order'])){
	//ord_name
	$ord_name = $_POST['ord_name'];
	$ord_cat = $_POST['category'];
	$ord_table = $_POST['table'];
	$ord_item = $_POST['item'];
	$ord_qty = $_POST['quantity'];

	$query = mysql_query("insert into tbl_order(order_name,cat_id, table_id, item_id, quantity) values('$ord_name','$ord_cat','$ord_table','$ord_item','$ord_qty')");
	if($query){
		$msg = "Successfully Order Added.";
		$clas = "four";
		}
	else{
		$msg = mysql_error();
		$clas = "three";
		}
	}

?>

<div class="form-elements">
<form name="ads" action="" method="post" enctype="multipart/form-data">
					<h1>ADD ORDER</h1>
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
							        <input type="text" name="ord_name" value="" />
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
                            <input type="text" name="quantity" value="" />

							      <div style="clear:both"></div>

							<input class="sub button-grey arrow" name="add_order" type="submit" value="Submit">
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
