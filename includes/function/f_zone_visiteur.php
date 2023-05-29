<?php 

if(isset($_POST['ajouter_zone'])){

    $nom_zone = htmlspecialchars($_POST['nom_zone']);
    $note_zone = htmlspecialchars($_POST['note_zone']);
    $localisation_zone = htmlspecialchars($_POST['localisation_zone']);
    $description_zone = htmlspecialchars($_POST['description_zone']);
    $image = htmlspecialchars($_POST['image']);
    //grabbing the picture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="../assets/img/zone visiteur/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)){
			$image=$final_file;
		 }

    $sql = "INSERT INTO `zone_visiteur` (`nom_zone`, `note_zone`, `localisation_zone`,  `description_zone`, `image_zone`) 
                        VALUES  (:nom_zone,  :note_zone,  :localisation_zone,   :description_zone,  :image)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':nom_zone',$nom_zone,PDO::PARAM_STR);
    $query->bindParam(':note_zone',$note_zone,PDO::PARAM_STR);
    $query->bindParam(':localisation_zone',$localisation_zone,PDO::PARAM_STR);
    $query->bindParam(':description_zone',$description_zone,PDO::PARAM_STR);
    $query->bindParam(':image',$image,PDO::PARAM_STR);
    $query->execute();
    $lastInsert = $dbh->lastInsertId();
    if($lastInsert>0){
        echo "<script>window.location.href='/ganjamah/liste/zone_visiteur.php';</script>";
        echo "<script>alert('L'zone est ajouter avec succes.');</script>";
    }else{
        echo "<script>alert('Une s'est produite');</script>";
    }	
}


// ==============================================


if(isset($_POST['supprimer_zone'])){
    // sql to delete a record
    $supprimer_zone_id = $_POST['supprimer_zone_id'];
    $sql = "DELETE FROM zone_visiteur WHERE id_zone='$supprimer_zone_id' ";
    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href="/ganjamah/liste/zone_visiteur.php"</script>';
    } else {
        echo "Error";
    }
}



// ===================================================


if(isset($_POST['modifier_zone'])){

    $id_zone = htmlspecialchars($_POST['id_zone']);
    $n_nom_zone = htmlspecialchars($_POST['n_nom_zone']);
    $n_note_zone = htmlspecialchars($_POST['n_note_zone']);
    $n_localisation_zone = htmlspecialchars($_POST['n_localisation_zone']);
    $n_description_zone = htmlspecialchars($_POST['n_description_zone']);
    $image = htmlspecialchars($_POST['n_image']);
    $old_image = htmlspecialchars($_POST['old_image']);
    //grabbing the picture
    $file = $_FILES['n_image']['name'];
    $file_loc = $_FILES['n_image']['tmp_name'];
    $folder="../assets/img/zone visiteur/";
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

    $sql = "UPDATE zone_visiteur SET 
        nom_zone = '$n_nom_zone',
        note_zone = '$n_note_zone',
        localisation_zone = '$n_localisation_zone',
        description_zone = '$n_description_zone'
        -- image = '$pic'
        WHERE id_zone = '$id_zone' ";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href="/ganjamah/liste/zone_viisiteur.php"</script>';
    } else {
        echo "Error";
    }
}

?>