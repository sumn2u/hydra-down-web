<div id="content">
					<h1>MANAGE NEWS</h1>
                    <ul class="breadcrumb">
						<li class="home"><a href="index.php" ></a></li>
						<li class="last"><a href="#" >News</a></li>
					</ul>
				
					<?php 
					if(isset($_GET['msg'])){?>
						<div class="notice-four">
                    	<?php echo "News deleted successfully"; ?>
						<span></span>
						</div>
						<?php }
					?>
					<table id="sample-table-sortable" class="sortable normal-table" cellspacing='0'> 
							<thead> 
								<tr> 
									<th class="first">ID</th> 
									<th>News Title</th> 
                                    <th>News Description</th>
                                    <th>News Status</th> 
                                    <th>Action</th> 
								</tr> 
							</thead> 
							<tbody> 
                            <?php
								$query = mysql_query("select * from tbl_news");
								while($result = mysql_fetch_array($query)){
							?>
								<tr> 
									<td><?php echo $result[0]; ?></td> 
									<td><?php echo $result['newstitle']; ?></td> 
                                    <td><?php echo $result['newsdesc']; ?></td>
                                    <td><?php echo $result['status']?></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=delete_news&id=<?php echo $result[0]; ?>" class="">Delete</a></td>
								</tr> 
                            <?php } ?>
							</tbody>
					</table> 
</div>