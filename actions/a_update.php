<?php

require_once 'db_connect.php';
require_once 'file_upload.php';


if ($_POST) {
    $id = $_POST['id'];
    $photo = file_upload($_FILES['photo']);
    $name = $_POST['title'];
    $isbn = $_POST['isbn'];
    $description = $_POST['short_description'];
    $type = $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddress = $_POST['publisher_address'];
    $publisherdate = $_POST['publish_date'];
    $availability = $_POST['availability'];
    $uploadError = '';

    if ($photo->error === 0) {
        ($_POST["photo"] == "product.png") ?: unlink("../pictures/$_POST[photo]");
        $sql = "UPDATE library SET photo = '$photo->fileName', title = '$name', ISBN = $isbn, short_description = '$description', type = '$type', author_last_name = '$lastname', author_first_name = '$firstname', publisher_name = '$publishername', publisher_address = '$publisheraddress', publish_date = '$publisherdate', availability = '$availability' WHERE libraryID = {$id}";
    } else {
        $sql = "UPDATE library SET title = '$name', ISBN = $isbn, short_description = '$description', type = '$type', author_last_name = '$lastname', author_first_name = '$firstname', publisher_name = '$publishername', publisher_address = '$publisheraddress', publish_date = '$publisherdate', availability = '$availability' WHERE libraryID = {$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "data has been successfully updated.";
        $uploadError = ($photo->error != 0) ? $photo->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record: <br>" . mysqli_connect_error();
        $uploadError = ($photo->error != 0) ? $photo->ErrorMessage : '';
    }
    mysqli_close($connect);
    header("refresh: 5; url = ../index.php");
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1 class="mt-5 mb-5">UPDATE INFO</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= ($message) ?? ''; ?></p>
            <p><?= ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>HOME</button></a>
        </div>
    </div>
</body>

</html>