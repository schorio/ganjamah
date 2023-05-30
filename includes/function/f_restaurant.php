<?php 

if(isset($_POST['ajouter_resto'])){    
    
    try {
    $sql = "INSERT INTO RESTAURANT (\"ID_RESTO\", \"NOM_RESTO\", \"NOTE_RESTO\", \"ADRESSE_RESTO\", \"CONTACT_RESTO\", \"DESCRIPTION_RESTO\", \"IMAGE_RESTO\") 
                    VALUES  (RESTAURANT_SEQUENCE.nextval, :nom_resto,  :note_resto,  :adresse_resto,  :contact_resto,  :description_resto, :image_resto)";
        $query = $dbh->prepare($sql);

        //grabbing the picture
		$file = $_FILES['image_resto']['name'];
		$file_loc = $_FILES['image_resto']['tmp_name'];
		$folder="../assets/img/restaurant/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)) {
			$image_resto=$final_file;
		}

        // $query->bindParam(':id_resto',$id_resto);
        $query->bindParam(':nom_resto',$_POST['nom_resto']);
        $query->bindParam(':note_resto',$_POST['note_resto']);
        $query->bindParam(':adresse_resto',$_POST['adresse_resto']);
        $query->bindParam(':contact_resto',$_POST['contact_resto']);
        $query->bindParam(':description_resto',$_POST['description_resto']);
        $query->bindParam(':image_resto',$image_resto);
        $query->execute();
        
        echo "<script>window.location.href='/ganjamah/liste/restaurant.php';</script>";
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

}


// ==============================================


if(isset($_POST['supprimer_resto'])){
    // sql to delete a record
    $supprimer_resto_id = $_POST['supprimer_resto_id'];
    $sql = "DELETE FROM RESTAURANT WHERE \"ID_RESTO\"='$supprimer_resto_id' ";
    $query = $dbh->prepare($sql);
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/restarant.php"</script>';
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

    if (empty($image)){
        $pic = $old_image;
    }
    else{
        $pic = $image;
    }

    $sql = "UPDATE RESTAURANT SET 
        \"NOM_RESTO\" = '$n_nom_resto',
        \"NOTE_RESTO\" = '$n_note_resto',
        \"ADRESSE_RESTO\" = '$n_adresse_resto',
        \"CONTACT_RESTO\" = '$n_contact_resto',
        \"DESCRIPTION_RESTO\" = '$n_description_resto',
        \"IMAGE_RESTO\" = '$pic'
        WHERE \"ID_RESTO\" = '$id_resto' ";

    $query = $dbh->prepare($sql);
    
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/restaurant.php"</script>';
    } else {
        echo "Error";
    }
}

?>