<div id="content">
					<ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Category</a></li>
					</ul>
				
					<?php 
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "Admin Deleted Successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'> 
							<thead> 
								<tr> 
									<th class="first">ID</th> 
									<th>User Name</th> 
									<th>Active</th> 
                                    <th>Action</th> 
								</tr> 
							</thead> 
							<tbody> 
                            <?php
								$query = mysql_query("select * from tbl_admin");
								while($result = mysql_fetch_array($query)){
							?>
								<tr> 
									<td><?php echo $result[0]; ?></td> 
									<td><?php echo $result['username']; ?></td> 
									<td><?php echo $result['active']; ?></td> 
                                    <td><a href="index.php?page=edit_admin&id=<?php echo $result[0]; ?>" class="">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=delete_admin&id=<?php echo $result[0]; ?>" class="">Delete</a></td>
								</tr> 
                            <?php } ?>
							</tbody>
					</table> 
</div>