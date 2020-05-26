<?php
    require('connect.php');

    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $id = $_REQUEST['id'];
    $img = $_REQUEST['img'];
    $state = $_REQUEST['state'];
    $send = $_REQUEST['send'];
    
    if($send == 'edit'){
        $sql = 'UPDATE url SET name = "'.$name.'" ,number = "'.$number.'" ,state = "'.$state.'" ,location = "'.$img.'"' ;
        $sql .= 'WHERE id_name = "'.$id.'";';
    }
    else if($send == 'delete'){
        $sql = "DELETE FROM url WHERE id_name = $id;";
    }
    echo $sql ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:update_stadium.php");
?>