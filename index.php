<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Medicine Enquiry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h1>💊 Medicine Enquiry System</h1>
    <p>Search for medicines and check their details.</p>

    <form action="search.php" method="GET">
        <input type="text" name="medicine" placeholder="Enter medicine name" required>
        <button type="submit">Search</button>
    </form>

    <div class="links">
        <a href="save.php">➕ Add Medicine</a>
        <a href="view.php">📋 View Medicines</a>
    </div>
</div>

</body>
</html>