<?php 

if(isset($_POST['ajouter_resto'])){

    $nom_resto = htmlspecialchars($_POST['nom_resto']);
    $note_resto = htmlspecialchars($_POST['note_resto']);
    $adresse_resto = htmlspecialchars($_POST['adresse_resto']);
    $contact_resto = htmlspecialchars($_POST['contact_resto']);
    $description_resto = htmlspecialchars($_POST['description_resto']);
    $image = htmlspecialchars($_POST['image']);
    //grabbing the picture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="../assets/img/restaurant/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)){
			$image=$final_file;
		 }

    $sql = "INSERT INTO `restaurant` (`nom_resto`, `note_resto`, `adresse_resto`, `contact_resto`, `description_resto`, `image_resto`) 
                        VALUES  (:nom_resto,  :note_resto,  :adresse_resto,  :contact_resto,  :description_resto,  :image)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':nom_resto',$nom_resto,PDO::PARAM_STR);
    $query->bindParam(':note_resto',$note_resto,PDO::PARAM_STR);
    $query->bindParam(':adresse_resto',$adresse_resto,PDO::PARAM_STR);
    $query->bindParam(':contact_resto',$contact_resto,PDO::PARAM_STR);
    $query->bindParam(':description_resto',$description_resto,PDO::PARAM_STR);
    $query->bindParam(':image',$image,PDO::PARAM_STR);
    $query->execute();
    $lastInsert = $dbh->lastInsertId();
    if($lastInsert>0){
        echo "<script>window.location.href='/ganjamah/liste/restaurant.php';</script>";
        echo "<script>alert('Le restaurant est ajouter avec succes.');</script>";
    }else{
        echo "<script>alert('Une s'est produite');</script>";
    }	
}


// ==============================================


if(isset($_POST['supprimer_resto'])){
    // sql to delete a record
    $supprimer_resto_id = $_POST['supprimer_resto_id'];
    $sql = "DELETE FROM restaurant WHERE id_resto='$supprimer_resto_id' ";
    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href="/ganjamah/liste/restaurant.php"</script>';
    } else {
        echo "Error";
    }
}



// ===================================================


if(isset($_POST['modifier_resto'])){

    $id_resto = htmlspecialchars($_POST['id_resto']);
    $n_nom_resto = htmlspecialchars($_POST['n_nom_resto']);
    $n_note_resto = htmlspecialchars($_POST['n_note_resto']);
    $n_adresse_resto = htmlspecialchars($_POST['n_adresse_resto']);
    $n_contact_resto = htmlspecialchars($_POST['n_contact_resto']);
    $n_description_resto = htmlspecialchars($_POST['n_description_resto']);
    $image = htmlspecialchars($_POST['n_image']);
    $old_image = htmlspecialchars($_POST['old_image']);
    //grabbing the picture
    $file = $_FILES['n_image']['name'];
    $file_loc = $_FILES['n_image']['tmp_name'];
    $folder="../assets/img/restaurant/";
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

    $sql = "UPDATE restaurant SET 
        nom_resto = '$n_nom_resto',
        note_resto = '$n_note_resto',
        adresse_resto = '$n_adresse_resto',
        contact_resto = '$n_contact_resto',
        description_resto = '$n_description_resto'
        -- image = '$pic'
        WHERE id_resto = '$id_resto' ";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href="/ganjamah/liste/restaurant.php"</script>';
    } else {
        echo "Error";
    }
}

?>