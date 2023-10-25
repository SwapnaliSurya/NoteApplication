<?php
$conn = mysqli_connect("localhost", "root", "", "js_revision");
$data = array();

if ($conn) {
    if (isset($_REQUEST['action']) && $_REQUEST['action'] == "register-user") {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt); 
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) === 0) {
         
            $stmt = mysqli_prepare($conn, "INSERT INTO users(username, email, password) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
            if (mysqli_stmt_execute($stmt)) {
                $data['message'] = 'User Registered';
                $data['type'] = 'success';
            } else {
                $data['message'] = 'Error registering user';
                $data['type'] = 'error';
            }
        } else {
           
            $data['message'] = 'Username already in use';
            $data['type'] = 'error';
        }
    } else {
        $data['message'] = 'Invalid action';
        $data['type'] = 'error';
    }
} else {
    $data['message'] = 'Database connection error';
    $data['type'] = 'error';
}

echo json_encode($data);
?>
