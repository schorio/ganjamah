<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="modifier_hotel_<?php echo $row['ID_HOTEL']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modifier un hotel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form id="sampleForm" name="sampleForm" method="POST" enctype="multipart/form-data">
					<div class="row">
                        <input name="id_hotel" value="<?php echo $row['ID_HOTEL']; ?>" type="hidden">
						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-form-label">Nom : <span class="text-danger">*</span></label>
								<input name="n_nom_hotel" class="form-control" value="<?php echo $row['NOM_HOTEL']; ?>" type="text">
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-form-label">Note : <span class="text-danger">*</span></label>
								<input name="n_note_hotel" class="form-control" value="<?php echo $row['NOTE_HOTEL']; ?>" type="number">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Adresse : </label>
								<input name="n_adresse_hotel" class="form-control" value="<?php echo $row['ADRESSE_HOTEL']; ?>" type="text">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Contact : <span class="text-danger">*</span></label>
								<input name="n_contact_hotel" class="form-control" value="<?php echo $row['CONTACT_HOTEL']; ?>" type="text">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Description : <span class="text-danger">*</span></label>
								<input name="n_description_hotel" class="form-control" value="<?php echo $row['DESCRIPTION_HOTEL']; ?>" type="text">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="col-form-label">Image </label>
								<input name="old_image" value="<?php echo $row['IMAGE_HOTEL']; ?>" type="hidden">
                                <input class="form-control" name="n_image" type="file">
							</div>
						</div>
					</div>
					
					<div class="submit-section">
						<button type="submit" name="modifier_hotel" class="btn btn-primary submit-btn">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

