<?php  include '_header.php' ?>

<?php
    include 'configs/db_connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $query = "INSERT INTO `contactus`(`name`, `email`, `message`) 
                    VALUES ('$name','$email','$message')";
    
        if(mysqli_query($db_connect,$query)){
            //header('location: gallery.php');
        }else{
            session_start();
            $_SESSION["Message"] = "Contact us message send failed. Please try again.";
             header('location: message.php');
        }
    }
    
?>

<!-- contact page start -->
<div class="contact_us">
        <div class="container">
            <h3 class="contact_us_title">contact us</h3>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form id="contact_us_form" class="contact_us_form" onsubmit="return contact_us_validation()" action="contact.php" method="POST">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input class="form-control"   name="name" id="name" type="text">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input class="form-control"   name="email" id="email" type="email">
                        </div>
                        <div class="mb-3">
                            <label for="">Message</label>
                            <textarea class="form-control"  name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    By submitting this form you agree to our <a href="#">Privacy Policy</a>.
                                </label>
                              </div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn_orange" value="Send" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_us_address">
                        <h5>Head Quarters Address</h5>
                        <p>Shriro House 11 Chang Charn Road #06-00.</p>
                        <span><strong>email</strong> : admin@hge.com</span>
                        <span><strong>Telephone</strong> : +123456789</span>
                        <span><strong>Operating Hours</strong> :  Tuesday- Friday:   9 am to 6 pm ( Closed from 1 pm to 2 pm for lunchtime)</span>
                    </div>
                    <div class="contact_us_address">
                        <h5>Branch Address</h5>
                        <p>53 Ang Mo Kio Ave 3 AMK Hub #01-34</p>
                        <span><strong>email</strong> : branchadmin@hge.com</span>
                        <span><strong>Telephone</strong> : +123456789</span>
                        <span><strong>Operating Hours</strong> :  Tuesday- Friday:   9 am to 6 pm ( Closed from 1 pm to 2 pm for lunchtime)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact page end -->

<?php  include 'footer.php' ?>