<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="modifier_blog_<?php echo $row['ID_BLOG']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modifier un blog</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form id="sampleForm" name="sampleForm" method="POST" enctype="multipart/form-data">

				<div class="row">

					<input value="<?php echo $row['ID_BLOG']; ?>" name="id_blog" type="hidden">

					<div class="col-sm-12">
						<div class="form-group">
							<label class="col-form-label">Auteur : <span class="text-danger"></span></label>
							<input name="n_auteur_blog" value="<?php echo $row['AUTEUR_BLOG']; ?>" class="form-control" type="text">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label class="col-form-label">Titre : </label>
							<input name="n_titre_blog" value="<?php echo $row['TITRE_BLOG']; ?>" class="form-control" type="text">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label class="col-form-label">Domaine : <span class="text-danger"></span></label>
							<input name="n_domaine_blog" value="<?php echo $row['DOMAINE_BLOG']; ?>" class="form-control" type="text">
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-form-label">Date : <span class="text-danger"></span></label>
							<input name="n_date_blog" value="<?php echo $DATE_BLOG; ?>" class="form-control" type="date">
						</div>
					</div>

					<div class="col-md-9">
						<div class="form-group">
							<label class="col-form-label">Image </label>
							<input class="form-control" value="<?php echo $row['IMAGE_BLOG']; ?>" name="old_image_blog" type="hidden">
							<input class="form-control" name="n_image_blog" type="file">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<label class="col-form-label">Contenue : <span class="text-danger"></span></label>
							<input name="n_contenue_blog" value="<?php echo $row['CONTENUE_BLOG']; ?>" class="form-control" type="text">
						</div>
					</div>

				</div>
					
					<div class="submit-section">
						<button type="submit" name="modifier_blog" class="btn btn-primary submit-btn">Ajouter</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

