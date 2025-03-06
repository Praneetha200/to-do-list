<?php
if (isset($_GET["index"])) {
    $tasks = file("task.txt", FILE_IGNORE_NEW_LINES);
    $index = $_GET["index"];

    if (isset($tasks[$index])) {
        $taskDetails = explode("|", $tasks[$index]);
        $taskDetails[1] = "done"; 
        $tasks[$index] = implode("|", $taskDetails);
        file_put_contents("task.txt", implode("\n", $tasks) . "\n");
    }
}
header("Location: index.php");
exit();
?>
