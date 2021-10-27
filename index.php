<?php

include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $fruit_name = $_POST['fruit_name'];
	 $fruit_price = $_POST['fruit_price'];
	 $fruit_quantity = $_POST['fruit_quantity'];

 $sql = "INSERT INTO fruits (fruit_name ,fruit_price,fruit_quantity )
	 VALUES ('$fruit_name','$fruit_price','$fruit_quantity')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rondina's Fruit Market</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    
    <body>

        <div class="container bg-danger text-white p-3">
            <h1 class="display-4 text-center">Rondina's Fruit Market	</h1>
        </div>
       

           <center>
                <div class="col-sm-4 bg-info text-center text-white p-sm-0">
                    <form method="post" action="index.php">
                        <div class="form-row pr-2">
					
                            <label for="fruit_name" class="col-sm-4 text-left fruit-input">Item Name : </label>
                            <input type="text" class='col-sm-7 mb-sm-2 form-control' id="fruit_name" name="fruit_name" placeholder="Item name" required>
                        </div>
                        
                        <div class="form-row pr-2">
                            <label for="fruit_price" class="col-sm-4 text-left fruit-input">Item Price : </label>
                            <input type="number" class="col-sm-7 mb-sm-2 form-control" id="fruit_price" name="fruit_price" placeholder="Item price"	required>
                        </div> 
    
                        <div class="form-row pr-2 form-group">
                            <label for="fruit_quantity" class="col-sm-4 text-left fruit-input">Quantity : </label>
							<input type="number" class="col-sm-7 mb-sm-2 form-control" id="fruit_quantity" name="fruit_quantity"placeholder="Item quantity" required>
                        </div>
                        
                        <div class="container">
						
                        <input type="submit" name="save" value="submit">

						
                    </form>


            </div>
    
        </div>
        
        <script src="app.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
