<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP to Python</title>
</head>
<body>
<h1>Welcome</h1>
<h2>Simple Calculator</h2>
<form method="POST" action="">
<label for="num1">Number 1:</label>
<input type="text" id="num1" name="num1">
<br>
<label for="num2">Number 2:</label>
<input type="text" id="num2" name="num2">
<br>
<label for="name">Your Name:</label>
<input type="text" id="name" name="name">
<br>
<label for="date">Date:</label>
<input type="text" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly>
<br>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $name = $_POST["name"];
    $date = $_POST["date"];

    if (is_numeric($num1) && is_numeric($num2) && !empty($name)) {
        $num1 = escapeshellarg($num1);
        $num2 = escapeshellarg($num2);
        $name = escapeshellarg($name);
        $date = escapeshellarg($date);

        // Prepare the command to run the Python script
        $command = escapeshellcmd("python3 sum.py $num1 $num2 $name $date");
        // Execute the Python script and capture the output
        $output = shell_exec($command);
        // Display the result
        echo "<h3>Result from Python script:</h3>";
        echo "<p>$output</p>";
    } else {
        echo "<p>Please enter valid numbers and your name.</p>";
    }
}
?>
</body>
</html>




