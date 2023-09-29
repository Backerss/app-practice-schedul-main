<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body class="bg-blue">

    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ข้อมูลผู้ใช้</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ประวัติการฝึก</a>
              </li>
              <!--ZONE ADMIN-->
              <!--ZONE ADMIN-->
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-2">
        <div class="input-group">
            <input type="text" class="form-control form-serch" placeholder="Serch" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row mt-3">
            <h4>SCHEDULE</h4>
        </div>
        
        <div class="row p-3">
            <div class="card bg-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-3 bg-blue">
                                <p class="text-center">08.00</p>
                            </div>
                            <div class="col-7">
                                <p class="text-center">วิชา การเขียนโปรแกรมคอมพิวเตอร์</p>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="card bg-primary">
                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-3 bg-blue">
                                <p class="text-center">08.00</p>
                            </div>
                            <div class="col-7">
                                <p class="text-center">วิชา การเขียนโปรแกรมคอมพิวเตอร์</p>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid bg-blue">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="card-text">HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      
  </body>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>