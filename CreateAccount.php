<?php

        //establish connection info
        $server = "sql313.epizy.com";
        $userid = "	epiz_31151061";
        $pw = "f3cr0obkFZL";
        $db= "epiz_31151061_AppAccounts";

        // Create connection
        $conn = mysqli_connect($server, $userid, $pw );

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully" . "<br>";

        //select the database
        $conn->select_db($db);
    
        if(isset($_POST['submit'])){
        
            if(!empty($_POST['username']) && ($_POST['password']) >= 0){


                $username = $_POST['username'];

                $score = $_POST['password'];

                $query = "INSERT INTO `leaderboard`(`Username`, `Password`) VALUES ('$username','$password')";

                $run = mysqli_query($conn,$query) or die(mysqli_error());

                if($run){
                    echo "Form submitted successfully!";
                }
                else {
                    echo "Form not submitted";
                }
            }

            else {
                echo "Please fill out both fields";
            }
        
        }            
    $conn->close();
    
?>

<html >
<head>
<meta charset="UTF-8">
<title> Leaderboard </title>
<h1>Add Score to Leaderboard</h1>
</head>
<body>
    
<form action="leaderForm.php" method="POST">
    <p>
        <label>Enter Username:</label>
        <input type="text" name="username" placeholder = "Username">
    </p>
    <p>
        <label>Enter Password:</label>
        <input type="text" name="password" placeholder = "Password">
    </p>
    <p>
        <label>Confirm Password:</label>
        <input type="text" name="password" placeholder = "Password">
    </p>
    <button type="submit" name="submit" >Create Account</button>
</form>

</body>
    
</html>