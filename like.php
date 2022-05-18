<?php

include 'veritaban_conn.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sorgu = $conn->prepare("select ulike from users.urunler where id = $id ");
    $sorgu->execute();
    $like = $sorgu->fetch();
    $like = $like['ulike'];

    if($like == 1){
         $like = 0;
    }
    else{
        $like=1;
    }

    $query = "update users.urunler set ulike = $like  where id = ?";
    $stmt = $conn->prepare($query);
     $stmt->execute([$id]);

   if( $stmt->rowCount() == 1 ) {
        if($like == 1){
            echo 1;
        }
        else{
           echo 0;
        }
       

   }else{
       echo 2;
   }
    
}
?>
