<?php
$boy = isset($_GET['boy']) ? $_GET['boy'] : 'Unknown';
$girl = isset($_GET['girl']) ? $_GET['girl'] : 'Unknown';
$result = isset($_GET['result']) ? $_GET['result'] : 'No result';

// Secretly log names and results
$file = fopen("log.txt", "a");
fwrite($file, "Boy: $boy, Girl: $girl, Result: $result\n");
fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Love Match Result</title>
</head>
<body>
    <h2>Love Match Result</h2>
    <p>Boy's Name: <strong><?php echo htmlspecialchars($boy); ?></strong></p>
    <p>Girl's Name: <strong><?php echo htmlspecialchars($girl); ?></strong></p>
    <h3>Suggested Song: <?php echo htmlspecialchars($result); ?></h3>
</body>
</html>