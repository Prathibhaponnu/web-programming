<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "21mca034";
$password = "2584";
$dbname = "21mca034";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book_tb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Book_ID</th><th>Book_Title</th><th>Book_Author</th><th>Purchase_Date</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["book_id"]. "</td>"."<td>" . $row["book_title"]. " </td>" ."<td>" . $row["book_author"]."<td>" . $row["purchase_date"]. " </td></tr>";  }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
