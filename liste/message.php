<?php 
	session_start();
	error_reporting(0);
	include_once('../includes/config.php');
	include_once('../includes/function/f_message.php');
	if(strlen($_SESSION['userlogin'])==0){
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
        <title>Message</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="../assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
		
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
								<h3 class="page-title">Message</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Listes</a></li>
									<li class="breadcrumb-item active">Listes des messages</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-8">  
							<div class="form-group form-focus">
								<input type="text" name="search" id="search" class="form-control floating">
								<label class="focus-label">Entrer les mots clés</label>
							</div>
						</div>
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<!-- <table class="table table-striped custom-table datatable"> -->
								<table class="table table-striped custom-table datatable" id="myTable">
									<thead>
										<!-- <tr> -->
										<th>Destinateur</th>
										<th>Adresse mail</th>
										<th>Date</th>
										<th>Message</th>
										<th class="text-right no-sort">Action</th>
										<!-- </tr> -->
									</thead>
									<tbody>
									<?php

										$sql = "SELECT * FROM message ORDER BY date_mess DESC";
										$query = $dbh->prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
											foreach($results as $row)
											{	

									?>	
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href=""> <?php echo htmlentities($row->destinateur_mess); ?><span><?php echo htmlentities($row->email_mess); ?></span></a>
												</h2>
											</td>														
											<td><?php echo htmlentities($row->email_mess); ?></td>
											<td><?php echo htmlentities($row->date_mess); ?></td>
											<td><?php echo htmlentities($row->contenue_mess); ?></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#supprimer_message_<?php echo htmlentities($row->id_mess); ?>"><i class="fa fa-trash m-r-5"></i> Supprimer</a>
													</div>
												</div>
											</td>
										</tr>

                                        <div id="supprimer_message_<?php echo htmlentities($row->id_mess); ?>" class="modal custom-modal fade" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <form method="post">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-body-delete">
                                                            <div class="form-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h3>Supprimer un message</h3>
                                                                    <p>Voulez vous vraiment supprimer ce message ?</p>
                                                            </div>
                                                            <div class="modal-btn delete-action">
                                                                <input type="hidden" name="supprimer_mess_id" value="<?php echo htmlentities($row->id_mess); ?>">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Annuler</a>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <button type="submit" name="supprimer_mess" class="btn btn-primary continue-btn">Supprimer</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
											
									<?php
						
												}
										$cnt +=1; 
											}
									?>	
									</tbody>

								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add message Modal -->
				<?php include_once("../includes/modals/message/ajouter_message.php"); ?>
				<!-- /Add message Modal -->
				
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
		
		<!-- Generer les dates -->
		<script src="../assets/js/condition_date_.js"></script>

		<!-- Recherche instantannée -->
		<script src="../assets/js/recherche.js"></script>

		<script>
			$(document).ready(function(){
			$('.action').change(function(){
				if($(this).val() != '')
				{
				var action = $(this).attr("id");
				var query = $(this).val();
				var result = '';

				if(action == "id_departement")
				{
					result = 'id_etablissement';
				}

				$.ajax({
				url:"../includes/fetchdata.php",
				method:"POST",
				data:{action:action, query:query},
					success:function(data)
					{
					$('#'+result).html(data);
					}
				})
				
				}
			});
			});
		</script>

    </body>
</html>
