<?php
    require_once('connect.php');


    if(!isset($_GET['Sid'])){

        // redirect to show page

        die('Sid not provided');

    }



    $Sid =  $_GET['Sid'];

    $sql = "SELECT * FROM `studentrecord` where Sid = $Sid";

    $result = $conn->query($sql);

    if($result->num_rows != 1){

        // redirect to show page

        die('id is not in db');

    }

    $data = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Product Company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/crud/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/crud/show.php">All Products</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-center">
            Product Company
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">

                <form action="./modify.php?Sid=<?= $Sid ?>" method="POST">

                <?php
    require_once('db.php');


    if(!isset($_GET['id'])){

        // redirect to show page

        die('id not provided');

    }



    $id =  $_GET['id'];

    $sql = "SELECT * FROM `product` where id = $id";

    $result = $con->query($sql);

    if($result->num_rows != 1){

        // redirect to show page

        die('id is not in db');

    }

    $data = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Product Company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/crud/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/crud/show.php">All Products</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-center">
            Product Company
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">

                <form action="./modify.php?id=<?= $id ?>" method="POST">

                <h3>Edit Form</h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="pname" id="name" value="<?= $data['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="pprice" id="price" value="<?= $data['price']?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="pdescription" id="description" cols="30" rows="10"><?= $data['description']?></textarea>
                    </div>

                    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">

                </form>
            </div>
        </div>
    </div>
</body>
</html>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
