<?php
require_once 'db_connect.php';

if ($_POST) {   
    $locationName = $_POST['locationName'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $sql = "INSERT INTO destinations (locationName, image, price, description,latitude, longitude) VALUES ('$locationName', '$image', '$price', '$description', '$latitude', '$longitude')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-100'>
                <tr>
                    <td> <img src='$image' class='img-thumbnail border-0 shadow'> </td>
                    <td>$locationName</td>
                    <td>$price</td>
                    <td>$description</td>
                    <td>$latitude</td>
                    <td>$longitude</td>
                    
                </tr>
            </table>
            <hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
        <style type= "text/css">
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }       
        </style>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>