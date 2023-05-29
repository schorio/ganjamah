<?php

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