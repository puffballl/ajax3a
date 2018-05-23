<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

require 'convar.php';

$q = intval($_GET['q']);


if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM w3c_ajax_demo WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo '<table class="tabel">
<tr>
<th>naam</th>
<th>Leeftijd</th>
<th>Woonplaats</th>
<th>Baan</th>
</tr>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>