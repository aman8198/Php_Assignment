
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>product table</title>
</head>
<body>
 <div class="main-div">
 <h3> user table</h3>
 <div class = "centre-div">
 <div class = "table-responsive">
 <table>
 <thead>
 <tr>
 <th>name</th>
<th>address</th>
<th>email</th>
<th>phonenumber</th>
<th>operation</th>
 </tr>
 </thead>
 <tbody>
 <?php
$client1 = mysqli_connect("localhost", "root", "", "useraccounts");

$selque = "SELECT * FROM `users1`";
$query = mysqli_query($client1, $selque);
$num = mysqli_num_rows($query);

while($res=mysqli_fetch_assoc($query)){
    ?>
    <tr>
 <td><?php echo $res['name'];?> </td>
 <td><?php echo $res['address'];?>  </td>
 <td> <?php echo $res['email'];?> </td>
 <td> <?php echo $res['phonenumber'];?> </td>
 <td ><i class="fa fa-edit" aria-hidden = "true"> </i> </td>
 <td><i class="fa fa-trash" aria-hidden = "true"> </i> </td>
 
 </tr>
<?php 
}
?>


 </tbody>
 </table>
 </div>
 </div>

 </div>   
</body>
</html>