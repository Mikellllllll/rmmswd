<?php
include 'include/conn.php';

// Retrieve all data from the household_data table
$sql = "SELECT * FROM household_data";
$result = $conn->query($sql);

// Create an array to hold all the marker data
$markerData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $lat = floatval($row['lat']);
        $long = floatval($row['lon']);
        $lastName = $row['last_name'];
        $firstName = $row['first_name'];
        $middleName = $row['middle_name'];
        $extensionName = $row['extension_name'];
        $sex = $row['sexM'];
        $householdIdNumber = $row['household_id_number'];

        // Add the marker data to the array
        $markerData[] = [
            "lat" => $lat,
            "long" => $long,
            "lastName" => $lastName,
            "firstName" => $firstName,
            "middleName" => $middleName,
            "extensionName" => $extensionName,
            "sex" => $sex,
            "householdIdNumber" => $householdIdNumber
        ];
    }
}


// Encode the $markerData array as JSON
$markerDataJSON = json_encode($markerData);

$Banquero = 'Banquero';
    $Banquero_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Banquero . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Banquero_count = $row["word_count"];
    }

    $Binarsang = 'Binarsang';
    $Binarsang_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Binarsang . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Binarsang_count = $row["word_count"];
    }

    $CutogGrande = 'CutogGrande';
    $CutogGrande_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $CutogGrande . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $CutogGrande_count = $row["word_count"];
    }

    $CutogPequeno = 'Cutog Pequeno';
    $CutogPequeno_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $CutogPequeno . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $CutogPequeno_count = $row["word_count"];
    }

    $Dangan = 'Dangan';
    $Dangan_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Dangan . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Dangan_count = $row["word_count"];
    }

    $District01 = 'District 01';
    $District01_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $District01 . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $District01_count = $row["word_count"];
    }
    
    $District02 = 'District 02';
    $District02_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $District02 . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $District02_count = $row["word_count"];
    }

    $LabinabGrande = 'Labinab Grande';
    $LabinabGrande_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $LabinabGrande . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $LabinabGrande_count = $row["word_count"];
    }

    $LabinabPequeno = 'Labinab Pequeno';
    $LabinabPequeno_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $LabinabPequeno . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $LabinabPequeno_count = $row["word_count"];
    }

    $MallalatangGrande = 'Mallalatang Grande';
    $MallalatangGrande_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $MallalatangGrande . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $MallalatangGrande_count = $row["word_count"];
    }

    $MallalatangTunggui = 'Mallalatang Tunggui';
    $MallalatangTunggui_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $MallalatangTunggui . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $MallalatangTunggui_count = $row["word_count"];
    }

    $NapaccuGrande = 'Napaccu Grande';
    $NapaccuGrande_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $NapaccuGrande . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $NapaccuGrande_count = $row["word_count"];
    }

    $NapaccuPequeno = 'Napaccu Pequeno';
    $NapaccuPequeno_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $NapaccuPequeno . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $NapaccuPequeno_count = $row["word_count"];
    }

    $Salucong = 'Salucong';
    $Salucong_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Salucong . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Salucong_count = $row["word_count"];
    }

    $Santor = 'Santor';
    $Santor_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Santor . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Santor_count = $row["word_count"];
    }

    $Sinippil = 'Sinippil';
    $Sinippil_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Sinippil . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Sinippil_count = $row["word_count"];
    }

    $Tallungan = 'Tallungan';
    $Tallungan_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Tallungan . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Tallungan_count = $row["word_count"];
    }

    $Turod = 'Turod';
    $Turod_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Turod . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Turod_count = $row["word_count"];
    }

    $Villador = 'Villador';
    $Villador_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Villador . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Villador_count = $row["word_count"];
    }

    $Santiago = 'Santiago';
    $Santiago_count = 0;

    $sql = "SELECT COUNT(*) AS word_count FROM  household_data WHERE barangay = '" . $Santiago . "'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $Santiago_count = $row["word_count"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<?php
include "function/out.php";
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Add Bootstrap CSS and responsive meta tag -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  

    <style>
body {
    background-color: #f4f4f4;
    margin: 0;
    font-family: 'Helvetica', sans-serif;
}




.form-container {
        position: relative;
    }

    #button1,
    #button2 {
    position: absolute;
    top: -430px;
    left: -600px;
    padding: 8px;
    width: 200px;
    background-color:  #3498db; /* Default background color for the switch */
    color: #333; /* Text color */
    border: none;
    border-radius: 20px; /* Adjust the border-radius to make it more rounded */
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition effect */
    transform: translate(-50%, -50%);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow for a subtle lift */
}

#button2 {
    left: -150px; /* Position the second button to the right of the first button */
    transform: translate(-150%, -50%);
    background-color: white;
}

    .form-container {
            max-width: 1500px; /* Adjust the maximum width for the container */
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ced4da; /* Light gray border */
            border-radius: 5px; /* Slightly rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
            padding: 20px;
        }

        #map {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

.navbar {
            background-color: #2c3e50;
            /* Darker background color for a professional look */
            padding: 20px 35px;
            /* Reduced padding for a sleeker appearance */
            color: #ecf0f1;
            /* Light text color for better contrast */
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Subtle box shadow for depth */
        }

        .navbar a {
            color: #ecf0f1;
            /* Light text color */
            text-decoration: none;
            padding: 10px;
            margin: 0 0px;
            /* Added spacing between links */
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar a:hover {
            background-color: #3498db;
            /* A slightly lighter shade than the main color */
            color: #fff;
            /* White text color on hover */
        }


    .sidebar {
    background-color: #2c3e50;
    height: 100vh;
    color: gold;
    padding: 20px;
}

.content {
    background-color: #ecf0f1;
    padding: 20px;
}

.list-group-item {
    background-color: #3498db;
    color: gold;
    border: none;
}

.list-group-item:hover {
    background-color: #2980b9;
}

h1 {
    color: gold;
}

p {
    color: #555;
}

.btn-primary {
    background-color: #e74c3c;
    color: gold;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #c0392b;
}

.legend {
            position: fixed;
            bottom: 65px;
            right: 50px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 10px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        }

        .legend-text {
            color: #333;
            font-size: 14px;
        }

        .legend-color-green {
            background-color: #6dbb63; /* Green color */
        }

        .legend-color-yellow {
            background-color: #fdd835; /* Yellow color */
        }

        .legend-color-red {
            background-color: #e74c3c; /* Red color */
        }

      
/* Adjustments for responsive layout */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar a {
        margin: 5px 0;
    }

    #button1 {
  font-size: 14px;
  padding: 10px;
 
}

.icon {
  margin-right: 5px;
  color: #ced4da;
}

#button2 {
  font-size: 14px;
  padding: 10px;
}

.icon {
  margin-right: 5px;
  color: #ecf0f1;
}
}
</style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <img src="image/mercedes.png" alt="Logo" width="60px">
        <a class="navbar-brand text-white" href="#">Municipal Social Welfare Development</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="dashboard.php">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link text-white" href="visualization.php">
            <i class="fas fa-chart-bar"></i> Graph
        </a>
    </li>
    <li class="nav-item active">
                        <a class="nav-link text-white" href="report.php">
                            <i class="fas fa-chart-pie"></i> Reports
                        </a>
                    </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="member.php">
                        <i class="fas fa-list"></i> List of Beneficiary
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="add.php">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </li>
                <li class="nav-item active">
    <a class="nav-link text-white" href="user.php">
        <i class="fas fa-user"></i> Create User
    </a>
</li>
                <li class="nav-item active">
    <a class="nav-link text-white" href="manage_user.php">
        <i class="fas fa-users"></i> Manage User
    </a>
