<?php include('navbar.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> kategori beasiswa </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br>
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3">
              <h1>Beasiswa</h1>
          </div>

          <div class="col-sm-6">
            <form class="form-inline">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><img src="loupe.png" width="20px" height=20px"> </span>
                </div>
                <input type="text" style="width: 400px;" class="form-control" placeholder="Temukan event yang kamu cari!!">
              </div>    
            </form>
          </div>

          <div class="col-sm-3">
            <div class="container">                     
                <div class="dropdown"><button type="button" class="dropdown-toggle" data-toggle="dropdown">Urutkan berdasarkan</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Terbaru</a>
                    <a class="dropdown-item" href="#">Terpopuler</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3">
            <div class="container">
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-top" src="loupe.png" alt="Card image" style="width:80%">
                  <div class="card-body text-center">
                    <h4 class="card-title">John Doe</h4>
                  </div>
                </div>
                <br>
                
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                  <div class="card-body text-center">
                    <h4 class="card-title">Jane Doe</h4>
                  </div>
                </div>
                <br>

                <div class="card" style="width: 300px; height: 300px;">
                    <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                    <div class="card-body text-center">
                      <h4 class="card-title">Jane Doe</h4>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="container">
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-top" src="loupe.png" alt="Card image" style="width:80%">
                  <div class="card-body text-center">
                    <h4 class="card-title">John Doe</h4>
                  </div>
                </div>
                <br>
                
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                  <div class="card-body text-center">
                    <h4 class="card-title">Jane Doe</h4>
                  </div>
                </div>
                <br>

                <div class="card" style="width: 300px; height: 300px;">
                    <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                    <div class="card-body text-center">
                      <h4 class="card-title">Jane Doe</h4>
                    </div>
                </div> 
          </div>
         </div>

          <div class="col-sm-3">
            <div class="container">
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-top" src="loupe.png" alt="Card image" style="width:80%">
                  <div class="card-body text-center">
                    <h4 class="card-title">John Doe</h4>
                  </div>
                </div>
                <br>
                
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                  <div class="card-body text-center">
                    <h4 class="card-title">Jane Doe</h4>
                  </div>
                </div>
                <br>

                <div class="card" style="width: 300px; height: 300px;">
                    <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                    <div class="card-body text-center">
                      <h4 class="card-title">Jane Doe</h4>
                    </div>
                </div>
           </div>
          </div>

          <div class="col-sm-3">
            <div class="container">
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-top" src="loupe.png" alt="Card image" style="width:80%">
                  <div class="card-body text-center">
                    <h4 class="card-title">John Doe</h4>
                  </div>
                </div>
                <br>
                
                <div class="card" style="width: 300px; height: 300px;">
                  <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                  <div class="card-body text-center">
                    <h4 class="card-title">Jane Doe</h4>
                  </div>
                </div>
                <br>

                <div class="card" style="width: 300px; height: 300px;">
                    <img class="card-img-bottom" src="loupe.png" alt="Card image" style="width:80%">   
                    <div class="card-body text-center">
                      <h4 class="card-title">Jane Doe</h4>
                    </div>
                </div>
           </div>
          </div>
        </div>
    </div>

  <?php include('footer.php')?>
</body>
</html>