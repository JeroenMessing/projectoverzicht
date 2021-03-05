<?php 
include 'inc/menu.php';
include 'inc/common.php';
include 'inc/toevoegen.php';
// Hier halen we alle project data op
$sql = "SELECT * FROM project ORDER BY Naam ASC";
$rows = $db->query($sql)->fetchAll();
?>

<!DOCTYPE html>
<html>

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

<body>
<table style="width:30%">
    <tr>
        <th> Naam </th>
        <th> LiveSite </th>
        <th> DevelopmentSite </th>
        <th> GitHubRepo </th>
        <th> Comments </th>
        <th> Wijzig </th>
    </tr>

    <?
// hier lopen we door de rijen van de projectdata heen en tonen de velden in table rows / <td>'s
// Je mag deze tabel compleet maken en wat mooier opmaken.
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>".$row['Naam']."</td>";
    echo "<td><a href='".$row['LiveSite']."' target='_blank'>".$row['LiveSite']."</a></td>";
    echo "<td><a href='".$row['DevelopmentSite']."' target='_blank'>".$row['DevelopmentSite']."</a></td>";
    echo "<td>".$row['GitHubRepo']."</td>";
    echo "<td>".nl2br($row['Comments'])."</td>";
    echo "<td>"."<a href='wijzig.php?";
    echo "id=".$row['ID'].""; 
    echo  "'>";
    echo "<img src='/images/edit.png' alt='wijzig'> </a></td>";
    echo "</tr>"; 
}
?> 
 
</table>
</body>

</html>