<?php
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <link rel="stylesheet" type="text/css" href="contact5.css">
    
    <center><h1>Contacts</h1></center>
    <center><li><a href="contact.php">Addcontact</a></li></center>
    <?php
$name="";
$number="";
$message="";
$sql="SELECT* FROM contact";
$result= $conn->query($sql);
if(!$result){
    $errormesage="invalid  query".$conn->connect_error;

}

while($row=$result->fetch_assoc()){
    echo"
   <div class='contact'>
                <strong>$row[name]</strong>
                <p>
                    $row[number]
                    <p>
                    $row[message]
                </p>
             
          </div>
    ";
}

?>
    
</body>
</html>