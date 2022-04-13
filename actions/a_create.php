<?php

require_once 'db_connect.php';

if ($_POST) {
    $photo = $_POST['photo'];
    $name = $_POST['title'];
    $isbn = $_POST['ISBN'];
    $description = $_POST['short_description'];
    $type = $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddress = $_POST['publisher_address'];
    $publisherdate = $_POST['publish_date'];
    $availability = $_POST['availability'];
    $sql = "INSERT INTO library (photo, title, ISBN, short_description, type, author_last_name, author_first_name, publisher_name, publisher_address, publish_date, availability) VALUES ('$photo', '$name', '$isbn', '$description', '$type', '$lastname', '$firstname', '$publishername', '$publisheraddress', '$publisherdate', '$availability')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created: <br>
            <table class='table table-bordered'>
            <tr>
            <td> $photo </td>
            <td> $name </td>
            <td> $isbn </td>
            <td> $description </td>
            <td> $type </td>
            <td> $firstname </td>
            <td> $lastname </td>
            <td> $publishername </td>
            <td> $publisheraddress </td>
            <td> $publisherdate </td>
            <td> $availability </td>
            </tr>
            </table>
            <hr>
            <br/> You will be automatically redirected to the startpage in 5 seconds.";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
            <h1 class="mt-5 mb-5">CREATE INFO</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>