<?php 
	session_start();
	error_reporting(0);
	include_once('../includes/config.php');
	// include_once("../includes/functions.php");
	include_once("../includes/function/f_circuit.php");

	if(strlen($_SESSION['userlogin'])==0)
	{
		header('location: ../login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title> Listes des circuits</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/ganjamah.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../assets/font-awesome-6/css/all.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="../assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">

		<link rel="stylesheet" href="../assets/css/metro-all.min.css">

		<!-- Main CSS -->
        <!-- <link rel="stylesheet" href="../assets/css/test.css"> -->
		
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.min.js"></script>
			<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("../includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("../includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Circuit</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="circuit.php">Listes</a></li>
									<li class="breadcrumb-item active">Listes des circuits</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#ajouter_circuit"><i class="fa fa-plus"></i> Circuit </a>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-8">  
							<div class="form-group form-focus">
								<input type="text" name="search_1" id="search_1" class="form-control floating">
								<label class="focus-label">Entrer les mots clés</label>
							</div>
						</div>
                    </div>
					<!-- Search Filter -->

					<!-- user profiles list starts her -->
					<div class="row staff-grid-row">

						<?php

							$sql = "SELECT * from circuit";

							$query = $dbh->prepare($sql);
							$query->execute();
							
							while ($row = $query->fetch(PDO::FETCH_ASSOC))
							{
											
						?>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="#"data-toggle="modal" data-target="#voir_circuit_<?php echo $row['ID_CIRCUIT']; ?>" class="avatar"><img src="/ganjamah/assets/img/circuit/<?php echo $row['IMAGE_CIRCUIT']; ?>" alt="image"></a>
								</div>
									<div class="dropdown profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modifier_circuit_<?php echo $row['ID_CIRCUIT']; ?>"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#supprimer_circuit_<?php echo $row['ID_CIRCUIT']; ?>"><i class="fa fa-trash m-r-5"></i> Supprimer</a>
										</div>
									</div>
								<div>
									<h4 class="user-name m-t-10 mb-0 text-ellipsis"><?php echo $row['LOCALISATION_CIRCUIT']; ?></h4>
									<h6 class="user-name text-muted"><?php echo $row['DUREE_CIRCUIT']; ?> jour(s)</h6>
                                    <h6 class="user-name text-muted"><?php echo $row['PRIX_CIRCUIT']; ?> Ar</h6>
								</div>
							</div>
						</div>	
						<?php
						
						include("../includes/modals/circuit/supprimer_circuit.php");
						include("../includes/modals/circuit/voir_circuit.php");
						include("../includes/modals/circuit/modifier_circuit.php");
						
						    }
						?>		
					</div>

    			</div>
				<!-- /Page Content -->
				
				<!-- Add circuit Modal -->
				<?php include_once("../includes/modals/circuit/ajouter_circuit.php"); ?>
				<!-- /Add circuit Modal -->
				
		
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="../assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="../assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="../assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="../assets/js/moment.min.js"></script>
		<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="../assets/js/app.js"></script>
		
		<!-- Recherche instantannée -->
		<script src="../assets/js/recherche.js"></script>

		<script src="../assets/js/metro.min.js"></script>
		
		
    </body>
</html>