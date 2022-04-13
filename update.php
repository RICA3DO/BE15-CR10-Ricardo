<?php

require_once 'actions/db_connect.php';

if ($_GET['libraryID']) {
    $id = $_GET['libraryID'];
    $sql = "SELECT * FROM library WHERE libraryID = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
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
<html>

<head>
    <title>Edit Info</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            width: 35%;
        }
    </style>
</head>

<body>
    <fieldset class='bg-dark text-light'>
        <legend class='h1 mt-5 mb-4'>UPDATE REQUEST <img class='rounded ms-1' src=<?php echo $photo ?> alt="<?php echo $name ?>"></legend>
        <form action="actions/a_update.php" method="post">
            <table class="table text-light">
                <tr>
                    <th>BOOK TITLE</th>
                    <td><input class="form-control" type="text" name="title" placeholder="Book Title" value="<?php echo $name ?>" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class="form-control" type="number" name="ISBN" placeholder="ISBN" value="<?php echo $isbn ?>" /></td>
                </tr>
                <tr>
                    <th>DESCRIPTION</th>
                    <td><input class="form-control" type="text" name="short_description" placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>
                <tr>
                    <th>TYPE</th>
                    <td><input class="form-control" type="text" name="type" placeholder="Type" value="<?php echo $type ?>" /></td>
                </tr>
                <tr>
                    <th>WRITER FIRST NAME</th>
                    <td><input class="form-control" type="text" name="author_first_name" placeholder="Author Surname" value="<?php echo $firstname ?>" /></td>
                </tr>
                <tr>
                    <th>WRITER LAST NAME</th>
                    <td><input class="form-control" type="text" name="author_last_name" placeholder="Author Name" value="<?php echo $lastname ?>" /></td>
                </tr>
                <tr>
                    <th>PUBLISHER</th>
                    <td><input class="form-control" type="text" name="publisher_name" placeholder="Publisher" value="<?php echo $publishername ?>" /></td>
                </tr>
                <tr>
                    <th>ADDRESS</th>
                    <td><input class="form-control" type="text" name="publisher_address" placeholder="Publisher address" value="<?php echo $publisheraddress ?>" /></td>
                </tr>
                <tr>
                    <th>RELEASE DATE</th>
                    <td><input class="form-control" type="date" name="publish_date" placeholder="Publish date" value="<?php echo $publisherdate ?>" /></td>
                </tr>
                <tr>
                    <th>AVAILABILITY</th>
                    <td><input class="form-control" type="text" name="availability" placeholder="available/reserved" value="<?php echo $availability ?>" /></td>
                </tr>
                <tr>
                    <th>PHOTO</th>
                    <td><input class="form-control" type="text" name="photo" placeholder="Image URL" value="<?php echo $photo ?>"/></td>
                </tr>
                <tr>
                    <input type="hidden" name="libraryID" value="<?php echo $data['libraryID'] ?>" />
                    <input type="hidden" name="photo" value="<?php echo $data['photo'] ?>" />
                    <td><button class="btn btn-info btn-lg mt-3 mb-3" type="submit">SAVE</button></td>
                    <td><a href="index.php"><button class="btn btn-warning btn-lg mt-3 mb-3" type="button">GO BACK</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>