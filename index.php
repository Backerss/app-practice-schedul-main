<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/custom.css" />

    <title>APP</title>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="card card-center">
                    <div class="card-body">
                        <h5 class="card-title text-center">LOGIN</h5>
                        <hr>

                          <div class="mb-3">
                            <label for="" class="form-label">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" id=""
                                placeholder="หัสนักศึกษา" name="id_student">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" id=""
                                placeholder="รหัสผ่าน" name="password">
                          </div>
                          <hr>
                          <a href="page/register.php">Register</a>
                          <div class="mb-3 mt-1">
                            <button class="btn btn-primary w-100" id="submit_login">LOGIN</button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>

</html>