<div id="content">
					<ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Manage Trip Planner</a></li>
					</ul>
				
					<?php 
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "Trip deleted successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'> 
							<thead> 
								<tr> 
									<th class="first">ID</th> 
									<th>Leader Information</th> 
									<th>Tour Information</th> 
                                    <th>Action</th> 

								</tr> 
							</thead> 
							<tbody> 
                            <?php
								$query = mysql_query("select * from tbl_trip_planner");
								while($result = mysql_fetch_array($query)){
							?>
								<tr> 
									<td><?php echo $result[0]; ?></td> 
									<td><?php echo $result[1]; ?></td> 
									<td><?php echo $result[2]; ?></td> 
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=delete_trip_msg&id=<?php echo $result[0]; ?>" class="">Delete</a></td>
								</tr> 
                            <?php } ?>
							</tbody>
					</table> 
</div>