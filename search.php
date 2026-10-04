<?php
include "config.php";

$medicine = "";

if (isset($_GET["medicine"])) {
    $medicine = mysqli_real_escape_string($conn, $_GET["medicine"]);
}

$sql = "SELECT * FROM medicines
        WHERE name LIKE '%$medicine%'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Medicine</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>🔍 Search Results</h1>

    <?php if (mysqli_num_rows($result) > 0) { ?>

        <table>

            <tr>
                <th>Medicine</th>
                <th>Purpose</th>
                <th>Price</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?php echo htmlspecialchars($row["name"]); ?></td>
                <td><?php echo htmlspecialchars($row["purpose"]); ?></td>
                <td>₹<?php echo $row["price"]; ?></td>
            </tr>

            <?php } ?>

        </table>

    <?php } else { ?>

        <p class="message">
            No medicine found.
        </p>

    <?php } ?>

    <br>
    <a href="index.php">← Search Again</a>

</div>

</body>
</html>