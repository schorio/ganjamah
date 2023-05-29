<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="modifier_zone_visiteur_<?php echo htmlentities($row->id_zone); ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modifier un zone visiteur</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form id="sampleForm" name="sampleForm" method="POST" enctype="multipart/form-data">
					<div class="row">
                        <input name="id_zone" value="<?php echo htmlentities($row->id_zone); ?>" type="hidden">
						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-form-label">Nom : <span class="text-danger">*</span></label>
								<input name="n_nom_zone" class="form-control" value="<?php echo htmlentities($row->nom_zone); ?>" type="text">
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-form-label">Note : <span class="text-danger">*</span></label>
								<input name="n_note_zone" class="form-control" value="<?php echo htmlentities($row->note_zone); ?>" type="number">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">localisation : </label>
								<input name="n_localisation_zone" class="form-control" value="<?php echo htmlentities($row->localisation_zone); ?>" type="text">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Description : <span class="text-danger">*</span></label>
								<input name="n_description_zone" class="form-control" value="<?php echo htmlentities($row->description_zone); ?>" type="text">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="col-form-label">Image </label>
								<input name="old_image" value="<?php echo htmlentities($row->image_zone); ?>" type="hidden">
                                <input class="form-control" name="n_image" type="file">
							</div>
						</div>
					</div>
					
					<div class="submit-section">
						<button type="submit" name="modifier_zone" class="btn btn-primary submit-btn">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

