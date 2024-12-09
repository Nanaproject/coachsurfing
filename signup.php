<?php
include 'connect.php';

$sql = "SELECT * FROM signup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>RegistrationType</th>
                <th>Country</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Phone"] . "</td>
                <td>" . $row["RegistrationType"] . "</td>
                <td>" . $row["Country"] . "</td>
                <td>" . $row["Username"] . "</td>
                <td>" . $row["Password"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
