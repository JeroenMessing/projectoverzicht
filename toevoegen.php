<?php 
include 'inc/menu.php';
include 'inc/common.php';
?>

<html>
    <body>
        <p> <span style="color:green"> Toevoegen gelukt. </span> </p>
    </body>
</html>

<?php
    $name = $_POST['name'];
    $livesite = $_POST['livesite'];
    $devsite = $_POST['devsite'];
    $git = $_POST['git'];
    $comments = $_POST['comments'];

    try {
        $sql = "INSERT INTO project (Naam, LiveSite, DevelopmentSite, GitHubRepo, Comments) VALUES ('$name','$livesite','$devsite', '$git', '$comments')";
        $db->exec($sql);
      } 
    catch(PDOException $e) {
        echo $sql . '<br>' . $e->getMessage();
      }
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
    <form method="post" action="">
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
        <tr>
            <td> <label for="comments">Comments:</label> </td>
            <td> <textarea id="comments" name="comments" rows="10" cols="43"><?php echo $row['Comments'] ?> </textarea> </td>
        </tr>
        <tr>
            <td></td><td> <input type="submit" name="submit" value="Submit"> </td>
        </tr>           
    </form>
</table>

</body>
</html>