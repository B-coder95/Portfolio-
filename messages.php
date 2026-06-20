<?php

$conn = new mysqli("localhost", "root", "", "portfolio");

$result = $conn->query("SELECT * FROM contact_messages ORDER BY created_at DESC");

?>

<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
</head>
<body>

<h1>Contact Messages</h1>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>