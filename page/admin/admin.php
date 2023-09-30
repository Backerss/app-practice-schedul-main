<?php

    session_start();

    require_once '../../inc/db.php';

    if(!isset($_SESSION['user_id_db']))
      header("Location: ../../index.php");

    

    $sql = "SELECT * FROM user WHERE ID = '".$_SESSION['user_id_db']."'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="../../assets/css/simplebar.css">
    <!-- Awesome ICON -->
    <link href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.min.css" rel="stylesheet">
    <!-- Font SF PRO DISPLAY (APPLE) -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=98774,98773,98775,98770,98771,98769"
        rel="stylesheet">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../../assets/css/feather.css">
    <link rel="stylesheet" href="../../assets/css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../../assets/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="../../assets/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="../../assets/css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <title>ADMIN</title>
</head>

<body class="vertical light">

    <?php include '../../inc/inc/header.php'; ?>
    <?php include '../../inc/inc/sidebar.php'; ?>

    <main role="main" class="main-content">
        <div class="row">
            <div class="col col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ALL USER</h5>
                        <?php

                            $sql = "SELECT * FROM user";
                            $result = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result);

                        ?>

                        <p class="card-text"><?php echo $count; ?> คน</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ALL ADMIN</h5>
                        <?php

                            $sql = "SELECT * FROM user WHERE user_role = 'Admin'";
                            $result = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result);
                        ?>
                        <p class="card-text"><?php echo $count; ?> คน</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-lg">
                <h3>สวัสดี <?php echo $row["user_name"] ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">USER</h5>
                        <table id="user_view" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>User Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $sql = "SELECT * FROM user";
                                    $result = mysqli_query($conn, $sql);

                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $row["ID"] ?></td>
                                    <td><?php echo $row["user_name"] ?></td>
                                    <td><?php echo $row["user_role"] ?></td>
                                    <td>
                                        <a href="./edit_user.php?id=<?php echo $row["ID"] ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>User Role</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>


<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/moment.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/simplebar.min.js"></script>
<script src='../../assets/js/daterangepicker.js'></script>
<script src='../../assets/js/jquery.stickOnScroll.js'></script>
<script src="../../assets/js/tinycolor-min.js"></script>
<script src="../../assets/js/config.js"></script>
<script src="../../assets/js/apps.js"></script>
<script src='../../assets/js/jquery.dataTables.min.js'></script>
<script src='../../assets/js/dataTables.bootstrap4.min.js'></script>


<script>
$(document).ready(function() {
    $('#user_view').DataTable();
});
</script>

</html>