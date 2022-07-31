<!-- footer start -->
<?php if(!isset($_COOKIE['accept_cookie'])){?>
        <form action="cookie.php" method="post">
            <div class="modal modal-fullscreen" data-bs-backdrop="static" id="cookie_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="text-dark fs-5">This website uses cookies to ensure you get the best experience on our website.</p>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" data-bs-dismiss="modal" name="deny" id="deny" class="btn btn-secondary" value="Decline"/>
                            <input type="submit" data-bs-dismiss="modal" name="allow" id="allow" class="btn btn_orange" value="Allow cookies"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php }?>
    
<footer class="footer">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_logo">
                        <h1>HGE <sub> Home Gym Equipment</sub></h1>                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_pages">
                        <h1>pages</h1>
                        <ul>
                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/home.php") ?  'active' : ''); ?>" href="home.php">Home</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/home.php") ?  '(You are here)' : ''); ?></b></li>
                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/information.php") ?  'active' : ''); ?>" href="information.php">Information</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/information.php") ?  '(You are here)' : ''); ?></b></li>
                           
                            <?php if(isset($_SESSION['user_name'])){ ?>
                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/gallery.php") ?  'active' : ''); ?>" href="gallery.php">Gallery</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/gallery.php") ?  '(You are here)' : ''); ?></b></li>
                            <?php }?>

                            <?php if(isset($_SESSION['user_name'])){ ?>
                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/wanted.php") ?  'active' : ''); ?>" href="wanted.php">Wanted</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/wanted.php") ?  '(You are here)' : ''); ?></b></li>
                            <?php }?>

                            <?php if(isset($_SESSION['user_name'])){ ?>
                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/featured.php") ?  'active' : ''); ?>" href="featured.php">Featured</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/featured.php") ?  '(You are here)' : ''); ?></b></li>
                            <?php }?>

                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/workshop.php") ?  'active' : ''); ?>" href="workshop.php">Workshop</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/workshop.php") ?  '(You are here)' : ''); ?></b></li>
                            <li><a class="<?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/contact.php") ?  'active' : ''); ?>" href="contact.php">Contact</a> <b> <?php echo(strtolower($_SERVER['SCRIPT_NAME']) == strtolower("/HGE/contact.php") ?  '(You are here)' : ''); ?></b></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="quick_link">
                        <h1>quick links</h1>
                        <ul>
                            <li><a href="#header">Login</a></li>
                            <li><a href="home.php#blogs_news">Blog</a></li>
                            <li><a href="home.php#booking">Booking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="social_links">
                        <h1>social links</h1>
                        <ul>
                            <li><a href=""><i class="bi bi-facebook"></i> facebook</a></li>
                            <li><a href=""><i class="bi bi-twitter"></i> twitter</a></li>
                            <li><a href=""><i class="bi bi-instagram"></i> instagram</a></li>
                            <li><a href=""><i class="bi bi-youtube"></i> youtube</a></li>
                            <li><a href=""><i class="bi bi-linkedin"></i> linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copy_right">
                        <p><strong>HGE </strong> Home Gym Equipment © 2022 All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="./js/site.js"></script>
</body>


</html>