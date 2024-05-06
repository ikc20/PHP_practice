<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de gestion de notes</title>
    <style>
        /* Ajoutez vos styles CSS pour le mode plein écran ici */
        .fullScreenMode {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
        }
        /* Ajoutez vos styles CSS pour le positionnement du bouton en bas ici */
        #toggleFullScreen {
            position: fixed;
            bottom: 20px;
            left: 20px;
        }
    </style>
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

    <!-- Bouton de bascule du mode plein écran -->
    <button id="toggleFullScreen">Vue Plein Écran</button>

    <script>
        // JavaScript pour la gestion du mode plein écran
        document.getElementById('toggleFullScreen').addEventListener('click', function() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
                document.body.classList.add('fullScreenMode');
            } else {
                document.exitFullscreen();
                document.body.classList.remove('fullScreenMode');
            }
        });
    </script>
</body>
</html>
