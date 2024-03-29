<?php 
	$username_ut = $_SESSION['userlogin'];

	$sql_user = "SELECT * from UTILISATEUR WHERE \"USERNAME_UT\" = '$username_ut'";
	$query_user = $dbh->prepare($sql_user);
	$query_user->execute();
	$r_user = $query_user->fetch(PDO::FETCH_ASSOC);
?>
<div class="header">
	<!-- Logo -->
	<div class="header-left">
		<a href="/ganjamah/liste/hotel.php" class="logo">
			<!-- <img src="assets/img/logo.png" width="40" height="40" alt=""> -->
			<i class="fa fa-city"></i> GanjaMah.
		</a>
	</div>
	<!-- /Logo -->
	
	<a id="toggle_btn" href="javascript:void(0);">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	
	<!-- Header Title -->
	<div class="page-title-box">
		<h3>ADMINISTRATEUR</h3>
	</div>
	<!-- /Header Title -->
	
	<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
	
	<!-- Header Menu -->
	<ul class="nav user-menu">
		
		<li class="nav-item dropdown has-arrow main-drop">
			<a href="" class="nav-link">
				<span class="user-img">
					<img src="/ganjamah/assets/img/utilisateur/<?php echo $r_user['IMAGE_UT']; ?>">
					<span class="status online"></span>
				</span>
				<span><?php echo ucfirst($username_ut); ?></span>
			</a>
		</li>
	</ul>
	<!-- /Header Menu -->
	
	<!-- Mobile Menu -->
	<div class="dropdown mobile-user-menu">
		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="">My Profile</a>
			<a class="dropdown-item" href="">Settings</a>
			<a class="dropdown-item" href="/ganjamah/logout.php">Logout</a>
		</div>
	</div>
	<!-- /Mobile Menu -->
	
</div>