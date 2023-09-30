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

<body class="bg-primary">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTER</h5>
                        <div class="mb-3">
                            <label for="full_name" class="form-label">ชื่อนามสกุล</label>
                            <input type="text" name="full_name" class="form-control" placeholder="ชื่อจริง นามสกุล">
                        </div>
                        <div class="mb-3">
                            <label for="id_student" class="form-label">รหัสนักศึกษา</label>
                            <input type="text" name="id_student" class="form-control" placeholder="รหัสนักศึกษา">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมลล์</label>
                            <input type="email" name="user_email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" name="user_tel" class="form-control" placeholder="เบอร์โทรศัพท์">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Birthday</label>
                            <input type="date" name="user_birthday" class="form-control" placeholder="Birthday">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">เพศ</label>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="radio" name="user_sex" id="flexRadioDefault1" value="ชาย">
                            <label class="form-check-label" for="flexRadioDefault1">
                                ชาย
                            </label>

                            <input class="form-check-input" type="radio" name="user_sex" id="flexRadioDefault1" value="หญิง">
                            <label class="form-check-label" for="flexRadioDefault1">
                                หญิง
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Password</label>
                            <input type="password" name="user_password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Confirm Password</label>
                            <input type="password" name="user_confirm_password" class="form-control"
                                placeholder="Confirm Password">
                        </div>
                        <hr>
                        <button class="btn btn-primary w-100" id="reg-submit" type="button">REGISTER</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>