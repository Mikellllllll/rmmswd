<?php
include 'function/out.php';

$id = $_GET['id'];

include 'include/conn.php';

// Retrieve a single row based on the ID
$sql = "SELECT * FROM household_data WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Store the data in individual global variables
    $last_name = $row['last_name'];
    $first_name = $row['first_name'];
    $middle_name = $row['middle_name'];
    $extension_name = $row['extension_name'];
    $sexM = $row['sexM'];
    $household_id_number = $row['household_id_number'];
    $barangay = $row['barangay'];
    $city_municipality = $row['city_municipality'];
    $province = $row['province'];
    $region = $row['region'];
    $income = $row['income'];
    $child_name = $row['child_name'];
    $child_dob = $row['child_dob'];
    $attending_school = $row['attending_school'];
    $reason_for_not_attending = $row['reason_for_not_attending'];
    $school_name = $row['school_name'];
    $sexC = $row['sexC'];
    $child1_name = $row['child1_name'];
    $child1_address = $row['child1_address'];
    $child1_school_name = $row['child1_school_name'];
    $child1_school_address = $row['child1_school_address'];
    $child1_grade_level = $row['child1_grade_level'];
    $child2_name = $row['child2_name'];
    $child2_address = $row['child2_address'];
    $child2_school_name = $row['child2_school_name'];
    $child2_school_address = $row['child2_school_address'];
    $child2_grade_level = $row['child2_grade_level'];
    $child3_name = $row['child3_name'];
    $child3_address = $row['child3_address'];
    $child3_school_name = $row['child3_school_name'];
    $child3_school_address = $row['child3_school_address'];
    $child3_grade_level = $row['child3_grade_level'];
}

