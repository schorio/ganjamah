<?php 

if(isset($_POST['ajouter_zone'])){    
    
    try {
    $sql = "INSERT INTO ZONE_VISITEUR (\"ID_ZONE\", \"NOM_ZONE\", \"NOTE_ZONE\", \"LOCALISATION_ZONE\",  \"DESCRIPTION_ZONE\", \"IMAGE_ZONE\") 
                    VALUES  (ZONE_VISITEUR_SEQUENCE.nextval, :nom_zone,  :note_zone,  :localisation_zone,  :description_zone, :image_zone)";
        $query = $dbh->prepare($sql);

        //grabbing the picture
		$file = $_FILES['image_zone']['name'];
		$file_loc = $_FILES['image_zone']['tmp_name'];
		$folder="../assets/img/zone visiteur/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)) {
			$image_zone=$final_file;
		}

        // $query->bindParam(':id_zone',$id_zone);
        $query->bindParam(':nom_zone',$_POST['nom_zone']);
        $query->bindParam(':note_zone',$_POST['note_zone']);
        $query->bindParam(':localisation_zone',$_POST['localisation_zone']);
        $query->bindParam(':description_zone',$_POST['description_zone']);
        $query->bindParam(':image_zone',$image_zone);
        $query->execute();
        
        echo "<script>window.location.href='/ganjamah/liste/zone_visiteur.php';</script>";
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

}


// ==============================================


if(isset($_POST['supprimer_zone'])){
    // sql to delete a record
    $supprimer_zone_id = $_POST['supprimer_zone_id'];
    $sql = "DELETE FROM ZONE_VISITEUR WHERE \"ID_ZONE\"='$supprimer_zone_id' ";
    $query = $dbh->prepare($sql);
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/zone_visiteur.php"</script>';
    } else {
        echo "Error";
    }
}



// ===================================================


if(isset($_POST['modifier_zone'])){

    try {

        $sql = "UPDATE ZONE_VISITEUR SET 
                    \"NOM_ZONE\" = :n_nom_zone,
                    \"NOTE_ZONE\" = :n_note_zone,
                    \"LOCALISATION_ZONE\" = :n_localisation_zone,
                    \"DESCRIPTION_ZONE\" = :n_description_zone,
                    \"IMAGE_ZONE\" = :n_image_zone
                WHERE \"ID_ZONE\" = :id_zone ";

        $query = $dbh->prepare($sql);

        //grabbing the picture
        $file = $_FILES['n_image_zone']['name'];
        $file_loc = $_FILES['n_image_zone']['tmp_name'];
        $folder = "../assets/img/zone visiteur/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ','-',$new_file_name);

        if(move_uploaded_file($file_loc, $folder.$final_file)){
            $image = $final_file;
        }


        if (empty($image)){
            $n_image_zone = $_POST['old_image_zone'];
        
        }else{
            $n_image_zone = $image;

        }

        $query->bindParam(':id_zone',$_POST['id_zone']);
        $query->bindParam(':n_nom_zone',$_POST['n_nom_zone']);
        $query->bindParam(':n_note_zone',$_POST['n_note_zone']);
        $query->bindParam(':n_localisation_zone',$_POST['n_localisation_zone']);
        $query->bindParam(':n_description_zone',$_POST['n_description_zone']);
        $query->bindParam(':n_image_zone',$n_image_zone);
        $query->execute();
        
        echo "<script>window.location.href='/ganjamah/liste/zone_visiteur.php';</script>";
    

    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();

    }

}

?>