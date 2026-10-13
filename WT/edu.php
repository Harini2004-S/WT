webtech exno 8 

<?php

$conn = mysqli_connect("localhost", "root", "", "college1");

if (!$conn) {
    die("Connection failed");
}

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

echo "<h2>Student Details</h2>";

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Mark<th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['mark'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);

?>