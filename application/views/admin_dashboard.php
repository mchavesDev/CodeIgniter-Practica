<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <h1>Welcome, You are successfully logged in. ADMIN</h1>

    <?php
    echo "<div class='container'>";
    echo $taula;
    echo $form;
    ?>

    <a class="btn btn-primary btn-sm" href='<?php echo base_url() . $func; ?>'><?php echo $funcName; ?></a>
    <a class="btn btn-primary btn-sm" href='<?php echo base_url() . "index.php/Main/logout"; ?>'>Logout</a>
    </div>
</body>

</html>