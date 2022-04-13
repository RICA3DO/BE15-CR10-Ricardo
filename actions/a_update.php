<?php
require_once 'db_connect.php';


if ($_POST) {    
    $id = $_POST['libraryID'];
    $photo = $_POST['photo'];
    $name = $_POST['title'];
    $type = $_POST['type'];
    $description = $_POST['short_description'];
    $lastname = $_POST['author_last_name'];
    $firstname = $_POST['author_first_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddress = $_POST['publisher_address'];
    $publisherdate = $_POST['publish_date'];
    $availability = $_POST['availability'];
    $isbn = $_POST['ISBN'];
 
        $sql = "UPDATE library SET title = '$name', photo = '$photo', type ='$type',short_description= '$description',author_last_name = '$lastname',author_first_name = '$firstname',publisher_name = '$publishername', 
        publisher_address = '$publisheraddress', publish_date = '$publisherdate',availability = '$availability', ISBN = '$isbn'
           WHERE libraryID = {$id}";
    if (mysqli_query($connect, $sql) === true) {
        $class = "Success";
        $message = "This  Product was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating : <br>" .mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response:</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?libraryID=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
       
    </body>
</html>