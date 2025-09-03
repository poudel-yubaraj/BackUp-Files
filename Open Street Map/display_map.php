<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Map</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 400px; }
    </style>
</head>
<body>
    <h2>Locations on OpenStreetMap</h2>
    <div id="map"></div>

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([0, 0], 2);

        // Add OpenStreetMap tiles to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Array to store markers
        <?php
        // Connect to MySQL database
        $conn = new mysqli("localhost", "root", "", "google");
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch coordinates from the database
        $sql = "SELECT * FROM locations";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            echo "var markers = [];"; // Initialize array
            // Add markers for each location
            while ($row = $result->fetch_assoc()) {
                echo "L.marker([" . $row['latitude'] . ", " . $row['longitude'] . "]).addTo(map);";
            }
        } else {
            echo "console.log('No locations found in the database.');";
        }

        $conn->close();
        ?>
    </script>
</body>
</html>
