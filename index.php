<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Products data</title>
</head>
<body>
<div>
		<form action="product.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
				      	<h1> Products </h1>
				<p> provide the details</p>

				<hr class="mb-3">
				<label for="pname"><b>Product Name</b></label>
				<input class="form-control" type="text" id= "pname" name="pname" required>
				<label for="type"><b> Type </b></label>
				<input class="form-control" type="text" id= "type" name="type" required>
                <label for="price"><b>Price</b></label>
				<input class="form-control" type="text" id= "price" name="price" required>
                <hr class="mb-3">
                
                <input class="btn btn-primary" type="submit" id= "submit"name="submit" value="Add">
                <hr class="mb-3">
               
                <a href = "display.php"> checkform </a><br>
                <hr class="mb-3">
                <a href = "display1.php"> Registeruser|ajax </a><br>
                <hr class="mb-3">
               
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>