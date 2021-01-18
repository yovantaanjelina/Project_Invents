<?php include('navbar.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<br>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <form class="form-inline">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><img src="loupe.png" width="25px" height=25px"> </span>
        </div>
          <input type="text" style="width: 300px;" class="form-control" placeholder="Temukan event yang kamu cari!!">
      </div>    
    </form>
  </div>
  <div class="col-sm-4"></div>
</div>
<br><br>

<h4 style="margin-left: 20px;">Kategori</h4>
<div class="container">
  <div class="card-deck">
    <div class="row">
      <div class="col-sm-3">
        <div class="card" style="background-color: aliceblue;">
          <div class="card-body text-center">
            <img class="card-img-top" src="scholarship1.png" alt="Card image" style="width:100%;"><br>
            <h5 class="card-text" style="font-size: 18pt;">Beasiswa</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="background-color: aliceblue;">
          <div class="card-body text-center">
            <img class="card-img-top" src="competition.png" alt="Card image" style="width: 100%;"><br>
            <h5 class="card-text" style="font-size: 18pt;">Lomba</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="background-color: aliceblue;">
          <div class="card-body text-center">
            <img class="card-img-top" src="seminar3.png" alt="Card image" style="width:100%;"><br>
            <h5 class="card-text" style="font-size: 18pt;">Seminar</h5>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
          <div class="card" style="background-color: aliceblue;">
            <div class="card-body text-center">
              <img class="card-img-top" src="workshop1.png" alt="Card image" style="width:100%;"><br>
              <h5 class="card-text" style="font-size: 18pt;">Workshop</h5>
            </div>
          </div> 
        </div>
    </div>
  </div>
</div>

<br><br>

<h4 style="margin-left: 20px;">Terbaru</h4>
<div class="container">
<div class="row row-cols-2 row-cols-md-6">
    <div class="col">
      <div class="card h-100">
        <img src="logo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">TEMA</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="logo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TEMA</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="logo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TEMA</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    <div class="col">
      <div class="card h-100">
        <img src="logo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">TEMA</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="logo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">TEMA</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div ><i class="panah fa fa-arrow-circle-right fa-7x top-50 end-50" style="width: 300px;" aria-hidden="true"></i></div>
  </div>
</div>



</body>
<!-- <?php include('footer.php')?> -->
</html>