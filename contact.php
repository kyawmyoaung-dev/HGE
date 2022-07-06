<?php  include '_header.php' ?>


<!-- contact page start -->
<div class="contact_us">
        <div class="container">
            <h3 class="contact_us_title">contact us</h3>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form class="contact_us_form" action="">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input class="form-control" required name="name" id="name" type="text">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input class="form-control" required name="email" id="email" type="email">
                        </div>
                        <div class="mb-3">
                            <label for="">Message</label>
                            <textarea class="form-control" required name="message" id="message" cols="30" rows="10"></textarea>
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