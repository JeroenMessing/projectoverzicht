<?php 
include 'inc/menu.php';
include 'inc/common.php';
include 'inc/toevoegen.php';

// print file_get_contents('https://www.faat.be/phpmyadmin/sql.php');


// echo $page_content;
// echo $responsivetable;

// echo $thead;

//SELECT * FROM `project`

// Hier halen we alle project data op
$sql = "SELECT * FROM project";
$rows = $db->query($sql)->fetchAll();

?>


<!DOCTYPE html>
<html>

<head>
<style>

table, th, td, tr {
 border-style:solid;
 border-width:1px;
 border-color: black;
 border-collapse: collapse;
 }

 tr:nth-child(even) {
     background-color: #f2f2f2;
    }

    th { 
        font-size: 140%;
        background-color: darkgrey;
    }
</style>
</head>

<body>
<table style="width:30%">
    <tr>
        <th> Naam </th>
        <th> <a href="https://faat.be/index.php" target="_blank">LiveSite</a> </th>
        <th> <a href="https://faat.be/index.php" target="_blank">DevelopmentSite</a> </th>
        <th> GitHubRepo </th>
    </tr>
<?
// hier lopen we door de rijen van de projectdata heen en tonen de velden in table rows / <td>'s
// Je mag deze tabel compleet maken en wat mooier opmaken.
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>".$row['Naam']."</td>";
    echo "<td>".$row['LiveSite']."</td>";
    echo "<td><a href='".$row['DevelopmentSite']."' target='_blank'>".$row['DevelopmentSite']."</a></td>";
    echo "<td>".$row['GitHubRepo']."</td>";
    echo "</tr>";
}
?>
    </tr>
</table>
</body>

</html>