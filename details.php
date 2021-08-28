<?php
require_once 'actions/db_connect.php';
require_once 'api/RESTful.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM destinations WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = $result->fetch_assoc();
        $locationName = $data['locationName'];
        $image = $data['image'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>
<html>
<head>
    <title>Edit Destination</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
        th {
            width: 50%;
        }
        tr {
            width: 50%;
        }
        #map {
            height: 50vh;
            width: 100vw;

        }
        html,
        body {
            margin: auto 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php require_once 'components/nav.php' ?>
    <div>
            <img src="pictures/desert.jpeg" class="img-fluid shadow mb-5" >
        </div>
    <fieldset class="my-4">
        <h1 class="text-center mb-5 mt-1">Details</h1>
        <table class="table">
            <tr>
                <th>Image</th>
                <td><img src="<?php echo $image ?>" style="height:150px; width:150px" class="rounded-circle border-0 shadow mb-3"> </td>
            <tr>
                <th>Title</th>
                <td><?php echo $locationName ?></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><?php echo $description ?></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><?php echo $price ?></td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td><?php echo $latitude ?></td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td><?php echo $longitude ?></td>
            </tr>
            <tr>
                <td><a href="index.php"><button class="btn btn-outline-warning btn-sm" type="button"><i class="fas fa-step-backward"></i> back</button></a></td>
            </tr>
        </table>
    </fieldset>
    </div>
    <div class='d-flex justify-content-center m-3'>
        <div class="btn fw-bold" id="show">Show Weather</div>
    </div>
    <div class='d-flex justify-content-center mb-5 mt-2 text-center' id="weather"></div>
    <script>
        document.getElementById("show").addEventListener("click", loadData);
        function loadData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.status == 200) {
                     document.getElementById("weather").innerHTML = this.responseText;
                }
            }
            let url = "weather.php?lat=" + <?php echo $latitude ?> + "&long=" + <?php echo $longitude ?>;
            xhttp.open("GET", url, true);
            xhttp.send();
        }  
    </script>  
    <div id="map" class="container shadow mb-5 "></div>
    <script>   
        document.getElementById("weather").addEventListener("click", weather);
                function initMap() {
                    var location = {
                        lat: <?php echo $latitude?>,
                        lng: <?php echo $longitude ?>
                        };
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: location,
                        zoom: 9
                    });
                    var pinpoint = new google.maps.Marker({
                    position: location,
                    map: map
                    });
                }
                </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
</body>
</html>