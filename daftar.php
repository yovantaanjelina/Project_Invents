<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/popbox.css"> -->
    
    
    <link rel="stylesheet" href="halaman1.html">
    <title>laman pendaftaran</title>
  </head>
  <body>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Daftar
  </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="dialog">
        <div class="modal-content">

        <div class="d-flex justify-content-between mb-3">
        <div class="p-2"></div>
        <div class="p-2"></div>
        <div class="p-2"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
      </div> 
          <img class="mx-auto d-block" src="logo.png" alt="logo"  style="width:25%;">
          <div class="modal-body" style="background-color:white;">
          <center><p>Daftarkan dirimu untuk publikasi event yang kamu miliki</p></center>
              <form action="daftar.php">
                <div class="form-group">  
                  <form class="form-inline">
                  <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text"><img src="name.png" width="20px" height="20px"> </span>
                    </div>
                    <input type="text" style="width: 420px;" class="form-control" name="nama" placeholder="Nama Lengkap">
                  </div>    
                  </form>                
                </div>

                <div class="form-group"> 
                  <form class="form-inline">
                    <div class="input-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text"><img src="email.png" width="20px" height="20px"> </span>
                      </div>
                      <input type="email" style="width: 420px;" name="email" class="form-control" placeholder="Email">
                    </div>    
                  </form>              
                </div>

                  <div class="form-group">
                    <form class="form-inline">
                      <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><img src="user.png" width="20px" height="20px"> </span>
                        </div>
                        <input type="text" style="width: 420px;" name="username" class="form-control" placeholder="Username"> 
                      </div>    
                    </form>   
                  </div>

                  <div class="form-group">
                    <form class="form-inline">
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text"><img src="padlock.png" width="20px" height="20px"> </span>
                          </div>
                          <input type="password" style="width: 420px;" name="password" class="form-control" placeholder="Password">
                        </div>    
                      </form>   
                  </div>

                  <div class="form-group">
                    <form class="form-inline">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><img src="padlock2.png" width="20px" height="20px"> </span>
                          </div>
                            <input type="password" style="width: 420px;" name="password" class="form-control" placeholder="Konfirmasi Password">
                        </div>    
                    </form>   
                  </div>

                  <div class="form-group">
                    <form class="form-inline">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><img src="telepon.png" width="20px" height="20px"> </span>
                        </div>
                          <input type="text" style="width: 420px;" name="telepon" class="form-control" placeholder="No.Telepon">
                      </div>    
                    </form>                   
                  </div>

                  <div class="form-group">
                  <form class="form-inline">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><img src="building.png" width="20px" height="20px"> </span>
                        </div>
                          <input type="text" style="width: 420px;" class="form-control" name="organisasi" placeholder="Organisasi">
                      </div>    
                    </form>      
                  </div>
                 <center>
                   <button type="button" class="btn btn-primary" style="border-radius: 30px; width:80%;">Daftar</button>
                    <br><br><p style="font-size: 9pt;">Dengan menekan tombol "Daftar", maka kamu menyetujui ketentuan penggunaan</p></>
                    <p style="font-size: 9pt;">Sudah punya akun?</p>
                    <button type="button" class="btn btn-light" style="border-radius: 30px; width:80%; background-color:aliceblue;">Masuk</button>
                 </center><br>
               </form>
          </div>
          </div>
        </div>
      </div>
 

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>