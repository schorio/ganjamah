
		<div class="modal fade" id="exampleModalCenter_<?php echo $row['ID_CIRCUIT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="row">
					<div class=" col-md bg-image promo-img" style="background-image: url('/ganjamah/assets/img/circuit/<?php echo $row['IMAGE_CIRCUIT']; ?>');">
						<h3 class="price"><span class="text-muted"><?php echo number_format($row['PRIX_CIRCUIT'], 0, ',', ' '); ?> Ar</span> pour une personne</h3>
					</div>
				    <!-- <div class="col-md-1 divider"></div> -->
				    <div class="col-md reservation">
				      <div class="modal-body">
				      	<h3 class="mb-4">Reservation</h3>

				      	<form method="POST" enctype="multipart/form-data" class="signup-form">
				      		<div class="form-group">
				      			<input name="nom_reservation" type="text" class="form-control" placeholder="Nom et prenom(s)">
				      		</div>
				      		<div class="form-group">
				      			<input name="contact_reservation" type="text" class="form-control" placeholder="Contact">
				      		</div>
							  <div class="form-group">
				      			<input name="adresse_reservation" type="text" class="form-control" placeholder="Adresse">
				      		</div>
							  <div class="form-group">
				      			<input name="cin_reservation" type="number" class="form-control" placeholder="Numero CIN">
				      		</div>
				      		<div class="form-group">
								<input name="place_reservation" id="input_1" type="number" class="form-control" placeholder="Nombre de personne (<?php echo $row['PLACE_CIRCUIT']; ?> dispo)" min="1" max="<?php echo $row['PLACE_CIRCUIT']; ?>">
								<input id="input_11" type="hidden" class="form-control" value="<?php echo $row['PRIX_CIRCUIT']; ?>">
							</div>
							<div class="form-group">
								<input name="total_reservation" id="input_2" type="number" class="form-control" placeholder="Total à payer" readonly>
							</div>
							<div class="form-group">
								<input name="circuit_reservation" type="hidden" value="<?php echo $row['ID_CIRCUIT']; ?>">
							</div>

			            	<div class="form-group">
			            		<button type="submit" name="ajouter_reservation" class="btn btn-outline-info">Valider</button>
			            	</div>
						</form>

			            <!-- <div class="form-group">
							<div class="w-100">
								<p class="mb-0">By creating an account, your agree to our terms.</p>
							</div>
			            </div> -->
			          </form>
				      </div>
				    </div>
				  </div>
		    </div>
		  </div>
		</div>

