<?php
include 'db.php';
$result = $conn->query("SELECT * FROM subjects");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Subjects</h1>
    <a href="create.php"><button>Add New Subject</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Description</th>
            <th>Credits</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['subject_name'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['credits'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?= $row['id'] ?>"><button style="background-color: red;">Delete</button></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>