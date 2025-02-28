
<?php require_once("header_section.php"); ?>
<?php
 require 'db.php';

 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users SET ";
$updates = [];

if (!empty($username)) {
    $updates[] = "username = '$username'";
}
if (!empty($email)) {
    $updates[] = "email = '$email'";
}
if (!empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $updates[] = "password = '$hashed_password'";
}

if (!empty($updates)) {
    $sql .= implode(", ", $updates) . " WHERE user_id = $user_id";

    if ($conn->query($sql) === TRUE) {
        echo "User information updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "No data to update.";
}

$conn->close();
?>






<?php require_once("footer_section.php"); ?>