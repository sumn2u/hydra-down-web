<?php
$cat = mysql_query("select * from tbl_package");
$catnum = mysql_num_rows($cat);
$ads = mysql_query("select * from tbl_item");
$adsnum = mysql_num_rows($ads);
$admin = mysql_query("select * from tbl_admin");
$adminum = mysql_num_rows($admin);
$page = mysql_query("select * from tbl_table");
$pagenum = mysql_num_rows($page);
$ord = mysql_query("select * from tbl_order");
$pageord = mysql_num_rows($ord);
$contact = mysql_query("select * from tbl_suscribe");
$conatctnum = mysql_num_rows($contact);
$contactMsg = mysql_query("select * from tbl_contact");
$conatctMsgnum = mysql_num_rows($contactMsg);
$news = mysql_query("select * from tbl_news");
$newsnum = mysql_num_rows($news);
$tripplanner = mysql_query("select * from tbl_trip_planner");
$tripplannernum = mysql_num_rows($tripplanner);
?>
<ul id="navigation">
						<li class="first active">
							<div><a href="index.php">Dashboard</a><span class="icon-nav dashboard"></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=category">Category</a><span class="icon-nav calendar"></span><span><?php echo $catnum; ?></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=add_category">Add New Category</a><span class="icon-nav interface-elements"></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=ads">Items</a><span class="icon-nav form-elements"></span><span><?php echo $adsnum; ?></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=add_ads">Add New Item</a><span class="icon-nav settings"></span></div>
							<div class="back"></div>
						</li>

                        <li>
							<div><a href="index.php?page=admin">Admins</a><span class="icon-nav settings"></span><span><?php echo $adminum; ?></span></div>
							<div class="back"></div>
						</li>

						<li>
							<div><a href="index.php?page=add_admin">Add A New Admin</a><span class="icon-nav users"></span></div>
							<div class="back"></div>
						</li>
						 <li>
							<div><a href="index.php?page=manage_table">Manage Tabels</a><span class="icon-nav settings"></span> <span><?php echo $pagenum; ?></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=add_table">Add Table</a><span class="icon-nav users"></span></div>
							<div class="back"></div>
						</li>
						<li>
						<div><a href="index.php?page=manage_order">Manage Order</a><span class="icon-nav settings"></span> <span><?php echo $pageord; ?></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=add_order">Add A New Order </a><span class="icon-nav users"></span></div>
							<div class="back"></div>
						</li>
							<!--
						<li>
							<div><a href="index.php?page=manage_trip">Manage Trip Planner</a><span class="icon-nav settings"></span> <span><?php echo $tripplannernum; ?></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=manage_news">Manage News</a><span class="icon-nav settings"></span> <span><?php echo $newsnum; ?></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=add_news">Add A News </a><span class="icon-nav users"></span></div>
							<div class="back"></div>
						</li>
						<li>
							<div><a href="index.php?page=mange_contactmsg">Contacts</a><span class="icon-nav settings"></span> <span><?php echo $conatctMsgnum; ?></span></div>
							<div class="back"></div>
						</li>
						<li class="last">
							<div><a href="index.php?page=manage_contact">Subscription</a><span class="icon-nav settings"></span> <span><?php echo $conatctnum; ?></span></div>
							<div class="back"></div>
						</li> -->
					</ul>
