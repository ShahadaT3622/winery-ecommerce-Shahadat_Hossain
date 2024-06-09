<?php
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

function registerUser($conn, $username, $email, $password, $firstName, $lastName, $gender, $address, $city, $state, $zipCode, $phoneNumber) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password, first_name, last_name, gender, address, city, state, zip_code, phone_number)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $username, $email, $passwordHash, $firstName, $lastName, $gender, $address, $city, $state, $zipCode, $phoneNumber);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
?>
