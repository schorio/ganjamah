<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="ajouter_blog" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ajouter un blog</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Auteur : <span class="text-danger"></span></label>
								<input name="auteur_blog" class="form-control" type="text">
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Titre : </label>
								<input name="titre_blog" class="form-control" type="text">
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Domaine : <span class="text-danger"></span></label>
								<input name="domaine_blog" class="form-control" type="text">
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-form-label">Date : <span class="text-danger"></span></label>
								<input name="date_blog" class="form-control" type="date">
							</div>
						</div>

						<div class="col-md-9">
							<div class="form-group">
								<label class="col-form-label">Image </label>
								<input class="form-control" name="image" type="file">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Contenue : <span class="text-danger"></span></label>
								<input name="contenue_blog" class="form-control" type="text">
							</div>
						</div>

					</div>
					
					<div class="submit-section">
						<button type="submit" name="ajouter_blog" class="btn btn-primary submit-btn">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

