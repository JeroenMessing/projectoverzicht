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

<h1>Toevoegen project</h1>

<table>
    <form method="post" action="/action_page.php">
        <tr>
            <td> <label for="name">Naam:</label> </td>
            <td> <input type="text" id="name" name="name" size="40"> </td>
        </tr>
        <tr>
            <td>  <label for="livesite">LiveSite:</label> </td>
            <td> <input type="text" id="livesite" name="livesite" size="40"> </td>
        </tr>
        <tr>
            <td> <label for="devsite">DevelopmentSite:</label> </td>
            <td> <input type="text" id="devsite" name="devsite" size="40"> </td>
        </tr>
        <tr>
            <td> <label for="git">GitHubRepo:</label> </td>
            <td> <input type="text" id="git" name="git" size="40"> </td>
        </tr>
        
        <th colspan="2"> <input type="submit" value="Submit"> </td>
        
    </form>

    <?
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo 'POST VALUES'; 
            echo '<pre>'; 
            print_r($_POST); 
            echo '</pre>';
            }
    ?>

</table>

</body>
</html>