<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['subject_name'];
    $description = $_POST['description'];
    $credits = $_POST['credits'];

    $stmt = $conn->prepare("INSERT INTO subjects (subject_name, description, credits) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $description, $credits);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Subject</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Add New Subject</h1>
    <form action="create.php" method="POST">
        <label for="subject_name">Subject Name:</label><br>
        <input type="text" name="subject_name" required><br><br>
        <label for="description">Description:</label><br>
        <textarea name="description" rows="4" required></textarea><br><br>
        <label for="credits">Credits:</label><br>
        <input type="number" name="credits" min="1" required><br><br>
        <input type="submit" value="Add Subject">
    </form>
</div>
</body>
</html>