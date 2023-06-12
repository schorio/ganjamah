<?php 

if(isset($_POST['ajouter_circuit'])){    
    
    try {
    $sql = "INSERT INTO circuit (\"ID_CIRCUIT\", \"LOCALISATION_CIRCUIT\", \"DUREE_CIRCUIT\", \"PRIX_CIRCUIT\", \"PLACE_CIRCUIT\", \"DESCRIPTION_CIRCUIT\", \"IMAGE_CIRCUIT\") 
                    VALUES  (CIRCUIT_SEQUENCE.nextval, :localisation_circuit,  :duree_circuit,  :prix_circuit,  :place_circuit, :description_circuit, :image)";
        $query = $dbh->prepare($sql);

        $localisation_circuit = htmlspecialchars($_POST['localisation_circuit']);
        $duree_circuit = htmlspecialchars($_POST['duree_circuit']);
        $prix_circuit = htmlspecialchars($_POST['prix_circuit']);
        $place_circuit = htmlspecialchars($_POST['place_circuit']);
        $description_circuit = htmlspecialchars($_POST['description_circuit']);
        $image = htmlspecialchars($_POST['image']);
        //grabbing the picture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="../assets/img/circuit/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)) {
			$image=$final_file;
		}

        $query->bindParam(':localisation_circuit',$localisation_circuit);
        $query->bindParam(':duree_circuit',$duree_circuit);
        $query->bindParam(':prix_circuit',$prix_circuit);
        $query->bindParam(':place_circuit',$place_circuit);
        $query->bindParam(':description_circuit',$description_circuit);
        $query->bindParam(':image',$image);
        $query->execute();
        
        echo "<script>window.location.href='/ganjamah/liste/circuit.php';</script>";
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

}


// ==============================================


if(isset($_POST['supprimer_circuit'])){
    // sql to delete a record
    $supprimer_circuit_id = $_POST['supprimer_circuit_id'];
    $sql = "DELETE FROM circuit WHERE \"ID_CIRCUIT\"='$supprimer_circuit_id' ";
    $query = $dbh->prepare($sql);
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/circuit.php"</script>';
    } else {
        echo "Error";
    }
}



// ===================================================


if(isset($_POST['modifier_circuit'])){

    $id_circuit = htmlspecialchars($_POST['id_circuit']);
    $n_localisation_circuit = htmlspecialchars($_POST['n_localisation_circuit']);
    $n_duree_circuit = htmlspecialchars($_POST['n_duree_circuit']);
    $n_prix_circuit = htmlspecialchars($_POST['n_prix_circuit']);
    $n_place_circuit = htmlspecialchars($_POST['n_place_circuit']);
    $n_description_circuit = htmlspecialchars($_POST['n_description_circuit']);
    $n_image = htmlspecialchars($_POST['n_image']);
    $old_image = htmlspecialchars($_POST['old_image']);
    //grabbing the picture
    $file = $_FILES['n_image']['name'];
    $file_loc = $_FILES['n_image']['tmp_name'];
    $folder="../assets/img/circuit/";
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

    $sql = "UPDATE CIRCUIT SET 
            \"LOCALISATION_CIRCUIT\" = '$n_localisation_circuit',
            \"DUREE_CIRCUIT\" = '$n_duree_circuit',
            \"PRIX_CIRCUIT\" = '$n_prix_circuit',
            \"PLACE_CIRCUIT\" = '$n_place_circuit',
            \"DESCRIPTION_CIRCUIT\" = '$n_description_circuit',
            \"IMAGE_CIRCUIT\" = '$pic'
        WHERE \"ID_CIRCUIT\" = '$id_circuit' ";

    $query = $dbh->prepare($sql);
    
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/circuit.php"</script>';
    } else {
        echo "Error";
    }
}

?>