// The $householdData array is now accessible globally with all the data.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="include/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Datepicker CSS (Assuming you have a date picker library) -->
    <style>
        body {
            background-color: gray;
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
        }

        .dashboard {
    background: lightgray;
    color: #333;
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    font-family: Arial, sans-serif;
}

        .dashboard h1 {
            font-size: 36px;
            margin-bottom: 15px;
            color: #3498db;
        }

        .dashboard p {
            font-size: 18px;
            /* Comfortable font size for paragraphs */
            margin-bottom: 10px;
        }

        .dashboard-content {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .nav-link {
            cursor: pointer;
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #ffce54;
            /* Yellow text color on hover for links */
        }

        #sidebar {
            height: 97%;
            width: 240px;
            position: fixed;
            top: 0;
            background-color: darkblue;
            color: #fff;
            padding-top: 80px;
            transition: width 0.3s ease, transform 0.3s ease, background-color 0.3s ease;
            font-family: "Arial", sans-serif;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            margin: 20px;

        }

        #sidebar .brand {
            position: relative;
            text-align: center;
        }

        #sidebar .brand img {
            max-width: 200px;
            display: block;
            margin-left: 15px;
        }

        #sidebar .brand::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 50%;
            top: 50%;
            left: 0;
            background: linear-gradient(transparent, rgba(255, 255, 255, 0.5));
            transform: translateY(-50%);
            z-index: -1;
            border-radius: 100%;
        }




        #sidebar .nav-item {
            padding: 35px 0;
            text-align: center;
            transition: transform 0.3s ease, padding 0.3s ease;
        }

        #sidebar .nav-item a {
            color: gold;
            text-decoration: none;
            display: block;
            padding: 5px 10px;
            font-family: "Arial", sans-serif;
            border-radius: 10px;
            transition: background-color 0.3s, border-left 0.3s, padding 0.3s;
        }

        #sidebar .nav-item a:hover {
            background-color: white;
            border-left: 5px solid #fff;
            transform: translateX(5px);
            transition: transform 0.3s ease, background-color 0.3s ease, border-left 0.3s ease;
        }

        #hamburger {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
            background: gold;
            /* iOS Blue background */
            color: gold;
            /* White icon color for contrast */
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 100%;
            /* Circular shape */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow for depth */
            font-family: "Arial", sans-serif;
            /* Modern font family */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Smooth color transition */
        }

        #hamburger:hover {
            background: silver;
            /* Darker blue on hover */
            color: gold;
            
        }

        #content {
            padding: 20px;
            margin-left: 250px;
            font-family: "Arial", sans-serif;
        }

        .map-container {
            background-color: darkblue;
            color: gold;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .form-container {
            flex: 1;
            background-color: whitesmoke;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 30px;
            font-family: "Arial", sans-serif;
            max-height: 550px;
            overflow: auto;
        }

        .form-container label {
            font-weight: bold;
            color: #333;
        }

        .form-container input[type="text"],
        .form-container input[type="file"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        .form-container button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-family: "Arial", sans-serif;
            border-radius: 5px;
        }

        .form-container button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Custom hover effect for the logout button */
        .swal2-confirm:hover {
            background-color: #0056b3;
            /* Change the background color on hover */
            color: #fff;
            /* Change the text color on hover */
            transition: background-color 0.3s, color 0.3s;
            /* Add a smooth transition */
        }


        @media (max-width: 768px) {
            #sidebar {
                transform: translateX(0);
            }

            #sidebar.active {
                transform: translateX(-250px);
            }

            #hamburger {
                display: block;
                background-color: gold;
                background-color: transparent;
                margin-top: 15px;
                margin-right: 25px;
            }

            #content {
                margin-left: 0;
                padding-left: 20px;
                padding-right: 20px;
            }

            .form-container {
                margin-top: 10px;
                margin-left: 0;
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <div id="hamburger" onclick="toggleSidebar()">☰</div>
    <div id="sidebar" class="active">
        <div class="brand">
            <img src="image/dswdmswd.png" alt="Logo">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="member.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="map.php">Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add.php">Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add.php">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="logout()">Logout</a>
            </li>
        </ul>
    </div>
    <div id="content">
        <div class="map-container">
            <h2>Beneficiary</h2>
            <p>Edit member
            <p>
        </div>
        <!-- ... (previous HTML code) ... -->
        <div class="form-container">
            <h2>HOUSEHOLD PERSONAL DATA</h2>
            <form id="saveForm" method="post">
                <!-- Household Personal Data -->
                <div class="form-group">
                    <label for="last_name"><strong>Last Name:</strong></label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required value="<?php echo $last_name; ?>">
                </div>
                <div class="form-group">
                    <label for="first_name"><strong>First Name:</strong></label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required value="<?php echo $first_name; ?>">
                </div>
                <div class="form-group">
                    <label for="middle_name"><strong>Middle Name:</strong></label>
                    <input type="text" id="middle_name" name="middle_name" class="form-control" required value="<?php echo $middle_name; ?>">
                </div>
                <div class="form-group">
                    <label for="extension_name"><strong>Extension Name:</strong></label>
                    <input type="text" id="extension_name" name="extension_name" class="form-control" value="<?php echo $extension_name; ?>">
                </div>
                <div class="form-group">
                    <label for="sexM"><strong>Sex:</strong></label>
                    <select id="sexM" name="sexM" class="form-control" required>
                        <option value="Male" <?php if ($sexM === "Male") echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($sexM === "Female") echo 'selected'; ?>>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="household_id_number"><strong>Household Id Number:</strong></label>
                    <input type="text" id="household_id_number" name="household_id_number" class="form-control" required value="<?php echo $household_id_number; ?>">
                </div>
                <div class="form-group">
                    <label for="barangay"><strong>Barangay:</strong></label>
                    <input type="text" id="barangay" name="barangay" class="form-control" required value="<?php echo $barangay; ?>">
                </div>
                <div class="form-group">
                    <label for="city_municipality"><strong>City/Municipality:</strong></label>
                    <input type="text" id="city_municipality" name="city_municipality" class="form-control" required value="<?php echo $city_municipality; ?>">
                </div>
                <div class="form-group">
                    <label for="province"><strong>Province:</strong></label>
                    <input type="text" id="province" name="province" class="form-control" required value="<?php echo $province; ?>">
                </div>
                <div class="form-group">
                    <label for="region"><strong>Region:</strong></label>
                    <input type="text" id="region" name="region" class="form-control" required value="<?php echo $region; ?>">
                </div>

                <div class="form-group">
                    <label for="income"><strong>Expected Monthly Income:</strong></label>
                    <input type="text" id="income" name="income" class="form-control" required value="<?php echo $income; ?>">
                </div>

                <!-- Data Change/Correction/Updating -->
                <h2>NewBorn/Additional Household Member:</h2>
                <div class="form-group">
                    <label for="child_name"><strong>Name of Child:</strong></label>
                    <input type="text" id="child_name" name="child_name" class="form-control" value="<?php echo $child_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child_dob"><strong>Date of Birth (MM/DD/YYYY):</strong></label>
                    <input type="text" id="child_dob" name="child_dob" class="form-control" value="<?php echo $child_dob; ?>">
                </div>
                <div class="form-group">
                    <label for="attending_school"><strong>Attending School:</strong></label>
                    <select id="attending_school" name="attending_school" class="form-control" required>
                        <option value="Yes" <?php if ($attending_school === "Yes") echo 'selected'; ?>>Yes</option>
                        <option value="No" <?php if ($attending_school === "No") echo 'selected'; ?>>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reason_for_not_attending"><strong>Reason for not Attending:</strong></label>
                    <input type="text" id="reason_for_not_attending" name="reason_for_not_attending" class="form-control" value="<?php echo $reason_for_not_attending; ?>">
                </div>
                <div class="form-group">
                    <label for="school_name"><strong>Name of School:</strong></label>
                    <input type="text" id="school_name" name="school_name" class="form-control" value="<?php echo $school_name; ?>">
                </div>
                <div class="form-group">
                    <label for="sexC"><strong>Sex:</strong></label>
                    <select id="sexC" name="sexC" class="form-control" required>
                        <option value="Male" <?php if ($sexC === "Male") echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($sexC === "Female") echo 'selected'; ?>>Female</option>
                    </select>
                </div>
                <h2>CHILD 1</h2>
                <div class="form-group">
                    <label for="child1_name"><strong>Name:</strong></label>
                    <input type="text" id="child1_name" name="child1_name" class="form-control" value="<?php echo $child1_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child1_address"><strong>Address:</strong></label>
                    <input type="text" id="child1_address" name="child1_address" class="form-control" value="<?php echo $child1_address; ?>">
                </div>
                <div class="form-group">
                    <label for="child1_school_name"><strong>Name of School:</strong></label>
                    <input type="text" id="child1_school_name" name="child1_school_name" class="form-control" value="<?php echo $child1_school_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child1_school_address"><strong>Address of School:</strong></label>
                    <input type="text" id="child1_school_address" name="child1_school_address" class="form-control" value="<?php echo $child1_school_address; ?>">
                </div>
                <div class="form-group">
                    <label for="child1_grade_level"><strong>Grade Level:</strong></label>
                    <input type="text" id="child1_grade_level" name="child1_grade_level" class="form-control" value="<?php echo $child1_grade_level; ?>">
                </div>

                <!-- CHILD 2 -->
                <h2>CHILD 2</h2>
                <div class="form-group">
                    <label for="child2_name"><strong>Name:</strong></label>
                    <input type="text" id="child2_name" name="child2_name" class="form-control" value="<?php echo $child2_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child2_address"><strong>Address:</strong></label>
                    <input type="text" id="child2_address" name="child2_address" class="form-control" value="<?php echo $child2_address; ?>">
                </div>
                <div class="form-group">
                    <label for="child2_school_name"><strong>Name of School:</strong></label>
                    <input type="text" id="child2_school_name" name="child2_school_name" class="form-control" value="<?php echo $child2_school_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child2_school_address"><strong>Address of School:</strong></label>
                    <input type="text" id="child2_school_address" name="child2_school_address" class="form-control" value="<?php echo $child2_school_address; ?>">
                </div>
                <div class="form-group">
                    <label for="child2_grade_level"><strong>Grade Level:</strong></label>
                    <input type="text" id="child2_grade_level" name="child2_grade_level" class="form-control" value="<?php echo $child2_grade_level; ?>">
                </div>

                <!-- CHILD 3 -->
                <h2>CHILD 3</h2>
                <div class="form-group">
                    <label for="child3_name"><strong>Name:</strong></label>
                    <input type="text" id="child3_name" name="child3_name" class="form-control" value="<?php echo $child3_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child3_address"><strong>Address:</strong></label>
                    <input type="text" id="child3_address" name="child3_address" class="form-control" value="<?php echo $child3_address; ?>">
                </div>
                <div class="form-group">
                    <label for="child3_school_name"><strong>Name of School:</strong></label>
                    <input type="text" id="child3_school_name" name="child3_school_name" class="form-control" value="<?php echo $child3_school_name; ?>">
                </div>
                <div class="form-group">
                    <label for="child3_school_address"><strong>Address of School:</strong></label>
                    <input type="text" id="child3_school_address" name="child3_school_address" class="form-control" value="<?php echo $child3_school_address; ?>">
                </div>
                <div class=" form-group">
                    <label for="child3_grade_level"><strong>Grade Level:</strong></label>
                    <input type="text" id="child3_grade_level" name="child3_grade_level" class="form-control" value="<?php echo $child3_grade_level; ?>">
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Save</button>
                    <button type="button" onclick="back()" class="btn btn-primary">Cancel</button>
                </div>
            </form>

        </div>
    </div>

    <script>
        function back() {
            window.location.href = "member.php";
        }

        $(document).ready(function() {

            $("#saveForm").on("submit", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to save changes",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        confirm(this);
                    }
                });

            });
        });

        function confirm(form) {
            var formData = new FormData(form);
            formData.append('id', <?= $id ?>);
            $.ajax({
                url: "function/update_data.php",
                type: "POST",
                cache: false,
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response === "success") {
                        Swal.fire({
                            title: "Report Submit",
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "edit.php?id=" + <?php echo $id; ?>;
                            }
                        });
                    } else {
                        Swal.fire({
                            title: "ERROR",
                            text: response,
                            icon: "error",
                            confirmButtonText: "OK",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: "ERROR",
                        text: "Something went wrong",
                        icon: "error",
                        confirmButtonText: "OK",
                    });
                    console.error("AJAX Error:", status, error);
                },
            });
        }


        // Function to toggle the sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

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
                    confirmButton: 'swal2-confirm'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "function/logout.php";
                }
            });
        }
    </script>
    <!-- Bootstrap JS and jQuery (required for the navbar) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</body>

</html>