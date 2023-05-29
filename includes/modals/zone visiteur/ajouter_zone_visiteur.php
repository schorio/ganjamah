<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="ajouter_zone_visiteur" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ajouter un zone visiteur</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form id="sampleForm" name="sampleForm" method="POST" enctype="multipart/form-data">
					<div class="row">

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Nom : <span class="text-danger">*</span></label>
								<input name="nom_zone" class="form-control" type="text">
							</div>
						</div>

						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-form-label">Localisastion : </label>
								<input name="localisation_zone" class="form-control" type="text">
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-form-label">Note : <span class="text-danger">*</span></label>
								<input name="note_zone" class="form-control" type="number">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Description : <span class="text-danger">*</span></label>
								<input name="description_zone" class="form-control" type="text">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="col-form-label">Image </label>
								<input class="form-control" name="image" type="file">
							</div>
						</div>
					</div>
					
					<div class="submit-section">
						<button type="submit" name="ajouter_zone" class="btn btn-primary submit-btn">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

