<?php
require_once 'connect.php';

$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){  

    
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        echo '<script language="javascript">
                alert("Please confirm password..")
            </script>';     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            echo '<script language="javascript">
                alert("Password did not match..")
            </script>';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $stmt = mysqli_prepare($link, "INSERT INTO users VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'ssssss', $firstname, $lastname, $email, $age, $about, $password);

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $about = $_POST['about'];
        $password = $_POST['password'];

        mysqli_stmt_execute($stmt);
        
        if (mysqli_stmt_execute($stmt)) {
            echo '<script language="javascript">';
            echo 'alert("Registration successfull!")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Registration failed! Please try again..")';
            echo '</script>';
        }
                  
            // Close statement
            mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}

?>