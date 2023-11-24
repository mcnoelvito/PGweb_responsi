<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet JS</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css">
    
    <style>
    html, body, #map {
        height: 100%;
        width: 100%;
        margin: 0px;
    }
    </style>
</head>
<body>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <div id="map"></div>

    <script>
            
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "malang_kab";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM lawang";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>" . $row["No"] . "</td>
                            <td>" . $row["Nama_Wisata"] . "</td>
                            <td>" . $row["Latitude"] . "</td>
                            <td>" . $row["Longitude"] . "</td>
                            <td>" . $row["Jenis"] . "</td>
                          </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 results</td></tr>";
                }
                ?>
    </script>
</body>
</html>