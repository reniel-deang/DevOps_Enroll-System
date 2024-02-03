<?php
include "dbcon.php";
session_start();

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // Using prepared statements to prevent SQL injection
    $sql = "SELECT username, pass FROM tb_userdata WHERE username = ? AND pass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        if(strpos($username, "@admin"))
        {
            header("Location: ../../index.php");
            exit(); // Ensure script stops execution after redirect
        }
        else if(strpos($username, "@student"))
        {
            header("Location: ../../index.php");
            exit(); // Ensure script stops execution after redirect
        }
    } else {
        // Display danger alert if login fails
        echo '
        <div class="alert alert-danger">
            <strong>Danger!</strong> Invalid username or password.
        </div>';
    }
    $stmt->close();
}

?>