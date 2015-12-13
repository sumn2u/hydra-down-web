<div id="content">
					<ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Category</a></li>
					</ul>

					<?php
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "Category deleted successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'>
							<thead>
								<tr>
									<th class="first">ID</th>
									<th>Category Name</th>
									<th>Image</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php
								$query = mysql_query("select * from tbl_package");
								while($result = mysql_fetch_array($query)){
							?>
								<tr>
									<td><?php echo $result[0]; ?></td>
									<td><?php echo $result[1]; ?></td>
									  <td><img style="padding-top:5px" src="../uploads/<?php echo $result['cat_image']; ?>" width="40" height="40" /></td>
                                    <td><a href="index.php?page=edit_category&id=<?php echo $result[0]; ?>" class="">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=delete_category&id=<?php echo $result[0]; ?>" class="">Delete</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=include_exclude&id=<?php echo $result[0]; ?>" class="">Include/Excude</a></td>
								</tr>
                            <?php } ?>
							</tbody>
					</table>
</div>
