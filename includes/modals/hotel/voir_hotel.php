<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); 
?>

<div id="voir_hotel_<?php echo htmlentities($row->id_hotel); ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Voir l'hotel</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
                <!-- <div class="row">
                    <div class="col-md-12"> -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img alt="" src="/ganjamah/assets/img/hotel/<?php echo htmlentities($row->image_hotel); ?>"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="profile-basic">
                                    <div class="row">
                                        
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Nom :</div>
                                                    <div class="text"><?php echo htmlentities($row->nom_hotel); ?><a href=""></a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Note :</div>
                                                    <div class="number"><?php echo htmlentities($row->note_hotel); ?><a href=""></a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Adresse :</div>
                                                    <div class="text"><?php echo htmlentities($row->adresse_hotel); ?></div>
                                                </li>
                                                <li>
                                                    <div class="title">Contact :</div>
                                                    <div class="number"><?php echo htmlentities($row->contact_hotel); ?></div>
                                                </li>
                                                <li>
                                                    <div class="title">Description :</div>
                                                    <div class="text"><?php echo htmlentities($row->description_hotel); ?></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit"><a class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                            </div>
                            
                        </div>
                    <!-- </div>
                </div> -->
			</div>
		</div>
	</div>
</div>

