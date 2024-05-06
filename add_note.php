<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $note = $_POST["note"];
    if (is_numeric($note) && $note >= 0 && $note <= 20) {
        $file = fopen("notes.txt", "a");
        fwrite($file, $note . PHP_EOL);
        fclose($file);
    }
}
header("Location: index.php");
exit();
?>
