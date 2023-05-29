<?php 

if(isset($_POST['ajouter_blog'])){

    try {
        $sql = "INSERT INTO BLOG (\"ID_BLOG\", \"AUTEUR_BLOG\", \"DOMAINE_BLOG\", \"TITRE_BLOG\", \"CONTENUE_BLOG\", \"DATE_BLOG\", \"IMAGE_BLOG\") 
                            VALUES  (BLOG_SEQUENCE.nextval, :auteur_blog,  :domaine_blog,  :titre_blog,  :contenue_blog, TO_DATE(:date_blog, 'YYYY-MM-DD'), :image)";
        $query = $dbh->prepare($sql);

        $auteur_blog = htmlspecialchars($_POST['auteur_blog']);
        $domaine_blog = htmlspecialchars($_POST['domaine_blog']);
        $titre_blog = htmlspecialchars($_POST['titre_blog']);
        $contenue_blog = htmlspecialchars($_POST['contenue_blog']);
        $date_blog = htmlspecialchars($_POST['date_blog']);
        $image = htmlspecialchars($_POST['image']);


        //grabbing the picture
        $file = $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $folder="../assets/img/blog/"; 
        $new_file_name = strtolower($file);
        $final_file=str_replace(' ','-',$new_file_name);

        if(move_uploaded_file($file_loc,$folder.$final_file)){
            $image=$final_file;
        }

        $query->bindParam(':auteur_blog',$auteur_blog);
        $query->bindParam(':domaine_blog',$domaine_blog);
        $query->bindParam(':titre_blog',$titre_blog);
        $query->bindParam(':contenue_blog',$contenue_blog);
        $query->bindParam(':date_blog',$date_blog);
        $query->bindParam(':image',$image);

        $query->execute();

        echo "<script>window.location.href='/ganjamah/liste/blog.php';</script>";
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }	
}


// ==============================================


if(isset($_POST['supprimer_blog'])){
    // sql to delete a record
    $supprimer_blog_id = $_POST['supprimer_blog_id'];
    $sql = "DELETE FROM BLOG WHERE \"ID_BLOG\"='$supprimer_blog_id' ";
    $query = $dbh->prepare($sql);
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/blog.php"</script>';
    } else {
        echo "Error";
    }
}



// ===================================================


if(isset($_POST['modifier_blog'])){

    $id_blog = htmlspecialchars($_POST['id_blog']);
    $n_auteur_blog = htmlspecialchars($_POST['n_auteur_blog']);
    $n_domaine_blog = htmlspecialchars($_POST['n_domaine_blog']);
    $n_titre_blog = htmlspecialchars($_POST['n_titre_blog']);
    $n_contenue_blog = htmlspecialchars($_POST['n_contenue_blog']);
    $n_date_blog = htmlspecialchars($_POST['n_date_blog']);
    $old_image_blog = htmlspecialchars($_POST['old_image_blog']);
    //grabbing the picture
    $file = $_FILES['n_image_blog']['name'];
    $file_loc = $_FILES['n_image_blog']['tmp_name'];
    $folder="../assets/img/blog/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file)){
        $image=$final_file;
    }

    if (empty($image)){
        $pic = $old_image_blog;
    }
    else{
        $pic = $image;
    }

    $sql = "UPDATE BLOG SET 
                \"AUTEUR_BLOG\" = :n_auteur_blog,
                \"DOMAINE_BLOG\" = :n_domaine_blog,
                \"TITRE_BLOG\" = :n_titre_blog,
                \"CONTENUE_BLOG\" = :n_contenue_blog,
                \"DATE_BLOG\" = TO_DATE(:n_date_blog, 'YYYY-MM-DD'),
                \"IMAGE_BLOG\" = :n_image_blog
             WHERE \"ID_BLOG\" = :id_blog ";

    $query = $dbh->prepare($sql);

    $query->bindParam(':id_blog',$id_blog);
    $query->bindParam(':n_auteur_blog',$n_auteur_blog);
    $query->bindParam(':n_domaine_blog',$n_domaine_blog);
    $query->bindParam(':n_titre_blog',$n_titre_blog);
    $query->bindParam(':n_contenue_blog',$n_contenue_blog);
    $query->bindParam(':n_date_blog',$n_date_blog);
    $query->bindParam(':n_image_blog',$pic);

        
    if ($query->execute()) {
        echo '<script>window.location.href="/ganjamah/liste/blog.php"</script>';
    } else {
        echo "Error";
    }
}

?>