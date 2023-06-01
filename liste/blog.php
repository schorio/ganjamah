<?php 
	session_start();
	error_reporting(0);
	include_once('../includes/config.php');
	include_once('../includes/function/f_blog.php');

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
        <title>Blog</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="../assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="../assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">
		
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
								<h3 class="page-title">Blog</h3>
								<ul class="breadcrumb">
								<li class="breadcrumb-item">Listes</li>
									<li class="breadcrumb-item active"><a href="">Listes des blogs</a></li>
								</ul>
							</div>
								<div class="col-auto float-right ml-auto">
									<a href="#" class="btn add-btn" data-toggle="modal" data-target="#ajouter_blog"><i class="fa fa-plus"></i> Blog </a>
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
					<div class="row">
								<?php
										$sql = "SELECT * from blog";

										$query = $dbh->prepare($sql);
										$query->execute();
										
										while ($row = $query->fetch(PDO::FETCH_ASSOC))
										{	
											$DATE_BLOG = date('Y-m-d', strtotime($row['DATE_BLOG']));
											
									?>
								<div class="col-lg-4 col-sm-6 col-12 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">

											<div class="dropdown dropdown-action profile-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modifier_blog_<?php echo $row['ID_BLOG']; ?>"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#supprimer_blog_<?php echo $row['ID_BLOG']; ?>"><i class="fa fa-trash m-r-5"></i> Supprimer</a>
												</div>
											</div>
											
											<h3 class="project-title">
												<a href="" data-toggle="modal" data-target="#voir_blog_<?php echo $row['ID_BLOG']; ?>">
												<?php echo $row['TITRE_BLOG']; ?>
												</a>
											</h3>
											<small class="block text-ellipsis m-b-15">
											<span class="text-xs">par </span><span class="text-muted"><?php echo $row['AUTEUR_BLOG']; ?></span>
											</small><br>
											<p>
												<h4><span class="text-muted"><?php echo $row['DOMAINE_BLOG']; ?></span></h4>
												<h4>
												<?php echo $row['DATE_BLOG']; ?>
												</h4>
											</p>

										</div>
									</div>
								</div>	
						<?php
						
						include("../includes/modals/blog/supprimer_blog.php");
						include("../includes/modals/blog/modifier_blog.php");
						include("../includes/modals/blog/voir_blog.php");

   							}
    					?>		
					</div>

                </div>
				<!-- /Page Content -->
				
				<!-- Add blog Modal -->
				<?php include_once("../includes/modals/blog/ajouter_blog.php");?>
				<!-- /Add blog Modal -->
				
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
		
        <!-- Datatable JS -->
        <script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="../assets/js/app.js"></script>
		

		<!-- Recherche instantannée -->
		<script src="../assets/js/recherche.js"></script>
		
    </body>
</html>