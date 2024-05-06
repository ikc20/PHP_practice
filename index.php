<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de gestion de notes</title>
</head>
<body>
    <h1>Ajouter une note</h1>
    <form action="add_note.php" method="post">
        <label for="note">Note :</label>
        <input type="number" id="note" name="note" required min="0" max="20">
        <button type="submit">Ajouter</button>
    </form>

    <h2>Notes enregistrées :</h2>
    <?php include 'display_notes.php'; ?>

    <?php include 'calculate_average.php'; ?>
</body>
</html>