</li>
                
                <li class="nav-item">
                    <a class="nav-link text-white" style="cursor: pointer;" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    </div>

    <div class="form-container">
        <!-- Add the map container here -->
        <div id="map" style="height: 600px;"></div>
    </div>
    </div>
    <div class="legend">
        <div class="legend-item">
            <div class="legend-color legend-color-green"></div>
            <div class="legend-text">Low Number of Beneficiary</div>
        </div>
        <div class="legend-item">
            <div class="legend-color legend-color-yellow"></div>
            <div class="legend-text">Medium Number of Beneficiary</div>
        </div>
        <div class="legend-item">
            <div class="legend-color legend-color-red"></div>
            <div class="legend-text">High Number of Beneficiary</div>
        </div>

         <button id="button1">
  <span class="icon">&#128506;</span> Map
</button>

<button id="button2">
  <span class="icon">&#128205;</span> Markers
</button>
    </div>

    <script>
    var button1 = document.getElementById('button1');
    var button2 = document.getElementById('button2');

    // Add click event listeners to the buttons
    button1.addEventListener('click', function() {
        // Redirect to dashboard.php when Button 1 is clicked
        window.location.href = 'dashboard.php';
    });

    button2.addEventListener('click', function() {
        // Redirect to markers.php when Button 2 is clicked
        window.location.href = 'markers.php';
    });
</script>

        <script>
            // Function to toggle the sidebar
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');

                sidebar.style.zIndex = '9999';


                sidebar.classList.toggle('active');
            }

            // Initialize the map
            function initializeMap() {
                // Create the map
                var map = L.map('map').setView([16.9961, 121.818], 13);
                var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                })
                osm.addTo(map);



                /*===================================================
                                     TILE LAYER               
                ===================================================*/
                var CartoDB_VoyagerLabelsUnder = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}{r}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                    subdomains: 'abcd',
                    maxZoom: 20
                });
                CartoDB_VoyagerLabelsUnder.addTo(map);

                //google map layer
                googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                    maxZoom: 20,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                });
                googleStreets.addTo(map);

                //satelite layer
                googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                    maxZoom: 20,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                });
                googleSat.addTo(map);

                //hybrid layer
                googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                    maxZoom: 20,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                });
                googleHybrid.addTo(map);






                /*===================================================
                                      LAYER CONTROL               
                ===================================================*/

                var baseMaps = {
                    "Carto": CartoDB_VoyagerLabelsUnder,
                    "OpenStreetMap": osm,
                    "Google Map": googleStreets,
                    "Google Hybrid": googleHybrid,
                    "Satellite": googleSat
                };
                L.control.layers(baseMaps).addTo(map);

               
