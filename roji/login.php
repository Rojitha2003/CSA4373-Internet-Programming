<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $servername="localhost";
        $username="root";
        $passwordDB="";
        $database="project1";

        $con=mysqli_connect($servername,$username,$passwordDB,$database);

        if(!$con){
            die("Sorry,we failed to connect" .mysqli_connect_error());
        }
        else{
            echo "Connection estabilsed successfully";
        }

        $sql="INSERT INTO users(email,password) VALUES ('$email','$password');";
        $result=mysqli_query($con,$sql);

        if($result){
            echo "Data inserted successfully";
        }
        else{
            echo "Data not inserted successfully";
        }
    }
?>