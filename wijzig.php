<?php 
include 'inc/menu.php';
include 'inc/common.php';


?>

<!DOCTYPE html>
<html>
<head>

<style>
    table, th, td {
    	border: 1px solid black;
    	border-collapse: collapse;
    }
    
    th{
    	text-align: center;
       }
 </style>

</head>
<body>

<h1>Wijzigen</h1>

<?php

 $id = $_GET['id'];

echo '<p>'. 'het ID is '. $_GET['id'] .'</p>';

$sql = "SELECT * FROM project where id=".$id;
$row = $db->query($sql)->fetch();

print_r($row);

$naam = "naam";
$livesite = "livesite";
$devsite = "devsite";
$git = "git";

// Create connection
$conn = new mysqli($naam, $livesite, $devsite, $git);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE faatbe_dev SET naam='hans' WHERE id=" .$id;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

<table>
    <form method="post" action="">
        <tr>
            <td> <label for="name">Naam:</label> </td>
            <td> <input type="text" id="name" name="name" value="<?php echo $row['Naam']?>" size="40"> </td>
        </tr>
        <tr>
            <td>  <label for="livesite">LiveSite:</label> </td>
            <td> <input type="text" id="livesite" name="livesite"  value="<?php echo $row['LiveSite']?>" placeholder="LiveSite placeholder" size="40"> </td>
        </tr>
        <tr>
            <td> <label for="devsite">DevelopmentSite:</label> </td>
            <td> <input type="text" id="devsite" name="devsite" value="<?php echo $row['DevelopmentSite']?>" size="40"> </td>
        </tr>
        <tr>
            <td> <label for="git">GitHubRepo:</label> </td>
            <td> <input type="text" id="git" name="git" value="<?php echo $row['LiveSite']?>" size="40"> </td>
        </tr>
        
        <th colspan="2"> <input type="submit" name="wijzig" value="Wijzigen"> </td>
        
    </form>


</table>

</body>
</html>