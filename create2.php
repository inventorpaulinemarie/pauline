<?php include('db.php');
include('header.php');
// Insert data into the database
if (isset($_POST['submit'])) {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name']; 
    $middle_name = $_POST['middle_name']; 
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    
    $sql = "INSERT INTO staff (last_name, first_name, middle_name, contact, address) VALUES ('$last_name', '$first_name', '$middle_name', '$contact', '$address')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view2.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style/style.css">
    <title></title>

</head>
<body>


    <center><h2>STAFF</h2></center>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <center>LAST NAME:<br>
      <input type="text" name="last_name"><br>
      FIRST NAME:<br>
      <input type="text" name="first_name"><br>
      MIDDLE NAME:<br>
      <input type="text" name="middle_name"><br>
      CONTACT:<br>
      <input type="text" name="contact"><br>
      ADDRRESS:<br>
      <input type="text" name="address"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view2.php">BACK </a></center> 
<?php

?>

      <style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  background:palegreen;
}  

</body>
</html>

