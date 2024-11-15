<?php
if (!empty($_FILES['editprofile'])) {

    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    $image_name = $_FILES['editprofile']['name'];
    $image_temp = $_FILES['editprofile']['tmp_name'];

    move_uploaded_file($image_temp, "uploads/" . $image_name);

    $select_query = "SELECT `profileimage` FROM `login` WHERE `email` = '$session_id'";
    $result = mysqli_query($conn, $select_query);
    $old_image = mysqli_fetch_assoc($result);

    if ($old_image && file_exists("uploads/" . $old_image['profileimage'])) {
        unlink("uploads/" . $old_image['profileimage']);
    }

    $insert_img = "UPDATE `login` SET `profileimage`='$image_name' WHERE `email` = '$session_id'";
    $resultData = mysqli_query($conn, $insert_img);
}

?>