<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="voir_zone_visiteur_<?php echo $row['ID_ZONE']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Voir l'zone</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body row">
                <div class="image-container"> 
					<img src="/ganjamah/assets/img/zone visiteur/<?php echo $row['IMAGE_ZONE']; ?>"> 
				</div>
                <div class="col-12 col-lg-6 details">
					<h2><?php echo $row['NOM_ZONE']; ?></h2>

					<input data-role="rating" data-value="<?php echo $row['NOTE_ZONE']; ?>">

					<br>
						<span class="text-muted"><?php echo $row['LOCALISATION_ZONE']; ?></span>
					<br><br>

					<p>
						<?php echo $row['DESCRIPTION_ZONE']; ?>
					</p>
                </div>
            </div>

		</div>
	</div>
</div>