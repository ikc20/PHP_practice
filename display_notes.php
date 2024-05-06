<?php
if (file_exists("notes.txt")) {
    $notes = file("notes.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (!empty($notes)) {
        echo "<ul>";
        foreach ($notes as $note) {
            echo "<li>$note</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucune note enregistrée pour le moment.</p>";
    }
} else {
    echo "<p>Aucun fichier de notes trouvé.</p>";
}
?>