var mercedesJSON = {
    "type": "FeatureCollection",
    "name": "mer        cedes",
    "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
    "features": [

        { "type": "Feature", "properties": { "Barangay": "<?= $Banquero_count?>", "Bgy_Name": "Banquero: Number of Benneficiary: <?= $Banquero_count?>"}, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.784682366000084, 17.030230900000049], [121.784895991000099, 17.030234999000072], [121.784996474000081, 17.030232095000031], [121.785067611000045, 17.030218521000052], [121.785109713000111, 17.030187997000041], [121.785131254000021, 17.03010548900005], [121.785185491000107, 17.030045607000034], [121.785256907000075, 17.029957509000042], [121.785398494000106, 17.029895862000046], [121.785621917000071, 17.029757457000073], [121.785823109000034, 17.029683268000042], [121.785993579000092, 17.029601233000051], [121.786166144000049, 17.029488659000037], [121.78643050900007, 17.029265790000068], [121.786596197000108, 17.029153658000041], [121.786683424000103, 17.029115988000058], [121.786765504000073, 17.029104719000031], [121.786827068000093, 17.029095301000041], [121.786878430000115, 17.029054619000021], [121.786896534000107, 17.029004111000063], [121.786913098000014, 17.028922051000052], [121.786977937000074, 17.028877851000061], [121.78704648300004, 17.028851228000065], [121.787122956000076, 17.028796078000028], [121.787142886000083, 17.028724128000022], [121.787126712000031, 17.028644087000032], [121.787162273000035, 17.02854848100003], [121.787220029000082, 17.02848946000006], [121.787279045000105, 17.028425425000023], [121.787335047000056, 17.028425431000073], [121.787428048000038, 17.028487992000066], [121.787519828000086, 17.028546873000039], [121.787627808000025, 17.028570468000055], [121.787721421000015, 17.028600346000076], [121.787813053000036, 17.028590744000041], [121.787887105000095, 17.028547053000068], [121.787942103000091, 17.028475609000054], [121.787930396000093, 17.028370238000036], [121.787961931000041, 17.028275872000052], [121.788011658000073, 17.028261644000054], [121.788084486000116, 17.028280644000063], [121.788158054000064, 17.028297380000026], [121.788226933000033, 17.028249861000063], [121.788263123000092, 17.028184707000037], [121.788304863, 17.028114881000022], [121.788336426000114, 17.028030397000066], [121.788317922000033, 17.027979414000072], [121.788249310000083, 17.027974721000078], [121.788165572000025, 17.027967316000058], [121.788155165000035, 17.027913440000077], [121.788167609000084, 17.027844925000068], [121.788248038, 17.027822059000073], [121.788393567000071, 17.027785627000071], [121.788497201000041, 17.027752122000038], [121.788588555000047, 17.027695159000075], [121.788626577000059, 17.027637277000053], [121.788667623000038, 17.027611355000033], [121.788760377000017, 17.02762341600004], [121.78880837600002, 17.027589152000076], [121.788866101000053, 17.027548767000042], [121.788974830000029, 17.027533514000027], [121.789027900000065, 17.027466356000048], [121.789058425, 17.02739693500007], [121.78902202800009, 17.02734537200007], [121.788970769000116, 17.027320327000041], [121.788950045000092, 17.027227617000051], [121.78891683300003, 17.027105254000048], [121.788873795000086, 17.027007394000066], [121.788872322000088, 17.026899021000077], [121.788886818000037, 17.026832869000032], [121.788924437000105, 17.026808838000022], [121.788965149000092, 17.026794126000027], [121.789001016000043, 17.02680328100007], [121.789062201000093, 17.02687775000004], [121.789097647000062, 17.026939611000046], [121.789144583000052, 17.02694652100007], [121.789215019000039, 17.026934396000058], [121.789259646000119, 17.026907687000062], [121.789347735000092, 17.026888432000078], [121.789452003000065, 17.02688364100004], [121.78950387000009, 17.026805818000071], [121.789494234000017, 17.026736787000061], [121.789462832000027, 17.02661286600005], [121.789401145000056, 17.026528748000032], [121.789345006000076, 17.026449607000075], [121.789349226000013, 17.026351444000056], [121.789403623000112, 17.02629722100005], [121.789459179000119, 17.026268711000057], [121.7895233160001, 17.02620175800007], [121.789572379000106, 17.026138590000073], [121.789613546000055, 17.026082428000052], [121.78968299600001, 17.026066871000069], [121.789757037000072, 17.026060030000053], [121.789779887, 17.026025825000033], [121.78976152000007, 17.025932903000069], [121.789774689000069, 17.02581265300006], [121.789838326000108, 17.025749907000034], [121.789925571000026, 17.025742217000072], [121.789977456000088, 17.025774762000026], [121.790008234000084, 17.025859530000048], [121.789977579000038, 17.025941443000022], [121.79001151500006, 17.026046733000044], [121.790097976000084, 17.026130143000046], [121.790181547000088, 17.026189888000033], [121.790282562000016, 17.026208423000071], [121.790350457000045, 17.026196326000047], [121.790371771000082, 17.026136520000023], [121.790348705000042, 17.026036945000044], [121.790343863000089, 17.025926444000049], [121.790382007000062, 17.025828984000043], [121.790503821000016, 17.025796858000035], [121.79061816400008, 17.025814328000024], [121.790795145000061, 17.025939022000045], [121.790893133000054, 17.026093025000023], [121.790935908000051, 17.026245919000075], [121.790897165000047, 17.026373870000043], [121.790791618000071, 17.026484411000069], [121.790677910000113, 17.026584011000068], [121.790673927000057, 17.026682049000044], [121.790717186000052, 17.026759985000069], [121.790836101000082, 17.026808835000054], [121.791005932000076, 17.026842643000066], [121.791133967000064, 17.026820360000045], [121.791253002000076, 17.026738895000051], [121.791326780000077, 17.026700352000034], [121.791462730000035, 17.026679752000064], [121.791578737, 17.026678645000061], [121.791698635000103, 17.026699891000078], [121.79260540100006, 17.026469380000037], [121.798530444000107, 17.021572519000074], [121.798927719000062, 17.01951570600005], [121.798290451000071, 17.018445149000058], [121.797992086000022, 17.01799389200005], [121.797747095000091, 17.017605417000027], [121.796240517000115, 17.016901524000048], [121.795190852000019, 17.01713615500006], [121.79431407300001, 17.016987967000034], [121.793708972000104, 17.01686447700007], [121.793005079000068, 17.016654544000062], [121.792597562000083, 17.016444611000054], [121.791930716000024, 17.01641991300005], [121.79067580100002, 17.015916180000033], [121.789407514000118, 17.015368156000022], [121.788742764000062, 17.014380397000025], [121.788554035000061, 17.013898090000055], [121.78777815, 17.012514078000038], [121.787484572000039, 17.011549464000041], [121.786929880000116, 17.010435819000065], [121.785553088000029, 17.009876890000044], [121.784682720000092, 17.010101635000069], [121.78322275000005, 17.010140568000054], [121.781587583000032, 17.010354697000025], [121.780341742000019, 17.010354697000025], [121.779115367000031, 17.01066615700006], [121.77798632300005, 17.011036016000048], [121.776506887000096, 17.011697869000045], [121.774910653, 17.011970397000027], [121.774786117000076, 17.011970476000045], [121.773801075000051, 17.011970397000027], [121.772380038000051, 17.011970397000027], [121.771426191000046, 17.011697869000045], [121.770569675000047, 17.011289077000072], [121.769265435000079, 17.010919218000026], [121.772639023000011, 17.02616125000003], [121.772931128000096, 17.027304260000051], [121.772893243000112, 17.027986186000078], [121.773120552000023, 17.02840291800004], [121.773214980000034, 17.029732513000056], [121.778223202000049, 17.028333157000077], [121.780064460000062, 17.02803855600007], [121.780788609000069, 17.027991013000076], [121.780993927000054, 17.028196330000071], [121.781265476000044, 17.028421518000073], [121.781411185000024, 17.028507619000038], [121.781503910000083, 17.028640082000038], [121.781662865000044, 17.028779168000028], [121.781815198000118, 17.028918254000075], [121.781815198000118, 17.029103703000033], [121.781828444000098, 17.02926928100004], [121.782013892, 17.029441483000028], [121.782205964000013, 17.029600439000035], [121.782431151000083, 17.029819003000057], [121.782623223000087, 17.029911727000069], [121.782802048, 17.030050814000049], [121.782894772000077, 17.030229639000027], [121.783047105000037, 17.030203146000076], [121.783285538000086, 17.030216393000046], [121.783464363, 17.030203146000076], [121.783669681000106, 17.030262755000024], [121.783901492000041, 17.030262755000024], [121.784106809000036, 17.030189900000039], [121.78429225800005, 17.030269378000071], [121.7843982280001, 17.030242885000064], [121.784484329000065, 17.030117045000054], [121.784643285000016, 17.030156784000042], [121.784682366000084, 17.030230900000049]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Binarsang_count?>","Bgy_Name": "Binarsang: Number of Benneficiary: <?= $Binarsang_count?>"  }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.744103144000064, 17.005318310000064], [121.741253479000079, 17.007426599000041], [121.739886567000099, 17.007449767000026], [121.738797671000043, 17.007403431000057], [121.737940454000068, 17.006870566000032], [121.737546598000108, 17.006314534000069], [121.737175910000019, 17.005549990000077], [121.736550374000103, 17.005086630000051], [121.735554149000109, 17.004345253000054], [121.734557925000104, 17.004136741000025], [121.733561701000099, 17.00425258100006], [121.732287460000066, 17.004530598000031], [121.731453412000064, 17.004553766000072], [121.730480356000044, 17.004715942000075], [121.729854819000025, 17.004715942000075], [121.729298787000062, 17.00466960600005], [121.730520922000096, 17.008846133000077], [121.730947085000025, 17.009921747000078], [121.730932113000108, 17.010999752000032], [121.730902168000057, 17.012407147000033], [121.730932113000108, 17.013305484000057], [121.730922480000118, 17.016058761000068], [121.730841492000081, 17.018083392000051], [121.730818633000013, 17.018738683000038], [121.730849112000101, 17.019759718000046], [121.730175837000047, 17.023630085000036], [121.730133712000111, 17.023884234000036], [121.731801286000064, 17.024567125000033], [121.735681416000034, 17.02463053200006], [121.738074651000034, 17.025014352000028], [121.739745400000061, 17.026481902000057], [121.741311293000081, 17.021652596000024], [121.742385345000116, 17.018210313000054], [121.742990595000038, 17.011236867000036], [121.744103144000064, 17.005318310000064]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $CutogGrande_count?>","Bgy_Name": "Cutog Grande: Number of Benneficiary: <?= $CutogGrande_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.757769769000106, 16.986237191000043], [121.756799595000075, 16.981737026000076], [121.752360917000033, 16.980528138000068], [121.752080471000113, 16.982351753000046], [121.751635236000084, 16.98418287100003], [121.751572431000113, 16.986004212000068], [121.751716911000017, 16.988586353000073], [121.750837169000079, 16.99983431000004], [121.748337980000088, 17.001862440000025], [121.747863711000036, 17.002260038000031], [121.746674793000011, 17.004993958000057], [121.747022313000116, 17.005758502000049], [121.748006248000024, 17.006517978000034], [121.749146004000067, 17.007293982000022], [121.750576763000026, 17.007972986000027], [121.751862021000079, 17.008142737000071], [121.75307452800007, 17.008191238000052], [121.754842672000109, 16.999452833000078], [121.756105001000037, 16.991601421000041], [121.756201982000107, 16.990994640000054], [121.756496097000081, 16.989154437000025], [121.75687378300006, 16.988860412000065], [121.756695645000036, 16.98883300600005], [121.7566362660001, 16.988718815000027], [121.75668651, 16.988129588000049], [121.756727619000117, 16.987736770000026], [121.756814404000011, 16.987581470000066], [121.757700527000111, 16.986302530000046], [121.757769769000106, 16.986237191000043]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $CutogPequeno_count?>","Bgy_Name": "Cutog Pequeno: Number of Benneficiary: <?= $CutogPequeno_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.746674793000011, 17.004993958000057], [121.747863711000036, 17.002260038000031], [121.748337980000088, 17.001862440000025], [121.750837169000079, 16.99983431000004], [121.751716911000017, 16.988586353000073], [121.751572431000113, 16.986004212000068], [121.751635236000084, 16.98418287100003], [121.752080471000113, 16.982351753000046], [121.752360917000033, 16.980528138000068], [121.748767852000014, 16.981162378000022], [121.743144797000014, 16.982155052000053], [121.743156579000015, 16.983177993000027], [121.743627616000026, 16.985030737000045], [121.744067250000057, 16.985941407000041], [121.744318469000063, 16.986600858000031], [121.744915115000026, 16.98779415100006], [121.745323347000067, 16.988987443000042], [121.745556094000108, 16.990768966000076], [121.744110653, 17.000980800000036], [121.744103144000064, 17.005318310000064], [121.744844521000118, 17.004785446000028], [121.745354217000113, 17.004808614000069], [121.746674793000011, 17.004993958000057]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Dangan_count?>","Bgy_Name": "Dangan: Number of Benneficiary: <?= $Dangan_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.778168065000045, 16.993976316000044], [121.769340476000025, 16.988055111000051], [121.767120472000101, 16.987335170000051], [121.765457468000022, 16.986607225000057], [121.757769769000106, 16.986237191000043], [121.757700527000111, 16.986302530000046], [121.756814404000011, 16.987581470000066], [121.756727619000117, 16.987736770000026], [121.75668651, 16.988129588000049], [121.7566362660001, 16.988718815000027], [121.756695645000036, 16.98883300600005], [121.75687378300006, 16.988860412000065], [121.756496097000081, 16.989154437000025], [121.756201982000107, 16.990994640000054], [121.756105001000037, 16.991601421000041], [121.754842672000109, 16.999452833000078], [121.75307452800007, 17.008191238000052], [121.754772039000045, 17.008288238000034], [121.756033046000084, 17.00855499000005], [121.757003052000073, 17.009549246000063], [121.758215559000064, 17.009621996000078], [121.759816069000067, 17.009452245000034], [121.761077077000095, 17.009015743000077], [121.762216834000014, 17.00855499000005], [121.763817343000028, 17.008530740000026], [121.765369353000096, 17.008506490000059], [121.766072607000069, 17.009136993000027], [121.767891368000051, 17.01027675000006], [121.769265435000079, 17.010919218000026], [121.770639790000018, 17.008384804000059], [121.775261331000024, 16.999545983000075], [121.776576379000062, 16.997030919000053], [121.776929198000062, 16.996356143000071], [121.778168065000045, 16.993976316000044]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $District01_count?>","Bgy_Name": "District I (Pob.): Number of Benneficiary: <?= $District01_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.830515084000012, 16.986482122000041], [121.830732806000015, 16.983603348000031], [121.831119868000087, 16.980869723000069], [121.83127459800005, 16.98010563400004], [121.831359826000039, 16.979849950000073], [121.831627887000082, 16.978789264000056], [121.832084265000049, 16.977420946000052], [121.832510406000097, 16.976227751000067], [121.832708633000038, 16.975347610000028], [121.832787773000064, 16.974840034000067], [121.832702543000096, 16.974251370000047], [121.832744787000024, 16.973807808000061], [121.832787031000066, 16.97313190400007], [121.832977129000028, 16.972371513000041], [121.832956007, 16.971843463000027], [121.832913763000079, 16.971294291000049], [121.832554689000062, 16.970639509000023], [121.832421049000118, 16.970321821000027], [121.832266814000036, 16.970095171000025], [121.832103010000083, 16.96996776800006], [121.830672831000015, 16.969149714000025], [121.82925922700008, 16.968964338000035], [121.826479393000113, 16.975032205000048], [121.826590153000097, 16.976306796000074], [121.826893460000065, 16.976852749000045], [121.826994563000085, 16.977358260000074], [121.826933901000075, 16.977985095000065], [121.826731697000014, 16.978672591000077], [121.826408169000047, 16.978773693000051], [121.826367728000037, 16.979178103000038], [121.826203449000104, 16.980611146000058], [121.826093942000057, 16.983892903000026], [121.826129686000058, 16.984693571000037], [121.826171480000085, 16.985676138000031], [121.826202660000035, 16.987028502000044], [121.826195776000077, 16.987236659000075], [121.826028209000015, 16.99187242000005], [121.826224922000051, 16.99421327500005], [121.831543884000098, 16.994387667000069], [121.830829572000084, 16.99153812000003], [121.830539275000092, 16.98928832200005], [121.830532704, 16.988526089000061], [121.830515084000012, 16.986482122000041]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $District02_count?>","Bgy_Name": "District II (Pob.): Number of Benneficiary: <?= $District02_count?> " }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.826224922000051, 16.99421327500005], [121.826028209000015, 16.99187242000005], [121.826195776000077, 16.987236659000075], [121.826202660000035, 16.987028502000044], [121.826171480000085, 16.985676138000031], [121.826129686000058, 16.984693571000037], [121.826093942000057, 16.983892903000026], [121.826203449000104, 16.980611146000058], [121.826367728000037, 16.979178103000038], [121.826408169000047, 16.978773693000051], [121.826731697000014, 16.978672591000077], [121.826933901000075, 16.977985095000065], [121.826994563000085, 16.977358260000074], [121.826893460000065, 16.976852749000045], [121.826590153000097, 16.976306796000074], [121.826479393000113, 16.975032205000048], [121.82925922700008, 16.968964338000035], [121.826111236000088, 16.970000527000025], [121.820771575000094, 16.973636052000074], [121.820517349000056, 16.978014865000034], [121.820610492000014, 16.978377580000029], [121.820804235000082, 16.979046874000062], [121.820786622000014, 16.980121268000062], [121.820663331000105, 16.980420689000027], [121.820502606000105, 16.980526375000068], [121.820486699000071, 16.985678492000034], [121.821183809000104, 16.990315292000048], [121.822221895000098, 16.99187242000005], [121.823565441000028, 16.99425687300004], [121.826224922000051, 16.99421327500005]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $LabinabGrande_count?>","Bgy_Name": "Labinab Grande: Number of Benneficiary: <?= $LabinabGrande_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.820261066000057, 16.992449135000072], [121.817172743000015, 16.989034840000045], [121.815161535000016, 16.983603223000046], [121.814899763000085, 16.982780512000033], [121.814413617000014, 16.981209884000066], [121.81403965700008, 16.980461966000064], [121.8137404900001, 16.979377484000054], [121.8137404900001, 16.978405190000046], [121.813658961000101, 16.977066627000056], [121.812625479000076, 16.977379803000076], [121.811654633000103, 16.97766166200006], [121.810996962000104, 16.977849568000067], [121.809556352000072, 16.978225379000037], [121.808710776000112, 16.978256697000063], [121.806897038000102, 16.982182178000073], [121.806597870000019, 16.983117076000042], [121.806710058000021, 16.983864994000044], [121.807158809000043, 16.985248643000034], [121.807494218000102, 16.986672462000058], [121.80953751100003, 16.98796296300003], [121.811306964000096, 16.98952900200004], [121.814474199000074, 16.991062069000066], [121.81577209000011, 16.991521753000029], [121.81602806, 16.991533129000061], [121.817773866000039, 16.992268973000023], [121.818503731000078, 16.992616800000064], [121.818646283000021, 16.992719437000062], [121.819338323000011, 16.993544892000045], [121.820261066000057, 16.992449135000072]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $LabinabPequeno_count?>","Bgy_Name": "Labinab Pequeno: Number of Benneficiary: <?= $LabinabPequeno_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.820771575000094, 16.973636052000074], [121.819218891000105, 16.974678650000044], [121.817456764000099, 16.975635566000051], [121.816173095000067, 16.976254061000077], [121.815087812000115, 16.976779198000031], [121.813658961000101, 16.977066627000056], [121.8137404900001, 16.978405190000046], [121.8137404900001, 16.979377484000054], [121.81403965700008, 16.980461966000064], [121.814413617000014, 16.981209884000066], [121.814899763000085, 16.982780512000033], [121.815161535000016, 16.983603223000046], [121.817172743000015, 16.989034840000045], [121.820261066000057, 16.992449135000072], [121.823565441000028, 16.99425687300004], [121.822221895000098, 16.99187242000005], [121.821183809000104, 16.990315292000048], [121.820486699000071, 16.985678492000034], [121.820502606000105, 16.980526375000068], [121.820663331000105, 16.980420689000027], [121.820786622000014, 16.980121268000062], [121.820804235000082, 16.979046874000062], [121.820610492000014, 16.978377580000029], [121.820517349000056, 16.978014865000034], [121.820771575000094, 16.973636052000074]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $MallalatangGrande_count?>","Bgy_Name": "Mallalatang Grande: Number of Benneficiary: <?= $MallalatangGrande_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.803651865, 17.00640295200003], [121.802178444000106, 17.005464622000034], [121.801874957000109, 17.003380114000038], [121.798765281000101, 17.002489066000066], [121.792703763000077, 17.002839427000026], [121.791478341000015, 17.005002882000042], [121.79091552400007, 17.009313841000051], [121.787484572000039, 17.011549464000041], [121.78777815, 17.012514078000038], [121.788554035000061, 17.013898090000055], [121.788742764000062, 17.014380397000025], [121.789407514000118, 17.015368156000022], [121.79067580100002, 17.015916180000033], [121.791930716000024, 17.01641991300005], [121.792597562000083, 17.016444611000054], [121.793005079000068, 17.016654544000062], [121.793708972000104, 17.01686447700007], [121.79431407300001, 17.016987967000034], [121.795190852000019, 17.01713615500006], [121.796240517000115, 17.016901524000048], [121.797747095000091, 17.017605417000027], [121.797992086000022, 17.01799389200005], [121.798290451000071, 17.018445149000058], [121.798927719000062, 17.01951570600005], [121.802223661000085, 17.015455226000029], [121.802662730000065, 17.012672328000065], [121.803651865, 17.00640295200003]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $MallalatangTunggui_count?>","Bgy_Name": "Mallalatang Tungui: Number of Benneficiary: <?= $MallalatangTunggui_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.809940692000055, 17.005583220000062], [121.803651865, 17.00640295200003], [121.802662730000065, 17.012672328000065], [121.802223661000085, 17.015455226000029], [121.798927719000062, 17.01951570600005], [121.798530444000107, 17.021572519000074], [121.808016518000045, 17.013719220000041], [121.809940692000055, 17.005583220000062]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $NapaccuGrande_count?>","Bgy_Name": "Napaccu Grande: Number of Benneficiary: <?= $NapaccuGrande_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.806597870000019, 16.983117076000042], [121.806897038000102, 16.982182178000073], [121.808710776000112, 16.978256697000063], [121.807211192000068, 16.978036179000071], [121.806245331000014, 16.978036179000071], [121.805403298000101, 16.977937117000067], [121.804486967000116, 16.977887585000076], [121.803733371000021, 16.977707492000036], [121.803202209, 16.977645979000044], [121.802391107000062, 16.977572243000054], [121.801174454000034, 16.977387901000043], [121.799404778000053, 16.97685331100007], [121.797874745000058, 16.976208117000056], [121.796381580000116, 16.975581356000077], [121.795349269000099, 16.974843991000057], [121.794298523000066, 16.974143494000032], [121.791680856000085, 16.977866351000046], [121.790344788000084, 16.979570989000024], [121.788916578000112, 16.980446344000029], [121.787855902000047, 16.982355383000026], [121.786582065000061, 16.983556429000032], [121.785308228000076, 16.984466313000041], [121.783242458000018, 16.984748198000034], [121.779342497000016, 16.991782815000022], [121.784068983000111, 16.995366912000065], [121.788854945000026, 16.996224160000054], [121.789987435000057, 16.996446728000024], [121.790371124000103, 16.996482273000026], [121.791733826000041, 16.996591020000039], [121.796857334000038, 16.996873858000072], [121.797898468000085, 16.996927952000021], [121.798069416000089, 16.996992115000069], [121.798185342000011, 16.997139298000036], [121.797719351000069, 16.989035005000062], [121.799642230000018, 16.986033957000075], [121.800772856000094, 16.984844251000027], [121.802671299000053, 16.984612912000046], [121.804840262000084, 16.983864994000044], [121.806597870000019, 16.983117076000042]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $NapaccuPequeno_count?>","Bgy_Name": "Napaccu Pequeno: Number of Benneficiary: <?= $NapaccuPequeno_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.779342497000016, 16.991782815000022], [121.783242458000018, 16.984748198000034], [121.785308228000076, 16.984466313000041], [121.786582065000061, 16.983556429000032], [121.787855902000047, 16.982355383000026], [121.788916578000112, 16.980446344000029], [121.790344788000084, 16.979570989000024], [121.791680856000085, 16.977866351000046], [121.794298523000066, 16.974143494000032], [121.792441332000067, 16.973931505000053], [121.791379831000086, 16.975565164000045], [121.789659319000066, 16.975393112000063], [121.787365302000012, 16.975393112000063], [121.787021200000027, 16.973787301000073], [121.784727183000086, 16.973672600000043], [121.783694876000027, 16.97436080500006], [121.781917013000111, 16.974131403000058], [121.780425902000047, 16.974418155000023], [121.779622996000057, 16.973787301000073], [121.776181972000018, 16.973672600000043], [121.772068467000054, 16.974225201000024], [121.756799595000075, 16.981737026000076], [121.757769769000106, 16.986237191000043], [121.765457468000022, 16.986607225000057], [121.767120472000101, 16.987335170000051], [121.769340476000025, 16.988055111000051], [121.778168065000045, 16.993976316000044], [121.779342497000016, 16.991782815000022]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Salucong_count?>","Bgy_Name": "Salucong: Number of Benneficiary: <?= $Salucong_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.752413391000118, 17.032393684000056], [121.752608255000041, 17.032294179000075], [121.752786535000041, 17.032198820000076], [121.75285701700011, 17.032016395000028], [121.753018713000074, 17.031659835000028], [121.752981399000078, 17.031498140000053], [121.752981399000078, 17.031278400000076], [121.753039443000034, 17.031149872000071], [121.753060173000108, 17.031004761000077], [121.753056027000071, 17.030872088000024], [121.752886040000021, 17.030411877000063], [121.752612401000079, 17.029935083000055], [121.752413391000118, 17.02953291700004], [121.752197797, 17.029151481000042], [121.752139753000051, 17.028940033000026], [121.752127314000063, 17.028662249000035], [121.752139753000051, 17.028081803000077], [121.752114876000064, 17.027642323000066], [121.752036102000034, 17.027397706000045], [121.75195318100009, 17.027194551000036], [121.751754171000016, 17.026896036000039], [121.751488824000035, 17.026651419000075], [121.75122762400008, 17.026261692000048], [121.751074220000078, 17.026025367000045], [121.750937401000101, 17.025789043000032], [121.750858626000081, 17.025552719000075], [121.750817166000047, 17.025312248000034], [121.750800582000011, 17.024939105000044], [121.750829604000046, 17.024557669000046], [121.750883503000068, 17.024304761000053], [121.750966423000023, 17.023836258000074], [121.751057636000041, 17.023471407000045], [121.751152995000098, 17.023235083000031], [121.751410050000118, 17.022741704000055], [121.751783193000051, 17.022302224000043], [121.752143899000089, 17.021920788000045], [121.752641423000114, 17.021535206000067], [121.753250891000107, 17.021108164000054], [121.753536968000049, 17.020875986000021], [121.75370281000005, 17.020668684000043], [121.75378158400008, 17.020432360000029], [121.753827191000028, 17.020100677000073], [121.753900921000081, 17.019771281000033], [121.753872319000038, 17.019668316000036], [121.753761879000081, 17.019424313000059], [121.753614906000053, 17.019113448000041], [121.753460458000063, 17.018896076000033], [121.753254527000081, 17.018650104000073], [121.752882708000016, 17.018255403000069], [121.752671057000043, 17.018072354000026], [121.752493728000104, 17.017837822000047], [121.752236315000118, 17.017614730000048], [121.751858775000073, 17.017466002000049], [121.751629963000028, 17.017403079000076], [121.751229543000022, 17.017403079000076], [121.750823402000037, 17.017563247000055], [121.750405820000083, 17.017586129000051], [121.750074043000041, 17.017471723000028], [121.749690783, 17.017254352000066], [121.7493990480001, 17.01708274300006], [121.749158796000074, 17.016876812000078], [121.749004348000085, 17.016688042000055], [121.748929984000029, 17.016487832000053], [121.748947145000102, 17.016259020000064], [121.74908387000005, 17.015861508000057], [121.749210278000078, 17.015509661000067], [121.749324684000044, 17.015263689000051], [121.749461971000073, 17.015040597000052], [121.749576377000039, 17.014914751000049], [121.749776588000032, 17.014863268000056], [121.750188449, 17.014806065000073], [121.750594590000105, 17.014674498000034], [121.75102933200003, 17.014560092000067], [121.751349669000092, 17.014451407000024], [121.752099028000089, 17.014068147000046], [121.752287797, 17.013942300000053], [121.75263101500002, 17.013787853000053], [121.752753290000101, 17.013771698000028], [121.752894149000099, 17.013736370000061], [121.753276822000089, 17.013585554000031], [121.753701464000073, 17.013492481000071], [121.754300617000013, 17.013422677000051], [121.754515847000107, 17.013422677000051], [121.754870685000014, 17.01360300500005], [121.755132451, 17.013742613000034], [121.755516374000081, 17.013748430000078], [121.755859578000013, 17.013760064000053], [121.756196965000072, 17.013754247000065], [121.75658088900002, 17.013707711000052], [121.757238212000061, 17.013719345000027], [121.757645403000083, 17.013730979000059], [121.757942071000116, 17.013719345000027], [121.758360896000113, 17.013550652000049], [121.758802990000049, 17.013166728000044], [121.75885534300005, 17.013015486000029], [121.758901879000064, 17.012794439000061], [121.761077077000095, 17.009015743000077], [121.759816069000067, 17.009452245000034], [121.758215559000064, 17.009621996000078], [121.757003052000073, 17.009549246000063], [121.756033046000084, 17.00855499000005], [121.754772039000045, 17.008288238000034], [121.75307452800007, 17.008191238000052], [121.751862021000079, 17.008142737000071], [121.750576763000026, 17.007972986000027], [121.749146004000067, 17.007293982000022], [121.748006248000024, 17.006517978000034], [121.747022313000116, 17.005758502000049], [121.746674793000011, 17.004993958000057], [121.745354217000113, 17.004808614000069], [121.744844521000118, 17.004785446000028], [121.744103144000064, 17.005318310000064], [121.742990595000038, 17.011236867000036], [121.742385345000116, 17.018210313000054], [121.741311293000081, 17.021652596000024], [121.739745400000061, 17.026481902000057], [121.740896862000113, 17.026888300000053], [121.742228945000079, 17.027543053000045], [121.743073871000092, 17.027845046000039], [121.743169322000085, 17.027934532000074], [121.743747998000117, 17.028202989000022], [121.74413577100006, 17.02825071500007], [121.744554447000041, 17.028130073000057], [121.745164045000024, 17.02794945200003], [121.745818798000073, 17.027655942000024], [121.747094772000082, 17.027242507000039], [121.747410956000067, 17.027355856000042], [121.747804694000024, 17.027451308000025], [121.748162638000053, 17.027779423000027], [121.748520581000093, 17.028179127000044], [121.74866375900001, 17.028578831000061], [121.748729382000079, 17.028841323000051], [121.748812902000054, 17.02914557500003], [121.748759211000106, 17.029431930000044], [121.74851461600008, 17.029634765000026], [121.748425130000101, 17.029849531000025], [121.748472856000035, 17.030171680000024], [121.748627964000093, 17.030398378000029], [121.748932217000061, 17.030780185000026], [121.749236469000039, 17.031287272000043], [121.749469132000058, 17.031651181000029], [121.749612310000089, 17.031818221000037], [121.749886733000039, 17.032044919000043], [121.750238711000065, 17.032271617000049], [121.750548929000047, 17.03242672600004], [121.750793524000073, 17.032516212000075], [121.7510381190001, 17.032575869000027], [121.751372200000105, 17.032540075000043], [121.751748041000042, 17.032498315000055], [121.75209, 17.032472459000076], [121.752413391000118, 17.032393684000056]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Santor_count?>","Bgy_Name": "Santor: Number of Benneficiary: <?= $Santor_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.744103144000064, 17.005318310000064], [121.744110653, 17.000980800000036], [121.745556094000108, 16.990768966000076], [121.745323347000067, 16.988987443000042], [121.744915115000026, 16.98779415100006], [121.744318469000063, 16.986600858000031], [121.744067250000057, 16.985941407000041], [121.743627616000026, 16.985030737000045], [121.743156579000015, 16.983177993000027], [121.743144797000014, 16.982155052000053], [121.739967794000108, 16.982245258000034], [121.738861837000059, 16.984125939000023], [121.738503110000011, 16.984913170000027], [121.736656276000076, 16.985690188000035], [121.736291761000075, 16.985809651000068], [121.735368776000087, 16.986224029000027], [121.734206886000038, 16.986318237000035], [121.733794652000029, 16.988753513000063], [121.729298787000062, 17.00466960600005], [121.729854819000025, 17.004715942000075], [121.730480356000044, 17.004715942000075], [121.731453412000064, 17.004553766000072], [121.732287460000066, 17.004530598000031], [121.733561701000099, 17.00425258100006], [121.734557925000104, 17.004136741000025], [121.735554149000109, 17.004345253000054], [121.736550374000103, 17.005086630000051], [121.737175910000019, 17.005549990000077], [121.737546598000108, 17.006314534000069], [121.737940454000068, 17.006870566000032], [121.738797671000043, 17.007403431000057], [121.739886567000099, 17.007449767000026], [121.741253479000079, 17.007426599000041], [121.744103144000064, 17.005318310000064]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Sinippil_count?>","Bgy_Name": "Sinippil: Number of Benneficiary: <?= $Sinippil_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.806359125000085, 16.998363123000047], [121.807235516000105, 16.997003303000042], [121.808971321000058, 16.99258241900003], [121.811306964000096, 16.98952900200004], [121.80953751100003, 16.98796296300003], [121.807494218000102, 16.986672462000058], [121.807158809000043, 16.985248643000034], [121.806710058000021, 16.983864994000044], [121.806597870000019, 16.983117076000042], [121.804840262000084, 16.983864994000044], [121.802671299000053, 16.984612912000046], [121.800772856000094, 16.984844251000027], [121.799642230000018, 16.986033957000075], [121.797719351000069, 16.989035005000062], [121.798185342000011, 16.997139298000036], [121.798262284000089, 16.997528159000069], [121.798422330000108, 17.000051595000059], [121.798497540000085, 17.001322945000027], [121.798765281000101, 17.002489066000066], [121.801874957000109, 17.003380114000038], [121.801801853000029, 17.001557493000064], [121.80330871700005, 16.999193534000028], [121.804720431000078, 16.997791586000062], [121.806359125000085, 16.998363123000047]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Tallungan_count?>","Bgy_Name": "Tallungan: Number of Benneficiary: <?= $Tallungan_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.822428658000035, 16.99975127700003], [121.823565441000028, 16.99425687300004], [121.820261066000057, 16.992449135000072], [121.819338323000011, 16.993544892000045], [121.818646283000021, 16.992719437000062], [121.818503731000078, 16.992616800000064], [121.817773866000039, 16.992268973000023], [121.81602806, 16.991533129000061], [121.81577209000011, 16.991521753000029], [121.814474199000074, 16.991062069000066], [121.811306964000096, 16.98952900200004], [121.808971321000058, 16.99258241900003], [121.807235516000105, 16.997003303000042], [121.806359125000085, 16.998363123000047], [121.808597801000019, 16.999175421000075], [121.812439304, 17.000595017000023], [121.813138156000036, 17.000905154000066], [121.815784116000032, 16.997136683000065], [121.817927919000113, 16.997025477000022], [121.822428658000035, 16.99975127700003]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Turod_count?>","Bgy_Name": "Turod: Number of Benneficiary: <?= $Turod_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.787484572000039, 17.011549464000041], [121.79091552400007, 17.009313841000051], [121.791478341000015, 17.005002882000042], [121.792703763000077, 17.002839427000026], [121.798765281000101, 17.002489066000066], [121.798497540000085, 17.001322945000027], [121.798422330000108, 17.000051595000059], [121.798262284000089, 16.997528159000069], [121.798185342000011, 16.997139298000036], [121.798069416000089, 16.996992115000069], [121.797898468000085, 16.996927952000021], [121.796857334000038, 16.996873858000072], [121.791733826000041, 16.996591020000039], [121.790371124000103, 16.996482273000026], [121.789987435000057, 16.996446728000024], [121.788854945000026, 16.996224160000054], [121.784068983000111, 16.995366912000065], [121.779342497000016, 16.991782815000022], [121.778168065000045, 16.993976316000044], [121.776929198000062, 16.996356143000071], [121.776576379000062, 16.997030919000053], [121.775261331000024, 16.999545983000075], [121.770639790000018, 17.008384804000059], [121.769265435000079, 17.010919218000026], [121.770569675000047, 17.011289077000072], [121.771426191000046, 17.011697869000045], [121.772380038000051, 17.011970397000027], [121.773801075000051, 17.011970397000027], [121.774786117000076, 17.011970476000045], [121.774910653, 17.011970397000027], [121.776506887000096, 17.011697869000045], [121.77798632300005, 17.011036016000048], [121.779115367000031, 17.01066615700006], [121.780341742000019, 17.010354697000025], [121.781587583000032, 17.010354697000025], [121.78322275000005, 17.010140568000054], [121.784682720000092, 17.010101635000069], [121.785553088000029, 17.009876890000044], [121.786929880000116, 17.010435819000065], [121.787484572000039, 17.011549464000041]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Villador_count?>","Bgy_Name": "Villador: Number of Benneficiary: <?= $Villador_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.809940692000055, 17.005583220000062], [121.813138156000036, 17.000905154000066], [121.812439304, 17.000595017000023], [121.808597801000019, 16.999175421000075], [121.806359125000085, 16.998363123000047], [121.804720431000078, 16.997791586000062], [121.80330871700005, 16.999193534000028], [121.801801853000029, 17.001557493000064], [121.801874957000109, 17.003380114000038], [121.802178444000106, 17.005464622000034], [121.803651865, 17.00640295200003], [121.809940692000055, 17.005583220000062]]]] } },
        { "type": "Feature", "properties": { "Barangay": "<?= $Santiago_count?>","Bgy_Name": "Santiago: Number of Benneficiary: <?= $Santiago_count?>" }, "geometry": { "type": "MultiPolygon", "coordinates": [[[[121.766505333000055, 17.029602648000036], [121.766596668000034, 17.029433026000049], [121.76658362, 17.029263404000062], [121.766498809000041, 17.02917859300004], [121.766485761000013, 17.029048114000034], [121.766596668000034, 17.028865444000076], [121.766805433000059, 17.028702346000046], [121.767005235000056, 17.02870172300004], [121.769827065000072, 17.029806164000036], [121.770268967000106, 17.031058219000045], [121.771373722000021, 17.031131870000024], [121.773214980000034, 17.029732513000056], [121.773120552000023, 17.02840291800004], [121.772893243000112, 17.027986186000078], [121.772931128000096, 17.027304260000051], [121.772639023000011, 17.02616125000003], [121.769265435000079, 17.010919218000026], [121.767891368000051, 17.01027675000006], [121.766072607000069, 17.009136993000027], [121.765369353000096, 17.008506490000059], [121.763817343000028, 17.008530740000026], [121.762216834000014, 17.00855499000005], [121.761077077000095, 17.009015743000077], [121.758901879000064, 17.012794439000061], [121.75885534300005, 17.013015486000029], [121.758802990000049, 17.013166728000044], [121.758360896000113, 17.013550652000049], [121.757942071000116, 17.013719345000027], [121.757645403000083, 17.013730979000059], [121.757238212000061, 17.013719345000027], [121.75658088900002, 17.013707711000052], [121.756196965000072, 17.013754247000065], [121.755859578000013, 17.013760064000053], [121.755516374000081, 17.013748430000078], [121.755132451, 17.013742613000034], [121.754870685000014, 17.01360300500005], [121.754515847000107, 17.013422677000051], [121.754300617000013, 17.013422677000051], [121.753701464000073, 17.013492481000071], [121.753276822000089, 17.013585554000031], [121.752894149000099, 17.013736370000061], [121.752753290000101, 17.013771698000028], [121.75263101500002, 17.013787853000053], [121.752287797, 17.013942300000053], [121.752099028000089, 17.014068147000046], [121.751349669000092, 17.014451407000024], [121.75102933200003, 17.014560092000067], [121.750594590000105, 17.014674498000034], [121.750188449, 17.014806065000073], [121.749776588000032, 17.014863268000056], [121.749576377000039, 17.014914751000049], [121.749461971000073, 17.015040597000052], [121.749324684000044, 17.015263689000051], [121.749210278000078, 17.015509661000067], [121.74908387000005, 17.015861508000057], [121.748947145000102, 17.016259020000064], [121.748929984000029, 17.016487832000053], [121.749004348000085, 17.016688042000055], [121.749158796000074, 17.016876812000078], [121.7493990480001, 17.01708274300006], [121.749690783, 17.017254352000066], [121.750074043000041, 17.017471723000028], [121.750405820000083, 17.017586129000051], [121.750823402000037, 17.017563247000055], [121.751229543000022, 17.017403079000076], [121.751629963000028, 17.017403079000076], [121.751858775000073, 17.017466002000049], [121.752236315000118, 17.017614730000048], [121.752493728000104, 17.017837822000047], [121.752671057000043, 17.018072354000026], [121.752882708000016, 17.018255403000069], [121.753254527000081, 17.018650104000073], [121.753460458000063, 17.018896076000033], [121.753614906000053, 17.019113448000041], [121.753761879000081, 17.019424313000059], [121.753872319000038, 17.019668316000036], [121.753900921000081, 17.019771281000033], [121.753827191000028, 17.020100677000073], [121.75378158400008, 17.020432360000029], [121.75370281000005, 17.020668684000043], [121.753536968000049, 17.020875986000021], [121.753250891000107, 17.021108164000054], [121.752641423000114, 17.021535206000067], [121.752143899000089, 17.021920788000045], [121.751783193000051, 17.022302224000043], [121.751410050000118, 17.022741704000055], [121.751152995000098, 17.023235083000031], [121.751057636000041, 17.023471407000045], [121.750966423000023, 17.023836258000074], [121.750883503000068, 17.024304761000053], [121.750829604000046, 17.024557669000046], [121.750800582000011, 17.024939105000044], [121.750817166000047, 17.025312248000034], [121.750858626000081, 17.025552719000075], [121.750937401000101, 17.025789043000032], [121.751074220000078, 17.026025367000045], [121.75122762400008, 17.026261692000048], [121.751488824000035, 17.026651419000075], [121.751754171000016, 17.026896036000039], [121.75195318100009, 17.027194551000036], [121.752036102000034, 17.027397706000045], [121.752114876000064, 17.027642323000066], [121.752139753000051, 17.028081803000077], [121.752127314000063, 17.028662249000035], [121.752139753000051, 17.028940033000026], [121.752197797, 17.029151481000042], [121.752413391000118, 17.02953291700004], [121.752612401000079, 17.029935083000055], [121.752886040000021, 17.030411877000063], [121.753056027000071, 17.030872088000024], [121.753060173000108, 17.031004761000077], [121.753039443000034, 17.031149872000071], [121.752981399000078, 17.031278400000076], [121.752981399000078, 17.031498140000053], [121.753018713000074, 17.031659835000028], [121.75285701700011, 17.032016395000028], [121.752786535000041, 17.032198820000076], [121.752608255000041, 17.032294179000075], [121.752413391000118, 17.032393684000056], [121.752438637000068, 17.032894952000049], [121.752450717000102, 17.033233189000043], [121.752450717000102, 17.033450626000047], [121.752317838000067, 17.033692224000049], [121.752172880000103, 17.034090859000059], [121.75216080000007, 17.034404936000044], [121.752088321000087, 17.03469485200003], [121.752100400000018, 17.035008929000071], [121.752233279000052, 17.03528676600007], [121.752511116000051, 17.035492124000029], [121.752680234000081, 17.035721641000066], [121.752933911000014, 17.036023638000074], [121.753969917000063, 17.036690407000037], [121.75560903600001, 17.037266313000032], [121.758222767, 17.037222013000076], [121.761233994, 17.036537590000023], [121.761247042000036, 17.036394063000046], [121.761044800000036, 17.036452778000069], [121.760940417000029, 17.036348395000061], [121.760966513000085, 17.036263584000039], [121.761168755000085, 17.036100486000066], [121.761351425000043, 17.035924340000065], [121.761423188000094, 17.035780813000031], [121.761442760000023, 17.035709050000037], [121.761560191000058, 17.035585095000044], [121.761814624000067, 17.035382853000044], [121.762088630000108, 17.035063181000055], [121.762160393000045, 17.034919654000078], [121.762199537000015, 17.034645649000026], [121.762297396, 17.034547790000033], [121.762453970000024, 17.034508646000063], [121.762519209000061, 17.03441078700007], [121.762545305000117, 17.034228117000055], [121.762525733000075, 17.034051971000054], [121.76264968800001, 17.033928016000061], [121.762858454000025, 17.033738822000032], [121.762982409000074, 17.033601820000058], [121.763217270000041, 17.033445245000053], [121.763269462000039, 17.033275623000065], [121.763360797000018, 17.033073381000065], [121.763439084000083, 17.03289071100005], [121.763576086000057, 17.032727612000031], [121.763732661000063, 17.032773280000072], [121.763895759000093, 17.032655849000037], [121.764071905000037, 17.032512323000049], [121.764163240000016, 17.032342700000072], [121.764319815000022, 17.032107839000048], [121.764437246000057, 17.031918645000076], [121.764554676000103, 17.031690307000076], [121.764632964000043, 17.031409778000068], [121.764626440000029, 17.031253204000052], [121.764600344000087, 17.03112924900006], [121.764754094000068, 17.030991567000058], [121.764952636000089, 17.030887863000032], [121.765109211000095, 17.030750861000058], [121.765317977000109, 17.030555143000072], [121.765428884000016, 17.030378997000071], [121.765631125000027, 17.030248518000064], [121.765852939000069, 17.03010499100003], [121.766061705000084, 17.029994084000066], [121.766113897000082, 17.029889702000048], [121.766309615000068, 17.029765747000056], [121.766505333000055, 17.029602648000036]]]] } }
    ]
  
}

