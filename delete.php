<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'actions/db_connect.php';

if ($_GET['libraryID']) {
    $id = $_GET['libraryID'];
    $sql = "SELECT * FROM library WHERE libraryID = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $name = $data['title'];
        $isbn = $data['ISBN'];
        $description = $data['short_description'];
        $type = $data['type'];
        $firstname = $data['author_first_name'];
        $lastname = $data['author_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publisherdate = $data['publish_date'];
        $availability = $data['availability'];
        $photo = $data['photo'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Media</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70%;
        }

        .img-thumbnail {
            width: 4vw !important;
            height: 11vh !important;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2 mb-3'>DELETE ALL INFO<img class='img-thumbnail rounded ms-5' src='pictures/<?= $photo ?>' alt="<?= $name ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class='table table-striped'>
            <thead class='table-secondary'>
                <tr>
                    <th class='h5'>PHOTO</th>
                    <th class='h5'>BOOK TITLE</th>
                    <th class='h5'>ISBN</th>
                    <th class='h5'>DESCRIPTION</th>
                    <th class='h5'>TYPE</th>
                    <th class='h5'>WRITER FIRST NAME</th>
                    <th class='h5'>WRITER LAST NAME</th>
                    <th class='h5'>PUBLISHER</th>
                    <th class='h5'>ADDRESS</th>
                    <th class='h5'>RELEASE DATE</th>
                    <th class='h5'>AVAILABILITY</th>
                </tr>
            </thead>
            <tr>
                <td><?= $photo ?></td>
                <td><?= $name ?></td>
                <td><?= $isbn ?></td>
                <td><?= $description ?></td>
                <td><?= $type ?></td>
                <td><?= $firstname ?></td>
                <td><?= $lastname ?></td>
                <td><?= $publishername ?></td>
                <td><?= $publisheraddress ?></td>
                <td><?= $publisherdate ?></td>
                <td><?= $availability ?></td>
            </tr>
        </table>

        <h3 class="mb-4 mt-5">YOU SURE?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="libraryID" value="<?= $id ?>" />
            <input type="hidden" name="photo" value="<?= $photo ?>" />
            <button class="btn btn-success mb-5" type="submit">Yes</button>
            <a href="index.php"><button class="btn btn-warning mb-5" type="button">No</button></a>
        </form>
    </fieldset>
</body>

</html>