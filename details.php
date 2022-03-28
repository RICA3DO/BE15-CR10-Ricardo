<?php
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
        $tcontent = "<tr>
            <td>" . $name . "</td>
            <td>" . $isbn . "</td>
            <td>" . $description . "</td>
            <td>" . $type . "</td>
            <td>" . $firstname . "</td>
            <td>" . $lastname . "</td>
            <td>" . $publishername . "</td>
            <td>" . $publisheraddress . "</td>
            <td>" . $publisherdate . "</td>
            <td>" . $availability . "</td>
            </tr>";
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
    <title>DETAILS</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .Books {
            margin: auto;
        }

        .img-thumbnail {
            width: 80px !important;
            height: 80px !important;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        tr {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="Books w-50 mt-5 bg-dark">
        <img src="pictures/<?= $photo ?>" class="rounded mx-auto d-block mb-3 " alt="<?= $name ?>" width="200px">
        <p class='h2 text-center text-info mt-5 mb-5'> <?= $name ?> </p>
        <table class='table bg-dark text-white'>
            <thead class='table-secondary'>
                <tr>
                    <th class='h5'>BOOK TITLE</th>
                    <th class='h5'>ISBN</th>
                    <th class='h5'>DESCRIPTION</th>
                    <th class='h5'>TYPE</th>
                    <th class='h5'>WRITER FIRST NAME</th>
                    <th class='h5'>WRITER LAST NAME</th>
                    <th class='h5'>PUBLISHER</th>
                    <th class='h5'>PUBLISHER ADDRESS</th>
                    <th class='h5'>RELEASE DATE</th>
                    <th class='h5'>AVAILABILITY</th>
                </tr>
            </thead>
            <tbody>
                <?= $tcontent; ?>
            </tbody>
        </table>
        <div class='mb-3 d-flex justify-content-center'>
            <a href="index.php"><button class='btn btn-lg btn-warning' type="button">Back</button></a>
        </div>
    </div>
</body>

</html>