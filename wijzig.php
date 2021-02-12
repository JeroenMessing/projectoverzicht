<?php 
include 'inc/menu.php';
include 'inc/common.php';
include 'inc/toevoegen.php';
include 'inc/overzicht.php';

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

 $id = $_GET['ID'];

echo '<p>'. 'het ID is '. $_GET['ID'] .'</p>';

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['Naam'];
    $livesite = $_POST['LiveSite'];
    $devsite = $_POST['DevelopmentSite'];
    $git = $_POST['DevelopmentSite'];
	
    $edit = mysqli_query($db,"update tblemp set name='$name', livesite='$livesite', devsite='$devsite', git='$git' age='$age' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<table>
    <form method="post" action="">
        <tr>
            <td> <label for="name">Naam:</label> </td>
            <td> <input type="text" id="name" name="name" value="<?php echo 'naam test (handmatig)' ?>" size="40"> </td>
        </tr>
        <tr>
            <td>  <label for="livesite">LiveSite:</label> </td>
            <td> <input type="text" id="livesite" name="livesite"  value="<?php echo $livesite['ID'] ?>" placeholder="LiveSite placeholder" size="40"> </td>
        </tr>
        <tr>
            <td> <label for="devsite">DevelopmentSite:</label> </td>
            <td> <input type="text" id="devsite" name="devsite" size="40"> </td>
        </tr>
        <tr>
            <td> <label for="git">GitHubRepo:</label> </td>
            <td> <input type="text" id="git" name="git" size="40"> </td>
        </tr>
        
        <th colspan="2"> <input type="submit" name="wijzig" value="Wijzigen"> </td>
        
    </form>


</table>

</body>
</html>