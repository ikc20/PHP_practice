<?php
if (file_exists("notes.txt")) {
    $notes = file("notes.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (!empty($notes)) {
        $total = array_sum($notes);
        $count = count($notes);
        $average = $count > 0 ? $total / $count : 0;
        echo "<p>Moyenne des notes : " . number_format($average, 2) . "</p>";
    }
}
?>
