<?php 

if(isset($_POST['ajouter_hotel'])){

    $nom_hotel = htmlspecialchars($_POST['nom_hotel']);
    $note_hotel = htmlspecialchars($_POST['note_hotel']);
    $adresse_hotel = htmlspecialchars($_POST['adresse_hotel']);
    $contact_hotel = htmlspecialchars($_POST['contact_hotel']);
    $description_hotel = htmlspecialchars($_POST['description_hotel']);
    $image = htmlspecialchars($_POST['image']);
    //grabbing the picture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="../assets/img/hotel/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)){
			$image=$final_file;
		 }

    $sql = "INSERT INTO `hotel` (`nom_hotel`, `note_hotel`, `adresse_hotel`, `contact_hotel`, `description_hotel`, `image_hotel`) 
                        VALUES  (:nom_hotel,  :note_hotel,  :adresse_hotel,  :contact_hotel,  :description_hotel,  :image)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':nom_hotel',$nom_hotel,PDO::PARAM_STR);
    $query->bindParam(':note_hotel',$note_hotel,PDO::PARAM_STR);
    $query->bindParam(':adresse_hotel',$adresse_hotel,PDO::PARAM_STR);
    $query->bindParam(':contact_hotel',$contact_hotel,PDO::PARAM_STR);
    $query->bindParam(':description_hotel',$description_hotel,PDO::PARAM_STR);
    $query->bindParam(':image',$image,PDO::PARAM_STR);
    $query->execute();
    $lastInsert = $dbh->lastInsertId();
    if($lastInsert>0){
        echo "<script>window.location.href='/ganjamah/liste/hotel.php';</script>";
        echo "<script>alert('L'hotel est ajouter avec succes.');</script>";
    }else{
        echo "<script>alert('Une s'est produite');</script>";
    }	
}


// ==============================================


if(isset($_POST['supprimer_hotel'])){
    // sql to delete a record
    $supprimer_hotel_id = $_POST['supprimer_hotel_id'];
    $sql = "DELETE FROM hotel WHERE id_hotel='$supprimer_hotel_id' ";
    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href="/ganjamah/liste/hotel.php"</script>';
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

    if ($image = ""){
        $pic = $old_image;
    }
    else{
        $pic = $image;
    }

    $sql = "UPDATE hotel SET 
        nom_hotel = '$n_nom_hotel',
        note_hotel = '$n_note_hotel',
        adresse_hotel = '$n_adresse_hotel',
        contact_hotel = '$n_contact_hotel',
        description_hotel = '$n_description_hotel'
        -- image = '$pic'
        WHERE id_hotel = '$id_hotel' ";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href="/ganjamah/liste/hotel.php"</script>';
    } else {
        echo "Error";
    }
}

?>