<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Form</title>
</head>
<body>
    <h2>Enter Location Details</h2>
    <form action="process_location.php" method="post">
        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude" required>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude" required>

        <button type="submit">Save Location</button>
    </form>
</body>
</html>
