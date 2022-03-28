<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Add</title>
    <style>
        fieldset {
            margin: auto;
            width: 30%;
        }
    </style>
</head>

<body>
  <div class='bg-dark'> 
    <fieldset>
        <legend class='h1 mt-5 mb-10 text-center text-white'>ADD MORE MEDIA</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table text-white'>
                <tr>
                    <th>TYPE IN TITLE</th>
                    <td><input class="form-control" type="text" placeholder="Title" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE ISBN CODE</th>
                    <td><input class="form-control" type="number" placeholder="ISBN" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE DESCRIPTION</th>
                    <td><input class="form-control" type="text"  placeholder="Description" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE A BOOK TYPE</th>
                    <td><input class="form-control" type="text"  placeholder="Type" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE A FIRST NAME</th>
                    <td><input class="form-control" type="text"  placeholder="First Name" /></td>
                </tr>
                <tr>
                    <th>GIVE A LAST NAME</th>
                    <td><input class="form-control" type="text"  placeholder="Last Name" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE PUBLISHER NAME</th>
                    <td><input class="form-control" type="text"  placeholder="Publisher Name" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE PUBLISHER ADDRESS</th>
                    <td><input class="form-control" type="text"  placeholder="Publisher address" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE PUBLISH DATE</th>
                    <td><input class="form-control" type="date"  placeholder="Publish date" /></td>
                </tr>
                <br>
                <tr>
                    <th>GIVE STATUS</th>
                    <td><input class="form-control" type="text"  placeholder="available/reserved" /></td>
                </tr>
                <br>
                <tr>
                    <th>INSERT PHOTO HERE</th>
                    <td><input class="form-control" type="file" /></td>
                </tr>
                <br>
                <tr>
                    <td><button class='btn btn-warning mt-1 mb-1' type="submit">ADD</button></td>
                    <td><a href="index.php"><button class='btn btn-danger mt-1 mb-1' type="button"> GO BACK</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
  </div>
</body>

</html>