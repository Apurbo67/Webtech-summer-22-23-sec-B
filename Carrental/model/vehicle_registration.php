<?php
session_start();

include("../controllers/connections.php");
include("../model/functions.php");
$con = connection();
$user_data = check_login($con);

if (!$user_data) 
{
    header("Location: ../view/login.php");
    die;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Retrieve form data
    $vehicleName = $_POST['vehicle_name'];
    $licenseNumber = $_POST['license_number'];

    // Validate form data
    if (!empty($vehicleName) && !empty($licenseNumber)) 
    {
        //  uploaded file
        $file = $_FILES['vehicle_photo'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Check for file upload errors
        if ($fileError === UPLOAD_ERR_OK) {
            // Specify the target directory to store the uploaded file
            $targetDirectory = '../uploads/';
            $targetFilePath = $targetDirectory . $fileName;

            // Check file size (max 10MB)
            if ($fileSize <= 10 * 1024 * 1024) {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                    // Store the vehicle registration data in the database
                    $userId = $_SESSION['user_id'];

                    $query = "INSERT INTO vehicles (user_id, vehicle_name, license_number, vehicle_photo) VALUES ('$userId', '$vehicleName', '$licenseNumber', '$targetFilePath')";

                    if (mysqli_query($con, $query)) {
                        // Vehicle registration successful
                        echo "Vehicle registered successfully.";
                    } else {
                        // Error inserting data
                        echo "Error registering vehicle: " . mysqli_error($con);
                    }
                } else {
                    // Failed to move uploaded file
                    echo "Error uploading file.";
                }
            } else {
                // File size exceeds the limit
                echo "File size exceeds the limit.";
            }
        } else {
            // File upload error
            echo "Error uploading file.";
        }
    } else {
        // Invalid form data
        echo "Please fill in all the required fields.";
    }
}
?>