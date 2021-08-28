<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Mount Everest</title>
        <style>
            fieldset {
                margin: auto;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
    <?php require_once 'components/nav.php'?>
    <div>
        <img src="pictures/desert.jpeg" class="img-fluid shadow" >
    </div>
        <fieldset class="mb-5">
            <legend class='h3 fw-light text-center my-5'>Add Destination</legend>
            <form action="actions/a_create.php" method= "POST">
                <table class='table '>
                  <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="locationName"  placeholder="Product Title" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name="image" placeholder="Image URL" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price"  placeholder="Price" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="Description" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name= "latitude" placeholder="Latitude" /></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name= "longitude" placeholder="Longitude" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-outline-success btn-sm' type="submit">Add</button></td>
                        <td><a href="index.php"><button class='btn btn-outline-warning btn-sm' type="button"><i class="fas fa-step-backward">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>