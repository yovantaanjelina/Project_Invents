<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>tampilan hubungi kami</title>
</head>
<style>
.container{
    margin-top: 2%;
}
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <form class="form-inline">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><img src="email.png" width="20px" height="20px"> </span>
                </div>
                <input type="email" style="width: 300px;" class="form-control" placeholder="Masukkan Email Anda">
              </div>    
            </form>  
            </div>

            <div class="col-sm-8">
            <form class="form-inline">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><img src="loupe.png" width="20px" height="20px"> </span>
                </div>
                <input type="text" style="width: 315px;" class="form-control" placeholder="Temukan event yang kamu cari!!">
              </div>    
            </form>
            </div>
        </div>
        <br>
    <form action="hubungikami.php">
        <div class="form-group">
            <textarea name="komentar" class="form-control" placeholder="Jelaskan masalah Anda" style="height:300px; width:800px;"></textarea>
        </div>
        <!-- <div class="form-group"> -->
            <!-- <text-area class="form-control" style="width: 800px; height: 200px;"></text-area> -->
        <!-- </div> -->
    </form>
    <h6>Tambah gambar (opsional)</h6>
    <div class="row">
        <div class="col-sm-6">
            <img src="addimage.png" width="50px" alt="addimage">
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary" style="background-color: #0000CD; width: 22%;">Kirim</button>
        </div>
    </div>
        <hr>
        <p>Kami akan mengirim balasan ke email Anda :) </p>
    </div> 
 <br><br>   
</body>
</html>
<?php
include('footer.php');
?>

