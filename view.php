<?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM medicines ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Medicines</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>📋 Available Medicines</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <th>Purpose</th>
            <th>Price</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo htmlspecialchars($row["name"]); ?></td>
            <td><?php echo htmlspecialchars($row["purpose"]); ?></td>
            <td>₹<?php echo $row["price"]; ?></td>
        </tr>

        <?php } ?>

    </table>

    <br>
    <a href="index.php">← Back to Home</a>

</div>

</body>
</html>