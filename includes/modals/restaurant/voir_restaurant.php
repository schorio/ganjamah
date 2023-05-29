<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="voir_restaurant_<?php echo htmlentities($row->id_resto); ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Voir l'resto</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body row">
                <div class="col-12 col-lg-6 voir"> 
					<img src="/ganjamah/assets/img/restaurant/<?php echo htmlentities($row->image_resto); ?>"> 
				</div>
                <div class="col-12 col-lg-6">
					<h2><?php echo htmlentities($row->nom_resto); ?></h2>

					<input data-role="rating" data-value="<?php echo htmlentities($row->note_resto); ?>">

					<br>
						<span class="text-muted"><?php echo htmlentities($row->adresse_resto); ?></span>
					<br>
						<span class="text-xs">0<?php echo htmlentities($row->contact_resto); ?></span>

					<p class="form-group mt-3 pt-3">
						<?php echo htmlentities($row->description_resto); ?>
					</p>
                </div>
            </div>

		</div>
	</div>
</div>