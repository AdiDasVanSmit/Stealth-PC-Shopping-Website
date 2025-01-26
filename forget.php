<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url(images/forget.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .loginbox {
            width: 320px;
            height: 390px;
            background: white;
            color: black;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }
        .loginbox input[type="text"], input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #1b1b1e;
            font-size: 16px;
        }
        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #1b1b1e;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: yellow;
            color: #000;
        }
        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: #1b1b1e;
        }
        .loginbox a:hover {
            color: red;
        }
        .data {
            margin-bottom: -20px;
            padding: 20px;
            background: white;
            color: black;
        }
        .modal {
			display: none; 
			position: fixed; 
			z-index: 1; 
			left: 0;
			top: 0;
			width: 100%; 
			height: 100%; 
			overflow: auto; 
			background-color: rgba(0,0,0,0.5); 
		}
.modal-content {
			background-color: #fefefe;
			margin: 10% auto; 
			padding: 20px;
			border: 1px solid #888;
			width: 80%; 
			max-width: 500px;
			text-align: center;
			position: relative;
		}
.close {
			color: #aaa;
			position: absolute;
			top: 10px;
			right: 25px;
			font-size: 28px;
			font-weight: bold;
			cursor: pointer;
		}
    a{
      text-decoration: none;
      font-size: 12px;
      line-height: 20px;
      color: #1b1b1e;
    }
    a:hover
    {
      color: red;
    }
    </style>
</head>
<body>
    <div class="loginbox">
        <img src="images/avatar.png" class="avatar">
        <h1 style="font-family: 'Ubuntu', sans-serif;">Reset Password</h1>
        <!-- Form to reset password -->
        <form method="post" action="">
            <input type="text" id="uname" name="name" placeholder="Enter Username" required>
            <input type="password" id="password" name="password" placeholder="Set New Password" required>
            <input type="checkbox" style="width: 20px; height: 13px;" onclick="ShowPassword()"> 
            <p style="margin-left:28px; margin-top:-35px;font-family: 'Ubuntu', sans-serif;"> Show password</p><br>
            <input type="submit" name="update" style="margin-top:12px;" value="Set Password">

            <a href="Login.php" style="font-family: 'Ubuntu', sans-serif;">Back to Login</a><br>
        </form>
    </div>

    <script>
    // Show or hide password functionality
    function ShowPassword() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }

    // Close the modal when clicking the 'x'
    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    // Show the modal (this is just for demonstration, you can adjust this based on needs)
    window.onload = function() {
        if (document.getElementById('modal')) {
            document.getElementById('modal').style.display = 'block';
        }
    }
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted for update
if (isset($_POST['update'])) {
    // Get form data
    $id = $_POST['name']; // Username
    $new_password = $_POST['password']; // New password

    // Prevent SQL injection by escaping user input
    $id = $conn->real_escape_string($id);
    $new_password = $conn->real_escape_string($new_password);

    // Update data in database
    $sql = "UPDATE shop_register SET Password='$new_password' WHERE U_name='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "
        <div class='modal' id='modal'>
            <div class='modal-content'>
                <span class='close' onclick='closeModal()'>&times;</span>
                <p>Password has been changed successfully.</p>
            </div>
        </div>";
    } else {
        echo "Error updating password: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
</body>
</html>