<?php

        session_start();

        require_once '../../inc/db.php';

        if(!isset($_SESSION['user_id_db']))
        header("Location: ../../index.php");



        $sql = "SELECT * FROM user WHERE ID = '".$_SESSION['user_id_db']."'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);


    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $sql = "SELECT * FROM user WHERE ID = '$id'";
        $result = mysqli_query($conn, $sql);

        $user_data = mysqli_fetch_assoc($result);

    

    }
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

    <title>แก้ไข <?php echo $user_data["user_name"] ?></title>
</head>

<body class="vertical light">

    <?php include '../../inc/inc/header.php'; ?>
    <?php include '../../inc/inc/sidebar.php'; ?>

    <main role="main" class="main-content">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ชื่อ <?php echo $user_data["user_name"] ?></h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-lg">
                                <label for="">ชื่อ</label>
                                <input class="form-control" type="text" name="edit_name"
                                    value="<?php echo $user_data["user_name"] ?>">
                            </div>
                            <div class="col-lg">
                                <label for="">Email</label>
                                <input class="form-control" type="text" name="edit_email"
                                    value="<?php echo $user_data["user_email"] ?>">
                            </div>
                            <div class="col-lg">
                                <label for="">เพศ</label>
                                <select class="form-control" name="edit_sex" aria-label="">
                                    <option value="<?php echo $user_data["user_sex"] ?>" selected>
                                        <?php echo $user_data["user_sex"] ?></option>
                                    <option value="M">ชาย</option>
                                    <option value="F">หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg">
                                <label for="">วันเกิด</label>
                                <input class="form-control" type="date" name="edit_birthday"
                                    value="<?php echo $user_data["user_birthday"] ?>">
                            </div>
                            <div class="col-lg">
                                <label for="">เบอร์โทรศัพท์</label>
                                <input class="form-control" type="text" name="edit_tel"
                                    value="<?php echo $user_data["user_tel"] ?>">
                            </div>
                            <div class="col-lg">
                                <label for="">ตำแหน่ง</label>
                                <select class="form-control" name="edit_role" aria-label="">
                                    <option value="<?php echo $user_data["user_role"] ?>" selected>
                                        <?php echo $user_data["user_role"] ?></option>
                                    <option value="Admin">Admin</option>
                                    <option value="นักเรียน">นักเรียน</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg">
                                <label for="">รหัสนักศึกษา</label>
                                <input class="form-control" type="text" name="edit_id_student"
                                    value="<?php echo $user_data["user_student_id"] ?>">
                            </div>
                            <div class="col-lg">
                                <label for="">รหัสผ่าน</label>
                                <input class="form-control" type="text" name="edit_password" value="">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h5>ระบบสถานะ</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <label for="">สถานะ</label>
                                <select class="form-control" name="edit_status" aria-label="">
                                    <?php if($user_data["user_status"] == "1"){ ?>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                    <option value="3">Graduated</option>
                                    <?php }else if($user_data["user_status"] == "0"){ ?>
                                    <option value="1">Active</option>
                                    <option value="0" selected>Inactive</option>
                                    <option value="3">Graduated</option>
                                    <?php }else if($user_data["user_status"] == "3"){ ?>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                    <option value="3" selected>Graduated</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg">
                                <label for="">วันที่สมัคร</label>
                                <input class="form-control" type="text" name="edit_register_date"
                                    value="<?php echo $user_data["user_register"] ?>" disabled>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <label for="">Note</label>
                                <textarea class="form-control" name="edit_note" id="" cols="30"><?php echo $user_data["user_note"] ?>
                                </textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg">
                                <button class="btn btn-primary w-100" id="edit-user-submit" type="button">แก้ไข</button>
                            </div>
                        </div>
                        </p>
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
<script src="../../js/main.js"></script>