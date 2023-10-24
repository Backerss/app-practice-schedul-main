<?php

    session_start();

    require_once '../inc/db.php';

    if(!isset($_SESSION['user_id_db']))
      header("Location: ../index.php");

    

    $sql = "SELECT * FROM user WHERE ID = '".$_SESSION['user_id_db']."'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);


    if($row["user_img"] == "None")
        $row["user_img"] = "../assets/avatars/user_profile_none.png";



    if($row["user_status"] == 0)
        $_SESSION['user_status'] = "Not Active";
    else if($row["user_status"] == 1)
        $_SESSION['user_status'] = "Active";
    else if($row["user_status"] == 3)
        $_SESSION['user_status'] = "Graduated";
    

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="../assets/css/simplebar.css">
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
    <link rel="stylesheet" href="../assets/css/feather.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../assets/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="../assets/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="../assets/css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="../assets/css/custom.css">
    <title>Home</title>
</head>

<body class="vertical light">

    <?php include '../inc/inc/header.php'; ?>
    <?php include '../inc/inc/sidebar.php'; ?>


    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="avatar avatar-xl">
                        <label for="file-upload" class="avatar-img rounded-circle">
                            <img src="<?php echo $row["user_img"] ?>" id="pro-file-ch" class="avatar-img rounded-circle">
                            <input type="file" id="file-upload" style="display: none;" accept="image/*">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg text-center">
                    <h2><?php echo $row["user_name"] ?></h2>
                    <h3><?php echo $row["user_student_id"] ?></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">USER</h5>
                            <p class="card-text">
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Name</p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><?php echo $row["user_name"] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Student ID</p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><?php echo $row["user_student_id"] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Email</p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><?php echo $row["user_email"] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Birth Day</p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><?php echo $row["user_birthday"] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Register</p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><?php echo $row["user_register"] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Role</p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><?php echo $row["user_role"] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text">Status</p>
                                </div>
                                <div class="col-6">
                                    <?php if($row["user_status"] == 0) { ?>
                                    <p class="card-text text-danger"><?php echo $_SESSION['user_status'] ?></p>
                                    <?php } else { ?>
                                    <p class="card-text text-success"><?php echo $_SESSION['user_status'] ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">STAFF COMMENT</h5>
                            <p class="card-text"><?php echo $row["user_note"] ?></p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

</body>


<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/simplebar.min.js"></script>
<script src='../assets/js/daterangepicker.js'></script>
<script src='../assets/js/jquery.stickOnScroll.js'></script>
<script src="../assets/js/tinycolor-min.js"></script>
<script src="../assets/js/config.js"></script>
<script src="../assets/js/apps.js"></script>
<script src='../assets/js/jquery.dataTables.min.js'></script>
<script src='../assets/js/dataTables.bootstrap4.min.js'></script>
<script src="../js/main.js"></script>

</html>