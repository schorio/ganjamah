<?php 

if(isset($_POST['ajouter_galerie'])){    
    
    try {
    $sql = "INSERT INTO GALERIE (\"ID_GALERIE\", \"TITRE_GALERIE\", \"IMAGE_GALERIE\") 
                    VALUES  (GALERIE_SEQUENCE.nextval, :titre_galerie, :image)";
        $query = $dbh->prepare($sql);

        // $id_galerie = '8';
        $titre_galerie = htmlspecialchars($_POST['titre_galerie']);
        $image = htmlspecialchars($_POST['image']);
        //grabbing the picture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="../assets/img/galerie/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)) {
			$image=$final_file;
		}

        // $query->bindParam(':id_galerie',$id_galerie);
        $query->bindParam(':titre_galerie',$titre_galerie);
        $query->bindParam(':image',$image);
        $query->execute();
        
        echo "<script>window.location.href='/ganjamah/liste/galerie.php';</script>";
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

}


// ==============================================


if(isset($_POST['supprimer_galerie'])){
    // sql to delete a record
    $supprimer_galerie_id = $_POST['supprimer_galerie_id'];
    $sql = "DELETE FROM GALERIE WHERE \"ID_GALERIE\"='$supprimer_galerie_id' ";
    $query = $dbh->prepare($sql);
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/galerie.php"</script>';
    } else {
        echo "Error";
    }
}



// ===================================================


if(isset($_POST['modifier_hotel'])){

    $id_hotel = htmlspecialchars($_POST['id_hotel']);
    $n_nom_hotel = htmlspecialchars($_POST['n_nom_hotel']);
    $n_note_hotel = htmlspecialchars($_POST['n_note_hotel']);
    $n_adresse_hotel = htmlspecialchars($_POST['n_adresse_hotel']);
    $n_contact_hotel = htmlspecialchars($_POST['n_contact_hotel']);
    $n_description_hotel = htmlspecialchars($_POST['n_description_hotel']);
    $image = htmlspecialchars($_POST['n_image']);
    $old_image = htmlspecialchars($_POST['old_image']);
    //grabbing the picture
    $file = $_FILES['n_image']['name'];
    $file_loc = $_FILES['n_image']['tmp_name'];
    $folder="../assets/img/hotel/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file)){
        $image=$final_file;
    }

    if (empty($image)){
        $pic = $old_image;
    }
    else{
        $pic = $image;
    }

    $sql = "UPDATE HOTEL SET 
        \"NOM_HOTEL\" = '$n_nom_hotel',
        \"NOTE_HOTEL\" = '$n_note_hotel',
        \"ADRESSE_HOTEL\" = '$n_adresse_hotel',
        \"CONTACT_HOTEL\" = '$n_contact_hotel',
        \"DESCRIPTION_HOTEL\" = '$n_description_hotel',
        \"IMAGE_HOTEL\" = '$pic'
        WHERE \"ID_HOTEL\" = '$id_hotel' ";

    $query = $dbh->prepare($sql);
    
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/hotel.php"</script>';
    } else {
        echo "Error";
    }
}

?>