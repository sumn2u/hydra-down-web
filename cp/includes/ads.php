<div id="content">
					<h1>MANAGE ITEMS</h1>
                    <ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Items</a></li>
					</ul>

					<?php
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "Items deleted successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'>
							<thead>
								<tr>
									<th class="first">ID</th>
									<th>Item Name</th>
									<th>Package</th>
                                    <th>Image</th>
                                    <th>Views</th>
                                    <th>Created</th>
                                    <th>Publish</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php
								$query = mysql_query("select * from tbl_item");
								while($result = mysql_fetch_array($query)){
							?>
								<tr>
									<td><?php echo $result[0]; ?></td>
									<td><?php echo $result['ad_title']; ?></td>
									<td><?php echo $result['ad_cat']; ?></td>
                                    <td><img style="padding-top:5px" src="../uploads/<?php echo $result['ad_image']; ?>" width="40" height="40" /></td>
                                    <td><?php echo $result['ad_views']; ?></td>
                                    <td><?php echo $result['ad_created']; ?></td>
                                    <td><?php echo $result['publish']; ?></td>
                                    <td><a href="index.php?page=edit_ads&id=<?php echo $result[0]; ?>" class="">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=delete_ads&id=<?php echo $result[0]; ?>" class="">Delete</a></td>
								</tr>
                            <?php } ?>
							</tbody>
					</table>
</div>
