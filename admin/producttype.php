<?php  include 'admin_header.php' ?>
<?php 
    
    include '../configs/db_connect.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $code = $_POST["code"];
        $description = $_POST["description"];
    
        
        $query = "INSERT INTO PRODUCTTYPES(code,description) VALUES('$code','$description')";
    
        if(mysqli_query($db_connect,$query)){
            header('location: index.php');
        }else{
            session_start();
            $_SESSION["Message"] = "Register failed. Please try again.";
            header('location: message.php');
        }
    
        mysqli_close($db_connect);
    }

   
?>

<div class="container">
    <h3>Product Type Entry</h3>
    <hr>

    <form action="producttype.php" method="POST">
        <div class="mb-3">
            <label class="form-label" for="">Code :</label>
            <input class="form-control" type="text" name="code" id="code">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Description :</label>
            <input class="form-control" type="text" name="description" id="description">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Save"> 
        </div>
    </form>
</div>

<?php  include 'admin_footer.php' ?>