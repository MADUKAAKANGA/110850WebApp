<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    include 'includes/db_connection.php'; // Update the path as needed

    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email_address = $_POST['email_address'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $conf_password = $_POST['Conf_password'];
    $userrole = $_POST['userrole'];

    // Perform any necessary validation here

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (fullname, email_address, phone_number, username, dob, password, userrole) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $fullname, $email_address, $phone_number, $username, $dob, $hashed_password, $userrole);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
