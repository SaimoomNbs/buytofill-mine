<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buytofill"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['csv_file'])) {
    // Check if file was uploaded without errors
    if ($_FILES['csv_file']['error'] == 0) {
        $fileTmpPath = $_FILES['csv_file']['tmp_name'];
        $fileName = $_FILES['csv_file']['name'];

        // Open the file for reading
        if (($handle = fopen($fileTmpPath, 'r')) !== FALSE) {
            $row = 0;
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // Skip the header row
                if ($row == 0) {
                    $row++;
                    continue;
                }

                // Extract data from CSV
                $category = $data[0];
                $manufacturer = $data[1];
                $part_number = $data[2];
                $upc = $data[3];
                $name = $data[4];
                $moq = $data[5];
                $inventory = $data[6];
                $cost = $data[7];
                $eta = $data[8];
                $condition = $data[9];
                $warranty = $data[10];
                $exw = $data[11];
                $packaging = $data[12];
                $grading_guide = $data[13];
                $on_hand_optional = $data[14];
                $restrictions_optional = $data[15];
                $restrictions_details_optional = $data[16];
                $special_notes_optional = $data[17];

                // Insert data into the database
                $sql = "INSERT INTO stocklist (category, manufacturer, part_number, upc, name, moq, inventory, cost, eta, item_condition, warranty, exw, packaging, grading_guide, on_hand_optional, restrictions_optional, restrictions_details_optional, special_notes_optional) 
                        VALUES ('$category', '$manufacturer', '$part_number', '$upc', '$name', '$moq', '$inventory', '$cost', '$eta', '$condition', '$warranty', '$exw', '$packaging', '$grading_guide', '$on_hand_optional', '$restrictions_optional', '$restrictions_details_optional', '$special_notes_optional')";

                if ($conn->query($sql) === TRUE) {
                    header("Location: draft.php"); // Change this to your desired URL
                    exit();
                    echo "Record added successfully<br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            fclose($handle);
        } else {
            echo "Error opening the file.";
        }
    } else {
        echo "There was an error uploading the file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy To Fill</title>
    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url("https://cdn.jsdelivr.net/npm/cooltipz-css@2.3.1/cooltipz.css");
        @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        html,
        body {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-smooth: always;
            height: 100%;
        }

        :root {
            --primary-color: #0d0d0d;
            --panel-color: #0d0d0d;
            --text-color: #fff;
            --black-light-color: #707070;
            --border-color: #1c1f24;
            --toggle-color: #ddd;
            --title-icon-color: #fff;
        }

        body {
            min-height: 100vh;
            background-color: var(--panel-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 400;
            overflow: hidden;
        }

        svg {
            width: 20px;
            height: 20px;
            color: #3c4047;
        }

        .btn {
            background-color: #5533ff;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 11px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            display: inline-block;
            text-align: center;
        }

        .btn:hover {
            background-color: #4e2fe6;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .upload-card {
            background-color: #1c1f24;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        .upload-card input[type="file"] {
            margin-bottom: 20px;
            background-color: var(--primary-color);
            color: var(--text-color);
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }

        .upload-card button {
            background-color: #5533ff;
            color: #fff;
            padding: 12px 30px;
            font-size: 14px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .upload-card button:hover {
            background-color: #4e2fe6;
        }
    </style>
</head>

<body>

    <section class="container">
        <div class="upload-card">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="csv_file" class="" />
                <button type="submit">Upload CSV</button>
            </form>
        </div>
    </section>

</body>

</html>