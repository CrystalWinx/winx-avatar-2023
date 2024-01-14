<?php
session_start();

if($_SESSION['token'] == $_POST['token'] && $_FILES['blob']['size'] <= 1000000 && $_SESSION['uploads'] <=50) {
    $target_file = "../userImages/". $_POST['uuid'] .".jpg";
    $_SESSION['uploads'] = $_SESSION['uploads'] + 1;
    $_SESSION['token'] = "";
    saveImage();
}
else{
    echo "Error: File size too big or you reached the daily quota.";
}

function saveImage(){
    global $_FILES, $target_file;
    
    if (move_uploaded_file($_FILES["blob"]["tmp_name"], $target_file)) {
        echo "True";
    } else {
        echo "Error";
    }
}
?>