L.geoJSON(mercedesJSON).addTo(map);





function getColor(d) {

    //alert(d);
// return d > 50 ? '#800026' :
//        d > 40  ? '#BD0026' :
//        d > 30  ? '#E31A1C' :
//        d > 20  ? '#FC4E2A' :
//        d > 10   ? '#FD8D3C' :
//        d > 5   ? '#FEB24C' :
//        d > 1   ? '#FED976' :
//                   '#FFEDA0';





if(d >= 1 && d <= 3){

return 'green';

}
if(d >= 7 && d <= 10){

return 'red';

}

if(d >= 4 && d <= 6){

return 'yellow';

}

if(d <= 0){

    return 'transparent';

}

}

function style(feature) {
  const BarangayName = feature.properties.Bgy_Name;

  return {
    fillColor: getColor(feature.properties.Barangay),
    weight: 2,
    opacity: 1,
    color: 'white',
    dashArray: '3',
    fillOpacity: 0.7
  };
}


L.geoJson(mercedesJSON, {style: style}).addTo(map);


function highlightFeature(e) {
var layer = e.target;

layer.setStyle({
    weight: 5,
    color: '#666',
    dashArray: '',
    fillOpacity: 0.7
});

layer.bringToFront();
info.update(layer.feature.properties);
}


