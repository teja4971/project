<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
 
    $password = $_POST["psw"];
    $cpassword = $_POST["pswr"];
   
    $email = $_POST["email"];
   

        if(($password == $cpassword) ){
           
            $sql = "INSERT INTO `user` ( `email`, `password`) VALUES ( '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
               
                header("location: loginn.php");

              
            }
        }
        else{
         echo "Password not matched";
        }
}
   
?>
<!-- End of PHP Code -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  background-color: #DFF6FF;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-image: linear-gradient(-225deg, #53BF9D  0%, #3B44F6 100%);
background-image: linear-gradient(to top, #CDF0EA 0%, #A5BECC 100%);
background-attachment: fixed;
  background-repeat: no-repeat;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #1d1d1d;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form  method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswr" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="loginn.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
