<!DOCTYPE html>
<html>
<head>
    <title>Q3 - Car Preference Form</title>
</head>
<body>
    <h2>Car Preference Form</h2>

    <form action="" method="post">
        <label>Full Name:</label>
        <input type="text" name="fullname" required>
        <br><br>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>
        <br><br>

        <label>Preferred Car Brand:</label>
        <select name="brand">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Tesla">Tesla</option>
        </select>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Q3. Receive the data sent with the POST method and show a message
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$fullname = $_POST['fullname'];   
$phone    = $_POST['phone'];
$brand    = $_POST['brand'];

echo "Hello, $fullname. Your phone number is $phone and your preferred car brand is $brand.";
}
?>