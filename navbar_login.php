<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <div class="container-fluid">
            <a class="navbar-brand mr-0" href="#">
                <img src="logo.png" alt="" width="100" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex collapse navbar-collapse justify-content-lg-center order-2" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center">
                        <li class="p-2 nav-item">
                            <a class="p-2 flex-fill nav-link active" aria-current="page" href="#"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="p-2 flex-fill nav-link" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Tentang</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="p-2 flex-fill nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i> Hubungi Kami</a>
                        </li>
                        <li class="p-2 nav-item">
                            <a class="p-2 flex-fill nav-link" href="#"><i class="fa fa-download" aria-hidden="true"></i>  Koleksi</a>
                        </li>
                </ul>
            </div>
    </div>
    <ul class="d-flex nav navbar-nav flex-row justify-content-center flex-nowrap">
        <li class="p-2 nav-item">
            <button type="button" class="btn">  Unggah  </button>
        </li>
        
        <li >
            <div class="menu2">
                    <ul>
                        <li><a href=""> <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="">Profil</a></li>
                                <li><a href="">Edit Profil</a></li>
                                <li><a href="">Notifikasi</a></li>
                            </ul>
                        </li>
                    </ul>   
            </div>
        </li>
    </ul>

</div>
</nav>
</body>
</html>