<div id="content">
					<ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >Manage Subscription</a></li>
					</ul>
				
					<?php 
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "Message deleted successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'> 
							<thead> 
								<tr> 
									<th class="first">ID</th> 
									<th>Name </th> 
									<th>Email</th> 
                                    <th>Action</th> 

								</tr> 
							</thead> 
							<tbody> 
                            <?php
								$query = mysql_query("select * from tbl_suscribe");
								while($result = mysql_fetch_array($query)){
							?>
								<tr> 
									<td><?php echo $result[0]; ?></td> 
									<td><?php echo $result[1]; ?></td> 
									<td><?php echo $result[2]; ?></td> 
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=delete_contact_message&id=<?php echo $result[0]; ?>" class="">Delete</a></td>
								</tr> 
                            <?php } ?>
							</tbody>
					</table> 
</div>