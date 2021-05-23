<html>  
    <head>  
        <title>Table with database</title>
        <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>first_name</th>
<th>last_name</th>
<th>dob</th>
<th>class</th>
<th>uniform_no</th>
</tr>




<?php
$username = "sql6411807";
$password = "kyRVg9HSXx";
$database = "sql6411807";
$mysqli = new mysqli("sql6.freemysqlhosting.net", $username, $password, $database);

$query = "SELECT * FROM Students";


if ($result = $mysqli->query($query)) {
    echo "<b> <center> <strong> Database Output - Students Table </strong></center> </b> <br> <br>";

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["first_name"];
        $field3name = $row["last_name"];
        $field4name = $row["dob"];
        $field5name = $row["class"];
        $field6name = $row["uniform_no"];

        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>"
. $row["last_name"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["class"] ."</td><td>". $row["uniform_no"]. "</td></tr>";
}
echo "</table>";
    }
    else { echo "0 results"; }
$conn->close();
?>

/*freeresultset*/
$result->free();
}

</table>
</body>
</html>


