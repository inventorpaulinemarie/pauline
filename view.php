<?php 
include('db.php');
include('header.php');


// Retrieve data from the database
$sql = "SELECT * FROM affidavit";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> AFFIDAVIT </h1> ";

     echo "<a href='create.php'>CREATE USER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> ID </th> 
    <th> First Name </th> 
    <th> Middle Name</th> 
    <th> Last Name</th>
    <th> age</th> 
    <th> Contact</th>
    <th> Address </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];                

         echo "<tr>  
         <td>" . $row["id"]. "</td> 
         <td>" . $row["first_name"]. "</td> 
         <td> " . $row["middle_name"]. "</td> 
         <td>". $row["last_name"]. "</td>
         <td>" . $row["age"]. "</td>
         <td> " . $row["contact"]. "</td> 
         <td> " . $row["address"]. "</td>";

        echo "<td><a href='update.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete.php?user_id=$id'</a>DELETE</td>"; 


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  20px;
    font-family:    fantasy ;
            
}
table {
  border: 5px groove #0000ff;
}
table{
    width: 100%;
}

th{
    height: 70px;
}
</style>


