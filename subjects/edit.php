<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM subjects WHERE id = $id");
$subject = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['subject_name'];
    $description = $_POST['description'];
    $credits = $_POST['credits'];

    $stmt = $conn->prepare("UPDATE subjects SET subject_name = ?, description = ?, credits = ? WHERE id = ?");
    $stmt->bind_param("ssii", $name, $description, $credits, $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Subject</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Edit Subject</h1>
    <form action="edit.php?id=<?= $id ?>" method="POST">
        <label for="subject_name">Subject Name:</label><br>
        <input type="text" name="subject_name" value="<?= $subject['subject_name'] ?>" required><br><br>
        <label for="description">Description:</label><br>
        <textarea name="description" rows="4" required><?= $subject['description'] ?></textarea><br><br>
        <label for="credits">Credits:</label><br>
        <input type="number" name="credits" value="<?= $subject['credits'] ?>" min="1" required><br><br>
        <input type="submit" value="Update Subject">
    </form>
</div>
</body>
</html>