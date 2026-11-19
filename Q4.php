<!DOCTYPE html>
<html>
<head>
    <title>Q4 - Terms and Conditions Form</title>
</head>
<body>
    <h2>Create Account</h2>

    <form action="" method="get">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="checkbox" name="terms" value="yes">
        <label>I agree to the terms and conditions</label>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Q4. Receive the data sent with the GET method.
// The password is received but never shown on the page.
if ($_SERVER["REQUEST_METHOD"] === "GET"){
$username = $_GET['username'];

// A checkbox is only sent when it is ticked, so isset() tells us if it was ticked
if (isset($_GET['terms'])) {
    $status = "agreed";
} else {
    $status = "not agreed";
}

echo "Welcome, $username. You have $status to the terms and conditions.";
}
?>