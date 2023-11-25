<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Login</title>
  
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/fav.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/custom.css" />
  <link rel="stylesheet" href="../assets/css/fontawesome.css" />
</head>

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
      
        <div class="row justify-content-center" style="width: 70%;">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card custom-border rounded-5">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/maternology.png" class="logo" width="80" alt="maternology logo" />
                </a>
                <h4 class="text-center mb-3"><b>LOGIN</b></h4>

                <?php
            if(isset($_GET['error']) && $_GET['error'] !== ""){
            ?>
            <div class="alert alert-danger d-flex"
                 role="alert">
                <div class="text-body"><i class="fas fa-exclamation-triangle text-danger"></i><strong class="text-danger"> Error:</strong> <?php print $_GET['error']?></div>
            </div>
            <?php
            }
            ?>

                <form action="../admin/checkuser" method="POST">
                  <div class="mb-3">
                    <input type="email" class="form-control border-gray rounded-4 bg-light" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter your email..." required>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control border-gray rounded-4 bg-light" name="password" id="password" placeholder="Enter your password..." required>
                  </div>
                  <div class="d-flex justify-content-center align-items-center mb-3">
                    <a class="text-main fw-bold" href="#">Forgot Password ?</a>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-bg-card w-50 py-8 fs-4 mb-3 rounded-5 btn-custom-border">LOGIN</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  