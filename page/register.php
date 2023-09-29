<?php

    session_start();

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Home</title>
</head>

<body class="bg-blue p-fixed">
    <div class="leyer-1 block-reg">
        <form action="../inc/reg_inc.php" method="post">
            <div class="row">
                <div class="col-lg">
                    <input class="form-control" type="text" name="full_name"
                        placeholder="ชื่อ-นามสกุล (Fristname Lastname)">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg">
                    <input class="form-control" type="text" name="id_student" placeholder="รหัสนักศึกษา">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg">
                    <input class="form-control" type="text" name="email" placeholder="Email(email@gmail.com)">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg">
                    <input class="form-control" type="date" name="birthday" placeholder="วันเกิด">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg">
                    <input class="form-control" type="password" name="password" placeholder="รหัสผ่าน">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg">
                    <input class="form-control" type="password" name="password_confirmation"
                        placeholder="ยืนยันรหัสผ่าน">
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-body">
                    <p class="card-title">เลือกเพศ</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="ชาย" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            ชาย
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="หญิง" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            หญิง
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="อื่น ๆ" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            อื่น ๆ
                        </label>
                    </div>
                </div>
            </div>

            <a class="link-info" href="#">ข้อตกลง</a>

        </form>

        <div class="row">
            <div class="col gap-2 col mx-auto mt-3">
                <button class="btn btn-primary" type="button">ยกเลิก</button>
            </div>
            <div class="col gap-2 col mx-auto mt-3">
                <button class="btn btn-primary" id="reg-submit" type="button">สมัครสมาชิก</button>
            </div>
        </div>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>