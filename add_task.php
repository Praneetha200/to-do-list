<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = trim($_POST["task"]);
    if (!empty($task)) {
        file_put_contents("task.txt", "$task\n", FILE_APPEND);
    }
}
header("Location: index.php");
exit();
?>
