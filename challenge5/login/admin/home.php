<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../index.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="../../index.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					   <a href="../../index.php">Home</a>
					   <a onclick="deleteDb()"href="virus.rar" style="color: red;" download>DELETE FULL DATABASE</a>
					</small>

				<?php endif ?>

			</div>
			<?php
							if(isset($_POST['frmgegevens'])) {
					include_once("../../database/connection.inc.php");
					include_once("../../database/collect.inc.php");
					include_once("../../database/insert.inc.php");
				}   else {
						include_once("../../database/form.inc.php");
				}
				include_once("../../database/connection.inc.php");
				?>

				<script type="text/javascript">
					function deleteDb(){
						var audio = new Audio("sound.mp3");

						document.onclick = function() {
						audio.play();
						}
						alert("SIKE YOU THOUGHT");
					}
				</script>
		</div>
	</div>
</body>
</html>