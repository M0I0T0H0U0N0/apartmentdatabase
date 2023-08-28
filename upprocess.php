<?php
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include "connection.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";
    $naame = $_POST['name'];
    $phoneno = $_POST['phno'];
    $dooorno = $_POST['doorno'];
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 12500000) {
            $em = "sorry file is large";
            header("Location : indedx.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $sql = "insert into images(name,phno,dono,image_url) values('$naame','$phoneno','$dooorno','$new_img_name')";
                mysqli_query($con, $sql);
                header("Location: update.php");
            } else {
                $em = "you cannot upload thid file";
                header("Location: index.php?error=$em");
            }



        }




    } else {
        $em = "unknown error occured!";
        header("Location: index.php?error=$em");
    }






} else {
    header("Location: index.php");
}
?>