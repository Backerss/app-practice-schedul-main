<?php

    session_start();

    require_once '../inc/db.php';

    if(!isset($_SESSION['user_id_db']))
      header("Location: ../../index.php");

    

    $sql = "SELECT * FROM user WHERE ID = '".$_SESSION['user_id_db']."'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row["user_img"] == "None")
        $row["user_img"] = "../assets/avatars/user_profile_none.png";


    //get date
    $date = date("Y-m-d");

    $role = $row["user_role"];

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
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
                <div class="col-lg">
                    <h3>รายชื่อ</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <table id="view_class" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รหัสนักศึกษา</th>
                                        <th>ชื่อ</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>อีเมล</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM user";
                                        $result = mysqli_query($conn, $sql);
                                        $count = 1;

                                        while($row = mysqli_fetch_assoc($result)){
                                            
                                            if($row["user_role"] == "Admin")
                                                continue;

                                            $id = $row["ID"];
                                            $s_id = $_GET["id"];
                                            $sql = "SELECT * FROM check_schedul WHERE c_check_by = '$id' AND c_check_id = '$s_id'";
                                            $result2 = mysqli_query($conn, $sql);

                                            if(mysqli_num_rows($result2) > 0){
                                                $row2 = mysqli_fetch_assoc($result2);
                                                
                                                if($row2["c_check_status"] == "มา"){
                                                    $row["user_role"] = "มา";
                                                }
                                                else if($row2["c_check_status"] == "ไม่มา"){
                                                    $row["user_role"] = "ไม่มา";
                                                }
                                                else{
                                                    $row["user_role"] = "ไม่ได้เข้าร่วม";
                                                }
                                            }
                                            else{
                                                $row["user_role"] = "ไม่มา";
                                            }
                                            
                                            echo "<tr>";
                                            echo "<td>".$count."</td>";
                                            echo "<td>".$row["user_student_id"]."</td>";
                                            echo "<td>".$row["user_name"]."</td>";
                                            echo "<td>".$row["user_tel"]."</td>";
                                            echo "<td>".$row["user_email"]."</td>";

                                            //selete status
                                            
                                            if($role == "Admin")
                                            {

                                                echo "<td>";
                                                echo "<select class='form-select' aria-label='Default select example'>";
                                                
                                                if($row["user_role"] == "มา"){
                                                    echo "<option value='มา' selected>มา</option>";
                                                    echo "<option value='ไม่มา'>ไม่มา</option>";
                                                }
                                                else if($row["user_role"] == "ไม่มา"){
                                                    echo "<option value='มา'>มา</option>";
                                                    echo "<option value='ไม่มา' selected>ไม่มา</option>";
                                                }
                                                else{
                                                    echo "<option value='มา'>มา</option>";
                                                    echo "<option value='ไม่มา'>ไม่มา</option>";
                                                }

                                                echo "</select>";
                                                echo "</td>";
                                            }
                                            else{
                                                echo "<td>".$row["user_role"]."</td>";
                                            }
                                            echo "</tr>";

                                            $count++;
                                        
                                           
                                        }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รหัสนักศึกษา</th>
                                        <th>ชื่อ</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>อีเมล</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">สรุปผล</h5>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>มา</th>
                                        <th>ไม่มา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM check_schedul WHERE c_check_id = '$s_id'";
                                        $result = mysqli_query($conn, $sql);
                                        $count = 0;
                                        $count2 = 0;

                                        while($row = mysqli_fetch_assoc($result)){
                                            if($row["c_check_status"] == "มา"){
                                                $count++;
                                            }
                                            
                                        }

                                        $sql = "SELECT * FROM user";
                                        $result2 = mysqli_query($conn, $sql);

                                        while($row2 = mysqli_fetch_assoc($result2)){
                                            if($row2["user_role"] == "Admin")
                                                continue;

                                            $count2++;
                                        }
                                    ?>
                                    <tr>
                                        <td id="count1"></td>
                                        <td id="count2"></td>
                                    </tr>
                                </tbody>
                            </table>
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
<script src='../js/main.js'></script>


<!-- Add this script at the end of your HTML file, after including jQuery -->


<script>
    $(document).ready(function () {
        $('#view_class').DataTable();
    });
</script>




<script>
    $(document).ready(function () {
        // Count attendees and absentees
        var countAttendees = 0;
        var countAbsentees = 0;

        // Loop through each row in the status table
        $('#view_class tbody tr').each(function () {
            var status = $(this).find('td:last').text().trim();

            // Check the status and increment the corresponding counter
            if (status === 'มา') {
                countAttendees++;
            } else if (status === 'ไม่มา') {
                countAbsentees++;
            }
        });

        // Display the counts in the summary table
        $('#count1').text(countAttendees);
        $('#count2').text(countAbsentees);
    });
</script>


</html>