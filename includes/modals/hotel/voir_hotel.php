<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="voir_hotel_<?php echo $row['ID_HOTEL']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Voir l'hotel</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body centereee row">
                <div class="image-container"> 
					<img src="/ganjamah/assets/img/hotel/<?php echo $row['IMAGE_HOTEL']; ?>"> 
				</div>
                <div class="col-12 col-lg-6 details">
					<h2><?php echo $row['NOM_HOTEL']; ?></h2>

					<input data-role="rating" data-value="<?php echo $row['NOTE_HOTEL']; ?>">

					<br>
						<span class="text-muted"><?php echo $row['ADRESSE_HOTEL']; ?></span>
					<br>
						<span class="text-xs">0<?php echo $row['CONTACT_HOTEL']; ?></span>
					<br><br>

					<p>
						<?php echo $row['DESCRIPTION_HOTEL']; ?>
					</p>
                </div>
            </div>

		</div>
	</div>
</div>