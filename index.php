<?php

require_once "actions/db_connect.php";

$sql = "SELECT * FROM library";
$result = mysqli_query($connect, $sql);
$tbody = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "<tr>
                <td>" . $row['title'] . "</td>
                <td><img class='img-thumbnail' src='pictures/" . $row['photo'] . "'</td>
                <td>" . $row['type'] . "</td>
                <td>" . $row['author_first_name'] . "</td>
                <td>" . $row['author_last_name'] . "</td>
                <td>" . $row['short_description'] . "</td>
                <td>" . $row['publisher_address'] . "</td>
                <td>" . $row['publisher_name']  . "</td>
                <td>" . $row['publish_date'] . "</td>
                <td>" . $row['ISBN'] . "</td>
                <td>" . $row['availability'] . "</td>
                <td><a href='details.php?libraryID=" . $row['libraryID'] . "'><button class='btn btn-primary btn-md w-100 mb-2' type='button'>INFORMATION</button></a>
                <a href='update.php?libraryID=" . $row['libraryID'] . "'><button class='btn btn-warning btn-md w-100 mb-2' type='button'>EDIT</button></a>
                <a href='publisher.php?publisher_name=" . $row['publisher_name'] . "'><button class='btn btn-info btn-md w-100 mb-2' type='button'>MEDIA</button></a>
                <a href='delete.php?libraryID=" . $row['libraryID'] . "'><button class='btn btn-danger btn-md w-100 mb-2' type='button'>DELETE</button></a>
                </td>
                </tr>";
    }
} else {
    $tbody = "<tr><td colspan='5'><center>NO AVAILABLE DATA</center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .Books {
            margin: auto;
        }
        tr {
            text-align: center;
        }
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="Books ms-5 me-5 bg-dark">
        <p class='mt-5 mb-5 display-1 text-center text-danger'>Library</p>
        <table class='table bg-dark text-light'>
            <thead class='table-secondary'>
                <tr>
                    <th class='h3'>BOOK TITLE</th>
                    <th class='h3'>PHOTO</th>
                    <th class='h3'>TYPE</th>
                    <th class='h3'>WRITER FIRST NAME</th>
                    <th class='h3'>WRITER LAST NAME</th>
                    <th class='h3'>DESCRIPTION</th>
                    <th class='h3'>ADDRESS</th>
                    <th class='h3'>PUBLISHER</th>
                    <th class='h3'>RELEASE DATE</th>
                    <th class='h3'>ISBN CODE</th>
                    <th class='h3'>AVAILABILITY</th>
                    <th class='h3'>OPTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?= $tbody; ?>
            </tbody>
        </table>
        <div class='p-5 text-center'>
            <a href="create.php"><button class='btn btn-lg btn-warning' type="button">ADD</button></a>
        </div>
    </div>
</body>

</html>