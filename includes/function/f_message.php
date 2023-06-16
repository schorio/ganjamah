<?php


    if(isset($_POST['envoyer_message'])){    
        
        try {
        $sql = "INSERT INTO MESSAGE (\"ID_MESS\", \"DESTINATEUR_MESS\", \"EMAIL_MESS\", \"CONTENUE_MESS\", \"DATE_MESS\") 
                        VALUES  (MESSAGE_SEQUENCE.nextval, :destinateur_message,  :email_message,  :contenue_message, TO_DATE(:date_message, 'YYYY-MM-DD'))";
            $query = $dbh->prepare($sql);

            $aujourdhui = date("Y-m-d");

            $destinateur_message = htmlspecialchars($_POST['destinateur_message']);
            $email_message = htmlspecialchars($_POST['email_message']);
            $contenue_message = htmlspecialchars($_POST['contenue_message']);
            $date_message = htmlspecialchars($aujourdhui);

            $query->bindParam(':destinateur_message',$destinateur_message);
            $query->bindParam(':email_message',$email_message);
            $query->bindParam(':contenue_message',$contenue_message);
            $query->bindParam(':date_message',$date_message);
            $query->execute();
            
            echo "<script>window.location.href='/ganjamah/visiteur/contact.php';</script>";
        
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }

    }

    if(isset($_POST['supprimer_mess'])){
        // sql to delete a record
        $supprimer_mess_id = $_POST['supprimer_mess_id'];
        $sql = "DELETE FROM message WHERE id_mess='$supprimer_mess_id' ";
        if ($conn->query($sql) === TRUE) {
            echo '<script>window.location.href="/ganjamah/liste/message.php"</script>';
        } else {
            echo "Error";
        }
    }

?>