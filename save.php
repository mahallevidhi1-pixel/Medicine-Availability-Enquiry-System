<?php
include "config.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $purpose = mysqli_real_escape_string($conn, $_POST["purpose"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);

    $sql = "INSERT INTO medicines (name, purpose, price)
            VALUES ('$name', '$purpose', '$price')";

    if (mysqli_query($conn, $sql)) {
        $message = "Medicine added successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h1>➕ Add Medicine</h1>

    <?php if ($message != "") { ?>
        <p class="message"><?php echo $message; ?></p>
    <?php } ?>

    <form method="POST">

        <input type="text" name="name"
               placeholder="Medicine Name" required>

        <input type="text" name="purpose"
               placeholder="Purpose / Uses" required>

        <input type="number" step="0.01" name="price"
               placeholder="Price" required>

        <button type="submit">Save Medicine</button>

    </form>

    <a href="index.php">← Back to Home</a>
</div>

</body>
</html>