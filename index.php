<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must login first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['usernsme']);
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h3 class="text-center">Home Page</h3>
                </div>
                <div class="contant">
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="success">
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success'])
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($_SESSION['username'])) : ?>
                        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <p><a href="index.php?logout='1'" class="btn btn-danger">Logout</a></p>

                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>