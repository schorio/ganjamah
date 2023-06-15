<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="voir_galerie_<?php echo $row['ID_GALERIE']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Voir l'galerie</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body centereee row">
                <div class="image-container"> 
					<img src="/ganjamah/assets/img/galerie/<?php echo $row['IMAGE_GALERIE']; ?>"> 
				</div>
                <div class="col-12 col-lg-6 details">
					<h2><?php echo $row['TITRE_GALERIE']; ?></h2>

					<br>
						<span class="text-muted"><?php echo $row['IMAGE_GALERIE']; ?></span>
					<br>

                </div>
            </div>

		</div>
	</div>
</div>