<?php  include 'header.php' ?>


<div class="message">
   <?php 
    
    if(isset($_SESSION['Message'])){
        echo '<h1>'.$_SESSION['Message'].'</h1>'; // display the message
        unset($_SESSION['Message']); // clear the value so that it doesn't display again
    }
   ?>
   
</div>

<?php  include 'footer.php' ?>