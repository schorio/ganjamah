<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="voir_circuit_<?php echo $row['ID_CIRCUIT']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Voir l'circuit</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body centereee row">
                <div class="image-container"> 
					<img src="/ganjamah/assets/img/circuit/<?php echo $row['IMAGE_CIRCUIT']; ?>"> 
				</div>
                <div class="col-12 col-lg-6 details">
					<h2><?php echo $row['LOCALISATION_CIRCUIT']; ?></h2>

						<span class="text-muted"><?php echo $row['DUREE_CIRCUIT']; ?> jour(s)</span>
					<br>
						<span class="text-xs"><?php echo $row['PRIX_CIRCUIT']; ?> Ar</span>
					<br>
					<br>
						<span class="text-muted"><?php echo $row['PLACE_CIRCUIT']; ?></span><span class="text-xs"> places disponibles</span>
					<br>

					<p>
						<?php echo $row['DESCRIPTION_CIRCUIT']; ?>
					</p>
                </div>
            </div>

		</div>
	</div>
</div>