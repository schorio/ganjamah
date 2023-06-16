<?php 

    if(isset($_POST['ajouter_reservation'])){    
        
        try {
        $sql = "INSERT INTO reservation (\"ID_RES\", \"NOM_RES\", \"CONTACT_RES\", \"ADRESSE_RES\", \"CIN_RES\", \"CIRCUIT_RES\", \"PLACE_RES\", \"DATE_RES\") 
                        VALUES  (RESERVATION_SEQUENCE.nextval, :nom_reservation,  :contact_reservation, :adresse_reservation, :cin_reservation,  :circuit_reservation,  :place_reservation, TO_DATE(:date_reservation, 'YYYY-MM-DD'))";
            $query = $dbh->prepare($sql);

            $aujourdhui = date("Y-m-d");

            $nom_reservation = htmlspecialchars($_POST['nom_reservation']);
            $contact_reservation = htmlspecialchars($_POST['contact_reservation']);
            $adresse_reservation = htmlspecialchars($_POST['adresse_reservation']);
            $cin_reservation = htmlspecialchars($_POST['cin_reservation']);
            $circuit_reservation = htmlspecialchars($_POST['circuit_reservation']);
            $place_reservation = htmlspecialchars($_POST['place_reservation']);
            $date_reservation = htmlspecialchars($aujourdhui);

            $query->bindParam(':nom_reservation',$nom_reservation);
            $query->bindParam(':contact_reservation',$contact_reservation);
            $query->bindParam(':adresse_reservation',$adresse_reservation);
            $query->bindParam(':cin_reservation',$cin_reservation);
            $query->bindParam(':circuit_reservation',$circuit_reservation);
            $query->bindParam(':place_reservation',$place_reservation);
            $query->bindParam(':date_reservation',$date_reservation);
            $query->execute();
            
            echo "<script>window.location.href='/ganjamah/index.php';</script>";
        
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }


        
    }
    

    if(isset($_POST['annuler_reservation'])){
        // sql to delete a record
        $annuler_res_id = $_POST['annuler_res_id'];
        $sql = "DELETE FROM RESERVATION WHERE \"ID_RES\"='$annuler_res_id' ";
        $query = $dbh->prepare($sql);
        if ($query->execute()) {
            echo '<script>window.location.href="/ganjamah/liste/reservation.php"</script>';
        } else {
            echo "Error";
        }
    }


?>