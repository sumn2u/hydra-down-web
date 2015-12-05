



<div id="content">
					<h1>MANAGE ORDER</h1>
                    <ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >ORDER</a></li>
					</ul>

					<?php
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "Image deleted successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<div class="form-elements">
					<form name="ads" action="" method="post">

					            <div class="notice-<?php echo $clas; ?>">
					                    	<?php if(isset($msg)){ echo $msg; } ?>
											<span></span>
										</div>
										<div class="fixed form-elements-inputs">
											<div class="col-240">
												<h4>Search Order</h4>

					                            <h4></h4>
											</div>
											<div class="col-400">

					                <input type="text" name="ord_title" value="" />

												</div>
												<input class="sub button-grey arrow" name="search_order" type="submit" value="Submit">
											</div>
										</div>
					</form>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'>
							<thead>
								<tr>
									<th class="first">ID</th>
									<th>Category</th>
                                    <th>Table</th>
                                    <th>Item</th>
																		<th>Quantity</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$clas="";
								if(isset($_POST['search_order'])){

									$ord_title = $_POST['ord_title'];
								$searchque = "SELECT id ,(select cat_name from tbl_package where id= cat_id) as category , (select name from tbl_table where id= table_id) as tablebook, (select ad_title from tbl_item where ad_id= item_id) as item , quantity FROM tbl_order";
								$querySearch = mysql_query($searchque);
								while($result = mysql_fetch_array($querySearch)){
								?>
								<tr>
									<td><?php echo $result[0]; ?></td>
							    <td><?php echo $result[1]; ?></td>
									<td><?php echo $result[2]; ?></td>
									<td><?php echo $result[3]; ?></td>
									<td><?php echo $result[4]; ?></td>
                                    <td><a href="index.php?page=edit_order&id=<?php echo $result[0]; ?>" class="">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=edit_order&id=<?php echo $result[0]; ?>" class="">Delete</a></td>
								</tr>

									<?php }

								} ?>
							</tbody>
					</table>
</div>
