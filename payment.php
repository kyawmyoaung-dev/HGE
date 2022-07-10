<?php  include '_header.php' ?>

 <!-- payment page start -->
 <div class="payment">
        <div class="container">
            <h1 class="title">Payment Process</h1>
            <form action="">
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="first_name">First Name</label>
                            <input name="first_name" id="first_name" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input name="last_name" id="last_name" class="form-control" type="text" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input name="email" id="email" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="last_name">Phone</label>
                            <input name="phone" id="phone" class="form-control" type="text" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="address_1">Address 1</label>
                            <textarea class="form-control" name="address_1" id="address_1" cols="30" rows="2"></textarea>                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="last_name">Address 2</label>
                            <textarea class="form-control" name="address_2" id="address_2" cols="30" rows="2"></textarea>                                                        
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Payment Option</label>
                            <div class="d-flex">
                                <div class="form-check me-2">
                                    <input class="form-check-input" name="paymnet_option" checked type="radio" value="credit card" id="chk_credit_card">
                                    <label class="form-check-label" for="chk_credit_card">
                                        <i class="bi bi-credit-card"></i> Credit Card
                                    </label>
                                </div>
                                <div class="form-check me-2">
                                    <input class="form-check-input" name="paymnet_option" type="radio" value="paypal" id="chk_paypal">
                                    <label class="form-check-label" for="chk_paypal">
                                        <i class="bi bi-paypal"></i> Paypal
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="card_number">Credit Card Number</label>
                            <input name="card_number" id="card_number" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label" for="expiration_date">Expiration Date</label>
                            <input name="expiration_date" id="expiration_date" class="form-control" type="date" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="order_summary">
                            <label>Order Summary</label>
                            <hr>
                            <span> <strong>Total Amount (<?php echo (isset($_POST["item_count"]) ? $_POST["item_count"] : 0)  ?> items): </strong> <?php echo '$'. (isset($_POST["total_amount"]) ? $_POST["total_amount"] : 0)  ?></span><br>
                            <span> <strong>Tax : </strong> $ 0 </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" class="btn btn_orange" value="Payment">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- payment page end -->

<?php  include 'footer.php' ?>