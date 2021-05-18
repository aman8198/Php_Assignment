<?php
$client = mysqli_connect("localhost", "root", "", "product");
if($client == FALSE){
    die("could not connect".mysqli_connect_error());

}
$pname = mysqli_real_escape_string($client,$_REQUEST['pname']);
$type = mysqli_real_escape_string($client,$_REQUEST['type']);
$price = mysqli_real_escape_string($client,$_REQUEST['price']);
 $sql = "INSERT INTO product.product2(productname, type, price) VALUES('$pname', '$type', '$price')";
  if(mysqli_query($client, $sql)){
    echo "product inserted successfully";

}
else{
    echo "there are errors.".mysqli_connect_error($client);
}

mysqli_close($client);

?>