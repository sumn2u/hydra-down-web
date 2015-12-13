<?php session_start() ?>
<?php
if(!isset($_SESSION['loggedIn'])){
	header('Location: login.php');
	}
else {
?>
<?php include('includes/db.php'); ?>
<?php include('includes/header.php'); ?>
		<div id="layout">
			<div id="header-wrapper">
				<div id="header">
					<div id="user-wrapper" class="fixed">
						<div class="user">
							<span>Welcome <a href="#"><?php echo $_SESSION['loggedIn']; ?> !</a></span>
							<span class="logout"><a href="logout.php">Logout</a></span>
						</div>
					</div>

					<div id="launcher-wrapper">
						<div class="logo">
							<a href="index.php"><h1>HYDRA </h1> </a>
						</div>
					</div>
				</div>
			</div>

			<div class="page fixed">
				<div id="sidebar">
					<?php include('includes/sidebar.php'); ?>
				</div>


				<div id="content">
					<?php
                    if(isset($_GET['page'])){
						switch($_GET['page']){
							case "category":
							include('includes/category.php');
							break;

							case "add_category":
							include('includes/add_category.php');
							break;

							case "edit_category":
							include('includes/edit_category.php');
							break;

							case "delete_category":
							include('includes/del_category.php');
							break;

							case "ads":
							include('includes/ads.php');
							break;

							case "add_ads":
							include('includes/add_ads.php');
							break;

							case "edit_ads":
							include('includes/edit_ads.php');
							break;

							case "delete_include_exclude":
							include ('includes/delete_include_exclude.php');
							break;

							case "delete_ads":
							include('includes/del_ads.php');
							break;

							case "admin":
							include('includes/admin.php');
							break;

							case "add_admin":
							include('includes/add_admin.php');
							break;

							case "edit_admin":
							include('includes/edit_admin.php');
							break;

							case "delete_admin":
							include('includes/del_admin.php');
							break;

							case "manage_table":
							include('includes/manage_table.php');
							break;

							case "add_table":
							include('includes/add_table.php');
							break;

              case "delete_table":
							include('includes/delete_table.php');
							break;

							case "edit_table":
							include('includes/edit_table.php');
							break;

							case "add_order":
							include('includes/add_order.php');
							break;

							case "manage_order":
							include('includes/manage_order.php');
							break;

							case "delete_image":
							include('includes/delete_image.php');
							break;

							case "edit_order":
							include('includes/edit_order.php');
							break;

							case "manage_contact":
							include('includes/manage_contact.php');
							break;

							case "mange_contactmsg":
							include('includes/manage_contactMsg.php');
							break;

							case "manage_trip":
							include('includes/trip_planner.php');
							break;

							case "include_exclude":
							include('includes/include_exclude.php');
							break;

							case "delete_trip_msg":
							include('includes/delete_trip_planner.php');
							break;

							case "delete_contact_message":
							include('includes/del_contact_message.php');
							break;

							case "delete_contact_msg":
							include('includes/del_contact_msg.php');
							break;

							case "add_news":
							include('includes/add_news.php');
							break;

							case "manage_news":
							include('includes/manage_news.php');
							break;

							case "delete_news":
							include('includes/delete_news.php');
							break;
							}
					}
					else{ ?>
                    <div class="fixed index-large-icon">
						<h1>LATEST  PRODUCTS</h1>
                        <div class="img-wrapper">
                        <?php
							$image = mysql_query("select * from tbl_product ORDER BY ad_created DESC LIMIT 8");
							while($image2 = mysql_fetch_array($image)){ ?>
                            <div class="img-box">
                            <img src='../uploads/<?php echo $image2["ad_image"]; ?>' width="120" height="100"  />
                            <p class="img-title"><?php echo $image2["ad_title"]; ?></p>
                            <p class="img-date"><?php echo date('jS M Y', strtotime($image2["ad_created"])); ?></p>
                            </div>
                        <?php } ?>

                        </div>
					</div>
				<?php } ?>
				</div>

			</div>
		</div>





	</body>

</html>
<?php } ?>