function resetHighlight(e) {
geojson.resetStyle(e.target);
info.update();
}

var geojson;
// ... our listeners
geojson = L.geoJson(mercedesJSON);
         
function zoomToFeature(e) {
map.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
console.log("onEachFeature");
layer.bindPopup(feature.properties.Bgy_Name);


layer.on({
    
    mouseover: highlightFeature,
    mouseout: resetHighlight,
    click: zoomToFeature
});
}

geojson = L.geoJson(mercedesJSON, {
style: style,
onEachFeature: onEachFeature
}).addTo(map);



}
             
            

            // Call the initializeMap function after the page has loaded
            window.addEventListener('load', initializeMap);

            function logout() {
    Swal.fire({
        title: 'Confirm Logout',
        text: 'Are you sure you want to log out?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#007BFF',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Logout',
        cancelButtonText: 'Cancel',
        customClass: {
            popup: 'swal2-modal',
            title: 'swal2-title',
            content: 'swal2-content',
            confirmButton: 'swal2-confirm',
            cancelButton: 'swal2-cancel',
        },
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "function/logout.php";
        }
    });
}

        </script>

        <!-- Add Bootstrap JS and jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Add Bootstrap JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!-- Then include Bootstrap's JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Include additional libraries and scripts here -->
        <!-- Leaflet JavaScript -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <!-- SweetAlert2 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Datepicker JavaScript (Assuming you have a date picker library) -->
        <script src="path-to-datepicker.js"></script>
        <!-- Include your other scripts and libraries below -->
        <!-- For example, add Bootstrap or any other needed libraries here -->
</body>

</html>