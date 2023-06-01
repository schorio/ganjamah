<div id="voir_blog_<?php echo $row['ID_BLOG']; ?>" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body row">
                <div class="image-container"> <img src="/ganjamah/assets/img/blog/<?php echo $row['IMAGE_BLOG']; ?>"> </div>
                <div class="col-12 col-lg-6">
                    <h2><?php echo $row['TITRE_BLOG']; ?></h2>

                    <h4 class="text-muted"><?php echo $row['DOMAINE_BLOG']; ?></h4><br>

                    <p class="form-group mt-3 pt-3 mb-5">
                        <?php echo $row['CONTENUE_BLOG']; ?>
                    </p>

                    <span class="text-xs">par </span><span class="text-muted"><?php echo $row['AUTEUR_BLOG']; ?></span>
                </div>
            </div>

		</div>
	</div>
</div>