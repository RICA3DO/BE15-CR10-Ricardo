<?php
require_once 'actions/db_connect.php';

if ($_GET['publisher_name']) {
    $publishername = $_GET['publisher_name'];
    $sql = "SELECT * FROM library WHERE publisher_name = '$publishername'";
    $result = mysqli_query($connect, $sql);
    $tbody = '';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $tbody .= "<tr>
                <td>" . $row['title'] . "</td>
                <td><img class='img-thumbnail' src='" . $row['photo'] . "'</td>
                <td>" . $row['type'] . "</td>
                <td>" . $row['short_description'] . "</td>
                <td>" . $row['author_first_name'] . "</td>
                <td>" . $row['author_last_name'] . "</td>
                <td>" . $row['publisher_name'] . "</td>
                <td>" . $row['ISBN'] . "</td>
                <td>" . $row['publisher_address'] . "</td>
                <td>" . $row['publish_date'] . "</td>
                <td>" . $row['availability'] . "</td>
                </tr>";
        }
    } else {
        $tbody = "<tr><td colspan='5'><center>NO AVAILABLE DATA</center></td></tr>";
    }
}
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author page</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .Books {
            margin: auto;
        }

        .img-thumbnail {
            width: 4vw !important;
            height: 11vh !important;
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
        <table class='table text-light mt-5'>
            <thead class='table-secondary'>
                <tr>
                    <th class='h5'>BOOK TITLE</th>
                    <th class='h5'>PHOTO</th>
                    <th class='h5'>TYPE</th>
                    <th class='h5'>DESCRIPTION</th>
                    <th class='h5'>WRITER FIRST NAME</th>
                    <th class='h5'>WRITER LAST NAME</th>
                    <th class='h5'>PUBLISHER</th>
                    <th class='h5'>ISBN</th>
                    <th class='h5'>ADDRESS</th>
                    <th class='h5'>RELEASE DATE</th>
                    <th class='h5'>AVAILABILITY</th>
                </tr>
            </thead>
            <tbody>
                <?= $tbody; ?>
            </tbody>
        </table>
        <div class='mb-5 d-flex justify-content-center'>
            <a href="index.php"><button class='btn btn-md btn-warning' type="button">GO BACK</button></a>
        </div>
    </div>
</body>

</html>