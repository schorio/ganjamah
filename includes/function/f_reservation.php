<?php 

    if(isset($_POST['ajouter_reservation'])){    
        
        try {
        $sql = "INSERT INTO reservation (\"ID_RES\", \"NOM_RES\", \"CONTACT_RES\", \"ADRESSE_RES\", \"CIN_RES\", \"CIRCUIT_RES\", \"PLACE_RES\", \"STATUT_RES\", \"DATE_RES\") 
                        VALUES  (RESERVATION_SEQUENCE.nextval, :nom_reservation,  :contact_reservation, :adresse_reservation, :cin_reservation,  :circuit_reservation,  :place_reservation, :statut_reservation, TO_DATE(:date_reservation, 'YYYY-MM-DD'))";
            $query = $dbh->prepare($sql);

            $aujourdhui = date("Y-m-d");

            $nom_reservation = htmlspecialchars($_POST['nom_reservation']);
            $contact_reservation = htmlspecialchars($_POST['contact_reservation']);
            $adresse_reservation = htmlspecialchars($_POST['adresse_reservation']);
            $cin_reservation = htmlspecialchars($_POST['cin_reservation']);
            $circuit_reservation = htmlspecialchars($_POST['circuit_reservation']);
            $place_reservation = htmlspecialchars($_POST['place_reservation']);
            $statut_reservation = "false";
            $date_reservation = htmlspecialchars($aujourdhui);

            $query->bindParam(':nom_reservation',$nom_reservation);
            $query->bindParam(':contact_reservation',$contact_reservation);
            $query->bindParam(':adresse_reservation',$adresse_reservation);
            $query->bindParam(':cin_reservation',$cin_reservation);
            $query->bindParam(':circuit_reservation',$circuit_reservation);
            $query->bindParam(':place_reservation',$place_reservation);
            $query->bindParam(':statut_reservation',$statut_reservation);
            $query->bindParam(':date_reservation',$date_reservation);

            if ($query->execute()) {
                $sql_1 = "UPDATE CIRCUIT SET \"PLACE_CIRCUIT\"=\"PLACE_CIRCUIT\"-'$place_reservation' WHERE \"ID_CIRCUIT\" = '$circuit_reservation' ";
                $query_1 = $dbh->prepare($sql_1);
                if ($query_1->execute()) {
                    echo "<script>window.location.href='/ganjamah/index.php';</script>";
                } else {
                    echo "Error";
                }
            } else {
                echo "Error";
            }
                    
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }


        
    }
    

    if(isset($_POST['annuler_reservation'])){
        // sql to delete a record
        $annuler_res_id = $_POST['annuler_res_id'];
        $circuit_reservation = $_POST['circuit_reservation'];
        $place_reservation = $_POST['place_reservation'];
        $sql = "DELETE FROM RESERVATION WHERE \"ID_RES\"='$annuler_res_id' ";
        $query = $dbh->prepare($sql);
        if ($query->execute()) {
            $sql_1 = "UPDATE CIRCUIT SET \"PLACE_CIRCUIT\"=\"PLACE_CIRCUIT\"+'$place_reservation' WHERE \"ID_CIRCUIT\" = '$circuit_reservation' ";
            $query_1 = $dbh->prepare($sql_1);
            if ($query_1->execute()) {
                echo '<script>window.location.href="/ganjamah/liste/reservation.php"</script>';
            } else {
                echo "Error";
            }
        } else {
            echo "Error";
        }
    }


?>