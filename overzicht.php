<?php 
include 'inc/menu.php';
include 'inc/common.php';
include 'inc/toevoegen.php';

print file_get_contents('https://www.faat.be/phpmyadmin/sql.php');


$name = $_POST['name'];
$livesite = $_POST['livesite'];
$devsite = $_POST['devsite'];
$git = $_POST['git'];

echo $page_content;
echo $responsivetable;

echo $thead;

//SELECT * FROM `project`

?>

<!DOCTYPE html>
<html>

<body>

<table style="width:30%">
    <tr>
        <th> testheader1 </th>
        <th> testheader2 </th>
    </tr>

    <tr>
        <td> test1 </td>
        <td> test2 </td>
    </tr>
</table>
</body>

</html>