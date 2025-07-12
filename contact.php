 <?php 
 include_once "db.php";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $number = $_POST["number"];
    $message = $_POST["message"];
    
    do{
        if(empty($name) || empty($number) || empty($message)){
            echo"all feilds must be filled";
            break;
        }
        $sql = "INSERT INTO contact(name, number, message)".
        "VALUES('$name', '$number', '$message')";
        $result = $conn->query($sql);
        header('location: contacts5.php');

    }while(false);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <link rel="stylesheet" type="text/css" href="contact.css">
     <div class="container">  
      <center><h1>Contact me</h1></center>
    <center> <p> Feel free to drop your contact in the form below</p></center>
    
            <form method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name"
                    name="name"><br><br>
                    <label for="number">Number</label>
                    <input type="number" id="number" name="number"><br><br>
                    <label for="Message">Message:</label>
                    <textarea id="Message" name="message" cols="38" rows="10"></textarea><br><br>
                    <input type="submit" value="send" >
                </form>
</div>
    
</body>
</html>