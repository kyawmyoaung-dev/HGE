<?php 
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Home Gym Equipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./css/site.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
<!-- header start  -->
<header class="sticky-top" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand hge_logo" href="#">HGE <sub>Home Gym Equipment</sub></a>
                <button class="navbar-toggler menu_toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/home.php" ?  'active' : ''); ?> " aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/information.php" ?  'active' : ''); ?> " aria-current="page" href="information.php">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/wanted.php" ?  'active' : ''); ?> " aria-current="page" href="wanted.php">Wanted</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/workshop.php" ?  'active' : ''); ?> " aria-current="page" href="workshop.php">Workshop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/gallery.php" ?  'active' : ''); ?> " aria-current="page" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/contact.php" ?  'active' : ''); ?> " aria-current="page" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($_SERVER['SCRIPT_NAME'] == "/HGE/featured.php" ?  'active' : ''); ?> " aria-current="page" href="featured.php">Featured</a>
                        </li>
                    </ul>
                    <?= isset($_SESSION['user_name']) ?  '<span class="user_name">Hello! ' .$_SESSION["user_name"].'</span>'  :  '' ?>
                    
                    <?php if(isset($_SESSION['user_name'])): ?>
                    <a class="btn btn_orange" href="logout.php">logout</a>  
                    <?php else: ?> 
                    <button class="btn btn_login" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <?php endif ?> 
                    <!-- Login Modal -->
                    <div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1"
                        aria-labelledby="loginModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow">
                                <div class="modal-header">
                                    <h3>login</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="login_form" id="login_form" onsubmit="return login_validation()" action="login.php" method="POST">
                                              
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Email</label>
                                                    <input class="form-control" type="email" name="email"
                                                        id="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="">password</label>
                                                    <input class="form-control" type="password" name="password"
                                                        id="password">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <input type="submit"   class="btn btn_orange" value="Login"> <span>Not registred? </span> <a data-bs-toggle="modal" data-bs-target="#registerModal" href="">Create an account</a>                                                    
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- Register Modal -->
                    <div class="modal fade" id="registerModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow">
                                <div class="modal-header">
                                    <h3>Register</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="login_form" id="register_form" onsubmit="return register_validation()" action="register.php" method="post">
                                              
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Name</label>
                                                    <input class="form-control" type="text" name="user_name"
                                                        id="user_name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="">email</label>
                                                    <input class="form-control" type="email" name="email"
                                                        id="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="">password</label>
                                                    <input class="form-control" type="password" name="password"
                                                        id="password">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="">confirm password</label>
                                                    <input class="form-control" type="password" name="confirm_password"
                                                        id="confirm_password">
                                                </div>
                                                <div class="mb-3">
                                                <div class="g-recaptcha" data-sitekey="6Le53mIgAAAAAIQksknNJ2kisIzZUL01HN_rLNw0"></div>
                                                </div>

                                                <div class="mb-3 d-flex align-items-center">
                                                    <input type="submit" class="btn btn_orange" value="Register"> 
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header end  -->
    <script>
         
    </script>