<?php 

if(isset($_POST['ajouter_reservation'])){    
    
    try {
    $sql = "INSERT INTO reservation (\"ID_RES\", \"NOM_RES\", \"CONTACT_RES\", \"CIRCUIT_RES\", \"PLACE_RES\", \"DATE_RES\") 
                    VALUES  (RESERVATION_SEQUENCE.nextval, :nom_reservation,  :contact_reservation,  :circuit_reservation,  :place_reservation, TO_DATE(:date_reservation, 'YYYY-MM-DD'))";
        $query = $dbh->prepare($sql);

        $aujourdhui = date("Y-m-d");

        $nom_reservation = htmlspecialchars($_POST['nom_reservation']);
        $contact_reservation = htmlspecialchars($_POST['contact_reservation']);
        $circuit_reservation = htmlspecialchars($_POST['circuit_reservation']);
        $place_reservation = htmlspecialchars($_POST['place_reservation']);
        $date_reservation = htmlspecialchars($aujourdhui);

        $query->bindParam(':nom_reservation',$nom_reservation);
        $query->bindParam(':contact_reservation',$contact_reservation);
        $query->bindParam(':circuit_reservation',$circuit_reservation);
        $query->bindParam(':place_reservation',$place_reservation);
        $query->bindParam(':date_reservation',$date_reservation);
        $query->execute();
        
        echo "<script>window.location.href='/ganjamah/index.php';</script>";
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

}

?>