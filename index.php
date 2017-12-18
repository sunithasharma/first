<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
       
        
       $con=new mysqli("localhost","root","","sign-up");
       if($con->connect_error)
       {
           echo $con->connect_error;
           die("sorry database connection failed");
       }
        
        
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
          
                
		<label>First Name:</label>
                    <input name="firstname" type="text"  placeholder="Enter your name"  >
                    <br>
                    <br>
                <label>Last Name:</label>
                    <input name="lastname"  type="text"  placeholder="Enter your name" >
                    <br>
                    <br>
                <label>Email:</label>    
                    <input  name="email" type="email" placeholder="Email address" >
                    <br>
                    <br>
                <label>User Name:</label>
                    <input name="username" type="text"  placeholder="Enter your name"  >
                <br>
                <br>
                <label>Password:</label>
                     <input name="password" type="password"  placeholder="Password" >
                 <br>
                 <br>
                 <label>Conform Password:</label>
                     <input name="cpassword" type="password"  placeholder="Password" >
                 <br>
                 <br>
                 <button type="submit" name="btn">Submit</button>
                 
    </form>
        <?php
        if(isset($_POST["btn"]))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword=$_POST['cpassword'];
            
            if($password == $cpassword)
            {
                $sql="INSERT INTO signup(firstname,lastname,email,username,password)VALUES('$firstname','$lastname','$email','$username','$password')";
                if($con->query($sql))
                {
                    header("location:home.php");
                }
                else
                    {
                        echo "error";
                    }
            }
 else {
     echo"password";
 }
        }
        ?>
    </body>
</html>
