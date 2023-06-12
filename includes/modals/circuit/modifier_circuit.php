<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="modifier_circuit_<?php echo $row['ID_CIRCUIT']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modifier un circuit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form id="sampleForm" name="sampleForm" method="POST" enctype="multipart/form-data">
					<div class="row">
                        <input name="id_circuit" value="<?php echo $row['ID_CIRCUIT']; ?>" type="hidden">
						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-form-label">Localisation : <span class="text-danger">*</span></label>
								<input name="n_localisation_circuit" class="form-control" value="<?php echo $row['LOCALISATION_CIRCUIT']; ?>" type="text">
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-form-label">Duree : <span class="text-danger">*</span></label>
								<input name="n_duree_circuit" class="form-control" value="<?php echo $row['DUREE_CIRCUIT']; ?>" type="number">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Prix : </label>
								<input name="n_prix_circuit" class="form-control" value="<?php echo $row['PRIX_CIRCUIT']; ?>" type="text">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Place : <span class="text-danger">*</span></label>
								<input name="n_place_circuit" class="form-control" value="<?php echo $row['PLACE_CIRCUIT']; ?>" type="text">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Description : <span class="text-danger">*</span></label>
								<input name="n_description_circuit" class="form-control" value="<?php echo $row['DESCRIPTION_CIRCUIT']; ?>" type="text">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="col-form-label">Image </label>
								<input name="old_image" value="<?php echo $row['IMAGE_CIRCUIT']; ?>" type="hidden">
                                <input class="form-control" name="n_image" type="file">
							</div>
						</div>
					</div>
					
					<div class="submit-section">
						<button type="submit" name="modifier_circuit" class="btn btn-primary submit-btn">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

