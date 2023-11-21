<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>UserTemplate/full-page-login/styles.css">

    <title>Login</title>
  </head>
  <body>

    <!-- Backgrounds -->

    <div id="login-bg" class="container-fluid">

      <div class="bg-img"></div>
      <div class="bg-color"></div>
    </div>

    <!-- End Backgrounds -->

    <div class="container" id="login">
        <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="login">

            <h1>Register</h1>
            
            <!-- Loging form -->
                  <form action = "<?php echo base_url('user/daftar')?>" method = "post">
                  <div class="form-group">
                      <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Enter Name">
                      
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                      
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="gender" aria-describedby="emailHelp">
                        <option value = "Laki-Laki"> Laki-Laki </option>        
                        <option value = "Perempuan"> Perempuan </option>
                      </select>
                      
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Enter Address">
                      
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                      <div class="form-check">
                            
                    </label>

                      
                      <label class="forgot-password"><a href="<?php echo base_url('user/login') ?>">Login<a></label>

                    </div>
                  
                    <br>
                    <button type="submit" class="btn btn-lg btn-block btn-success">Sign up</button>
                  </form>
             <!-- End Loging form -->

          </div>
        </div>
        </div>
    </div>


  </body>
</html>