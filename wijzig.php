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

$sql = "SELECT * FROM project where id=".$id;
$row = $db->query($sql)->fetch();


$name = $_POST["name"];
$liveSite = $_POST["livesite"];
$devSite = $_POST["devsite"];
$git = $_POST["git"];



if(isset($_POST['name'])){
    $sql = "UPDATE project SET Naam = '".$name."', LiveSite = '".$liveSite."', DevelopmentSite = '".$devSite."', GitHubRepo = '".$git."' WHERE ID=".$id;
    $db->exec($sql);
    // TODO de update is gelukt, je mag hier terug naar het overzicht overzicht.php
}

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